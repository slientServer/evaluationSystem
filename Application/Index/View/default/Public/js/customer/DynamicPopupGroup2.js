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
	console.log("0CurrentPopupID:"+this.currentPopupID);
	var that = this;
	that.next = true;
	this.lastPopupID = this.currentPopupID;
	if(id==null || id=="") return;
	var usingOption = {};
	$.extend(usingOption, that.options);
	$.extend(usingOption, options);
	var that = this;
	console.log("1LastPopupID:"+that.lastPopupID);
	console.log("1CurrentPopupID:"+that.currentPopupID);
	this._closePopup(that.lastPopupID, function(){
		var theDialog = that.popups[id];
		if(theDialog!=null){
			theDialog.openDialog();
			theDialog.opened=true;
			that.currentPopupID=id;
			console.log("2LastPopupID:"+that.lastPopupID);
			console.log("2CurrentPopupID:"+that.currentPopupID);
		}
	});
};
DynamicPopupGroup.prototype._closePopup=function(id, callback){
	if(typeof callback!="function"){
		callback = function(){}
	}
	var that = this;
	if(id==null || id==""){
		callback();
		return;
	}
	var theDialog = this.popups[id];
	if(theDialog!=null){
		if(theDialog.opened==false){
			callback();
		}else{
			theDialog.setEventOnceOnClose(callback);
			//theDialog.popupEle.one("popupafterclose", callback);
			theDialog.closeDialog();
			that.popups[id].opened=false;
			//that.currentPopupID = "";
		}
	}else{
		callback();
	}
};
DynamicPopupGroup.prototype.closeLastPopup=function(){
	var that = this;
	this._closePopup(that.lastPopupID);
};
DynamicPopupGroup.prototype.closeCurrentPopup=function(callback){
	var that = this;
	this._closePopup(that.currentPopupID, callback);
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
DynamicPopupGroup.prototype.addNewPopup=function(id, url, data, option, proto){
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
	var popupID = id;
	//if the popup already opened before and require to reload
	//try using the popup stored URL for accessig the page
	if(url==null || url=="" || data==null || data==""){
		var backupedPopup = this.popups[popupID];
		var option = backupedPopup.options;
		var url = backupedPopup.url;
		var data = backupedPopup.data;
	}
	//prepare the options
	$.extend(myOption, that.options);
	$.extend(myOption, option);

	//injenct the after close action
	var usingAfterClose = function(){
		console.log("usingAfterClose"+that.next);
		if(that.next==false){
			myOption.afterclose();
		}
		that.next=false;
	}
	myOption.usingAfterClose = usingAfterClose;
	var popupData = {
		"id" : id,
		"popupElement" : null,
		"method" : myOption.dataMethod,
	    "url" : url,
	    "data" : data,
	    "closeButton" : myOption.closeButton,
	    "options" : myOption,
	    "proto" : proto
	}
	var popupObject = null;
	
	var popupEle = null;
	var contentElement = null;
	//get the popup element
	var isPopupObjectOriginalExists = false;
	
	if(this.popups[id]!=null){
		isPopupObjectOriginalExists = true;
		popupObject = this.popups[id];
	}else{
		isPopupObjectOriginalExists = false;
		var dialog = new PopupDialog();
		if(proto!=null){
			dialog = new proto();
		}
		
		var popupEle = dialog.createDialog(id, myOption, popupData, function(){
			//that.currentPopupID="";
			//action after close button clicked
            that.next = false;
            that._closePopup(id);
            dialog.opened=false;
		});
		$(myOption.rootElement).append(popupEle);
		this.popups[id] = dialog;
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
			var dialog = that.popups[id];
			dialog.populateContent(id, that, myOption, pageReceived, myOption.forceReload);
			if(myOption.openAfterLoad==true){
		        //will not require to reload the page if from addNewPopup method
		        myOption.forceReload = false;
		        that.openPopup(id, myOption);
		    }
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