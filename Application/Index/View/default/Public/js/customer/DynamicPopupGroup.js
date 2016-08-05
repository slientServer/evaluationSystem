/*
 * DynamicPopupGroup
 * options
 * {
 *       rootElement: the rootElement for the popup. default-> $("body"),
 *       forceReload: if reload the page when open the popup. defailt-> false,
 *       modal: if this popup is modal popup. default-> false,
 *       transition: the transition animation. default-> "pop",
 *       dataMethod : the method using for submit data for getting the page. Could be "GET"/"POST" default->"GET",
 *       openAfterLoad: if require to open the popup when added the popup. default-> true
 *   }
 */
function DynamicPopupGroup(option){
	var defaultOptions = {
        rootElement : $("body"),
        forceReload : false,
        modal : false,
        transition : "pop",
        dataMethod : "GET",
        openAfterLoad : true,
        backgroundColor : "white",
        borderColor : "white",
        closeButton : true,
        boxShadow : "none"
    };
    this.next = false;
    this.popups = {};
    this.options = defaultOptions;
    $.extend(this.options,option);
    this.currentPopupID = "";
    this.lastPopupID = "";
    this.loadingPopupID = "";
}
DynamicPopupGroup.prototype.openPopup=function(id, options){
	var that = this;
	that.next = true;
	this.lastPopupID = this.currentPopupID;
	if(id==null || id=="") return;
	var usingOption = {};
	$.extend(usingOption, that.options);
	$.extend(usingOption, options);
	var that = this;
	var lengthOfCurrentElement = 0;
	this.closePopup(that.lastPopupID, function(){
		var popupEle = that.popups[id].popupElement;
		if(popupEle!=null){
			if(usingOption.forceReload==true){
				that.addNewPopup(id, "", "", usingOption);
			}else{
				popupEle.popup("open");
				that.popups[id].opened=true;
			}
			that.currentPopupID=id;
		}
	});
};
DynamicPopupGroup.prototype.closePopup=function(id, callback){
	if(typeof callback!="function"){
		callback = function(){}
	}
	var that = this;
	if(id==null || id==""){
		callback();
		return;
	}
	var popupEle = this.popups[id].popupElement;
	if(popupEle!=null){
		if(that.popups[id].opened==false){
			callback();
		}else{
			popupEle.popup("close");
			that.popups[id].opened=false;
			popupEle.one("popupafterclose", callback);
			that.currentPopupID = "";
		}
	}else{
		callback();
	}
};
DynamicPopupGroup.prototype.closeLastPopup=function(){
	var that = this;
	this.closePopup(that.lastPopupID);
};
DynamicPopupGroup.prototype.closeCurrentPopup=function(callback){
	var that = this;
	this.closePopup(that.currentPopupID, callback);
};
DynamicPopupGroup.prototype.getCurrentPopupID=function(){
	return this.currentPopupID;
}
DynamicPopupGroup.prototype.getLoadingPopupObject=function(){
	return this.popups[this.loadingPopupID];
}
DynamicPopupGroup.prototype.getLastPopupID=function(){
	return this.lastPopupID;
}
DynamicPopupGroup.prototype.addNewPopup=function(id, url, data, option){
	var that = this;
	this.loadingPopupID = id;
	this.next = false;
	var myOption = {
		callBackSuccess: function(){

		},
		callBackFailed: function(){

		},
		callBackAlways: function(){

		},
		afterclose: function(){

		},
		afteropen: function(){

		},
		beforeposition: function(){

		},
		create: function(){

		}
	};
	if(url==null || url=="" || data==null || data==""){
		var backupedPopup = this.popups[popupID];
		var option = backupedPopup.options;
		var url = backupedPopup.url;
		var data = backupedPopup.data;
	}
	$.extend(myOption, that.options);
	$.extend(myOption, option);
	var usingAfterClose = function(){
		console.log(that.next);
		if(that.next==false){
			myOption.afterclose();
		}
		that.next=false;
	}
	var popupID = id;
	var popupObject = {
		"popupElement" : null,
		"method" : myOption.dataMethod,
	    "url" : url,
	    "data" : data,
	    "options" : myOption
	}	
	
	var popupEle = null;
	var contentElement = null;
	//get the popup element
	var isPopupObjectOriginalExists = false;
	popupObject.closeButton = myOption.closeButton;
	if(this.popups[popupID]!=null){
		isPopupObjectOriginalExists = true;
		popupObject = this.popups[popupID];
		popupEle = popupObject.popupElement;
		closeEle = popupEle.find(".popupCloseButton");
	}else{
		isPopupObjectOriginalExists = false;
		var template = '<div class="ui-content" data-role="popup" id="'+id+'" data-overlay-theme="b" style="background-color:'+myOption.backgroundColor+';border-color:'+myOption.borderColor+';"></div>';
		popupEle = $(template);
		if(myOption.boxShadow=="none"){
			popupEle.css("box-shadow","rgba(255,255,255,0) 0px 0px 0px 0px");
		}
		var closeTemplate = '<a href="#" id="'+id+'CloseButton" style="width:30px;height:30px;top:30px;right:30px;background-image:url(\'../../../Application/Index/View/default/Public/images/closeButton.png\');background-size:30px 30px;" class="popupCloseButton ui-btn-right">&nbsp;</a>';
		var closeEle = $(closeTemplate);
		if(popupObject.closeButton==true){
			popupEle.append(closeEle);
		}
		var contentTemplate = '<div class="popupContent" style=""></div>';
		popupEle.append($(contentTemplate));
		$(myOption.rootElement).append(popupEle);
		popupEle.popup({
			"dismissible" : !myOption.modal,
			"transition" : myOption.transition,
			"afterclose" : usingAfterClose,
			"afteropen" : myOption.afteropen,
			"beforeposition" : myOption.beforeposition,
			"create" : myOption.create
		});
		popupObject.popupElement = popupEle;
		this.popups[id] = popupObject;
	}
	popupObject.closeEle = closeEle;
	contentElement = popupEle.find(".popupContent");
	//binding popup close actoin
	if(popupObject.closeButton==true){
		popupEle.find(".popupCloseButton").click(function(){
			popupObject.popupElement.popup("close");
			popupObject.opened=false;
		});
	}
	
	if(isPopupObjectOriginalExists==false || myOption.forceReload == true){
		var usingData = {};
		$.extend(usingData, data);
		$.extend(usingData, {"timestampForLoad": new Date().getTime()})
		//load popup content
		$.ajax({
		    "method": myOption.dataMethod,
		    "url": url,
		    "data": usingData,
		    "dataType": "text"
		}).done(function( pageReceived ) {
			//empty the popup content if force reload
			if(myOption.forceReload == true){
				$(contentElement).empty();
				closeEle.on("click", function(){
					that.lastPopupID="";
					that.currentPopupID="";
					that.next = false;
					popupObject.popupElement.popup("close");
				});
			}
			var popupContentEle = $(pageReceived);
			contentElement.append(popupContentEle);
			popupObject.popupElement.enhanceWithin();
			if(myOption.openAfterLoad==true){
				//will not require to reload the page if from addNewPopup method
				myOption.forceReload = false;
				that.openPopup(id, myOption);
			}
			myOption.callBackSuccess(pageReceived, popupObject);
		}).fail(function(){
			myOption.callBackFailed();
		}).always(function(){
			myOption.callBackAlways();
		});
	}else{
		if(myOption.openAfterLoad==true){
			//will not require to reload the page if from addNewPopup method
			myOption.forceReload = false;
			that.openPopup(id, myOption);
		}
	}
	
};