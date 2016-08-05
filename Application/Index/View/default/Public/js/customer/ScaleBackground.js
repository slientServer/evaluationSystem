function ScaleBackground(parameters){
	//this.rootElement = $("body");
	this.parameters = {
		backgroundWidth : 0,
		backgroundHeight : 0,
		backgroundImg : "",
		usingShortCalculate : false,
		onBackgroundImageLoad : function(){
		},
		rootElement: $("body")
	}
	var that = this;
	$.extend(that.parameters, parameters);
	this.rootElement = this.parameters.rootElement;
	this.init();
	$(window).resize(function(){
		that.init();
	});
}
$.extend(ScaleBackground.prototype, {
	init : function(){
		var that = this;
		var windowHeight = $(window).height();
		var windowWidth = $(window).width();
		var backImageHeight = this.parameters.backgroundHeight;
		var backImageWidth = this.parameters.backgroundWidth;
		var heightRatio = windowHeight/backImageHeight;
		var widthRatio = windowWidth/backImageWidth;

		var usingRatio = heightRatio;
		if(this.parameters.usingShortCalculate==true){
			if(backImageWidth*heightRatio<windowWidth){
				usingRatio = widthRatio;
			}
		}else{
			if(backImageWidth*heightRatio>windowWidth){
				usingRatio = widthRatio;
			}
		}

		this.usingRatio = usingRatio;
		this.heightRatio = heightRatio;
		this.widthRatio = widthRatio;

		var actualBackgroundWidth = backImageWidth*usingRatio;
		var actualBackgroundHeight = backImageHeight*usingRatio;
		var offsetLeft = (windowWidth-actualBackgroundWidth)/2;
		var offsetTop = (windowHeight-actualBackgroundHeight)/2;

		this.offsetLeft = offsetLeft;
		this.offsetTop = offsetTop;
		that.repositionTarget();

		/*$.each(actionAreaArray, function(idx, val){
			if(typeof val.positionTraget=="function"){
				val.positionTraget(usingRatio, offsetLeft, offsetTop, 118, 50, 331, 260);
			}
		});*/
	},
	repositionTarget : function(){
		var preferredRatio = this.usingRatio;
		var offsetLeft = this.offsetLeft;
		var offsetTop = this.offsetTop;
		this.locateBackground(preferredRatio, offsetLeft, offsetTop);
	},
	positionTraget : function(preferredRatio, offsetLeft, offsetTop, imageWidth, imageHeight, imageLeft, imageTop){
		this.preferredRatio = preferredRatio;
		this.locateBackground(preferredRatio, offsetLeft, offsetTop);
	},
	locateBackground : function(ratio, offsetLeft, offsetTop){
		var that = this;
		var addedEle = null;
		if(this.theElement == null){
			var rootEle = this.rootElement;
			//addedEle = $("<div></div>").css("position","absolute").css("background-image","url("+that.parameters.backgroundImg+")").css("background-repeat","no-repeat").css("background-size","100% 100%").css("z-index","0").css("-webkit-transform","translateZ(0)");
			addedEle = $("<div><img></div>").css("position","absolute").css("z-index","0").css("-webkit-transform","translateZ(0)");
			addedEle.find("img").attr("src",that.parameters.backgroundImg).css("width","100%").css("height","100%").on("load", that.parameters.onBackgroundImageLoad);
			$(rootEle).append(addedEle);
			this.theElement = addedEle;	
		}else{
			addedEle = this.theElement;
		}
		var backgroundWidth = this.parameters.backgroundWidth;
		var backgroundHeight = this.parameters.backgroundHeight;
		addedEle = $(addedEle);
		addedEle.width(backgroundWidth*ratio);
		addedEle.height(backgroundHeight*ratio);
		addedEle.css("left",(offsetLeft)+"px");
		addedEle.css("top",(offsetTop)+"px");
	}
});