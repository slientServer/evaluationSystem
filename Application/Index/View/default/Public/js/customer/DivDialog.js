function DivDialog(option){
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

DivDialog.prototype.createDialog = function(id, myOptions, dialogData, closeButtonAction){
    var that = this;
    $.extend(this.dialogData, dialogData);
    var usingOption = {};
    $.extend(usingOption, that.options);
    $.extend(usingOption, myOptions);
    var template = '<div id="'+id+'" style="background-color:'
        +usingOption.backgroundColor+';border-color:'
        +usingOption.borderColor+';"></div>';
    var popupEle = $(template);
    this.popupEle = popupEle;
    if(usingOption.boxShadow=="none"){
        popupEle.css("box-shadow","rgba(255,255,255,0) 0px 0px 0px 0px");
    }
    /*var closeTemplate = '<a href="#" id="'+id
        +'CloseButton" style="z-index:20;top:10px;right:10px;" '
        +'class="popupCloseButton ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>';*/
    var closeImagePath = imageRootPath==null
        ?"../../../Application/Index/View/default/Public/images/closeButton.png"
        :imageRootPath+"/closeButton.png";
    var closeTemplate = '<a href="#" id="'+id+'CloseButton" style="z-index:20;width:35px;height:35px;top:15px;right:15px;background-image:url(\''+closeImagePath+'\');background-size:35px 35px;" class="popupCloseButton ui-btn-right">&nbsp;</a>';

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
                usingAfterClose();
            }
        });
    }
    this.contentElement.bind("mycloseaction", function(){
        if(typeof closeButtonAction=="function"){
            closeButtonAction();
            usingAfterClose();
        }
    });
    this.usingOption = usingOption;

    return popupEle;
}

DivDialog.prototype.populateContent = function(id, parent, myOption, pageReceived, requireEmpty){
    if(requireEmpty==true){
        this.contentElement.empty();
    }
    var popupContentEle = $(pageReceived);
    this.contentElement.append(popupContentEle);
    this.popupEle.enhanceWithin();
    myOption.callBackSuccess(pageReceived, this);
}
DivDialog.prototype.openDialog = function(){
    this.popupEle.css("display","block");
}
DivDialog.prototype.setEventOnceOnClose = function(callback){
    this.popupEle.one("popupafterclose", callback);
}
DivDialog.prototype.closeDialog = function(){
    this.popupEle.css("display","none");
    this.popupEle.trigger("popupafterclose");
}