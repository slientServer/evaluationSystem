function PopupDialog(option){
	var defaultOptions = {
        modal : false,
        transition : "pop",
        backgroundColor : "white",
        borderColor : "white",
        closeButton : true,
        boxShadow : "none",
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
    var dialogData = {
        "method" : "GET",
        "url" : "",
        "data" : "",
        "options" : null
    }
    this.dialogData = dialogData;
    this.options = defaultOptions;
    this.closeEle = null;
    this.opened = false;
    this.popupEle = null;
    this.parent = null;
    this.isInitialized = false;
}

PopupDialog.prototype.createDialog = function(id, myOptions, dialogData, closeButtonAction){
    var that = this;
    $.extend(this.dialogData, dialogData);
    var usingOption = {};
    $.extend(usingOption, that.options);
    $.extend(usingOption, myOptions);
    var template = '<div class="ui-content" data-role="popup" id="'+id+'" data-overlay-theme="b" style="background-color:'
        +usingOption.backgroundColor+';border-color:'
        +usingOption.borderColor+';"></div>';
    var popupEle = $(template);
    this.popupEle = popupEle;
    if(usingOption.boxShadow=="none"){
        popupEle.css("box-shadow","rgba(255,255,255,0) 0px 0px 0px 0px");
    }

    var closeImagePath = imageRootPath==null
        ?"../../../Application/Index/View/default/Public/images/closeButton.png"
        :imageRootPath+"/closeButton.png";
    var closeTemplate = '<a href="#" id="'+id+'CloseButton" style="width:30px;height:30px;top:30px;right:30px;background-image:url(\''+closeImagePath+'\');background-size:30px 30px;" class="popupCloseButton ui-btn-right">&nbsp;</a>';
    var closeEle = $(closeTemplate);
    this.closeEle = closeEle;
    if(usingOption.closeButton==true){
        popupEle.append(closeEle);
    }
    var contentTemplate = '<div class="popupContent" style=""></div>';
    this.contentElement = $(contentTemplate);
    popupEle.append(this.contentElement);
    var usingAfterClose = myOptions.usingAfterClose;
    

    //binding popup close actoin
    if(usingOption.closeButton==true){
        closeEle.click(function(){
            if(typeof closeButtonAction=="function"){
                closeButtonAction();
            }
        });
    }
    this.usingOption = usingOption;

    return popupEle;
}

PopupDialog.prototype.populateContent = function(id, parent, myOption, pageReceived, requireEmpty){
    if(requireEmpty==true){
        this.contentElement.empty();
    }
    var popupContentEle = $(pageReceived);
    this.contentElement.append(popupContentEle);
    this.popupEle.enhanceWithin();
    myOption.callBackSuccess(pageReceived, this);
}
PopupDialog.prototype.openDialog = function(){
    if(this.isInitialized==false){
        var usingOption = this.usingOption;
        this.popupEle.popup({
            "dismissible" : !usingOption.modal,
            "transition" : usingOption.transition,
            "afterclose" : usingOption.usingAfterClose,
            "afteropen" : usingOption.afteropen,
            "beforeposition" : usingOption.beforeposition,
            "create" : usingOption.create
        });
        this.isInitialized=true;
    }
    this.popupEle.popup("open");
}
PopupDialog.prototype.setEventOnceOnClose = function(callback){
    this.popupEle.one("popupafterclose", callback);
}
PopupDialog.prototype.closeDialog = function(){
    this.popupEle.popup("close");
}