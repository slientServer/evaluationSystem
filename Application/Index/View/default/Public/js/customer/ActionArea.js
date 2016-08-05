function ActionArea(screenChangeItemList, rootElement, parameters){
	this.screenChangeItemList = screenChangeItemList;
	if(this.screenChangeItemList!=null && typeof this.screenChangeItemList.push == "function"){
		this.screenChangeItemList.push(this);
	}
	this.rootElement = rootElement==null ? $("body") : rootElement;
	this.parameters = {
		backgroundWidth : 0,
		backgroundHeight : 0,
		areaWidth : 0,
		areaHeight: 0,
		areaLeft : 0,
		areaTop : 0,
		areaBackgroundImg : "",
		usingShortCalculate : false,
		events : {
			click : function(){

			}
		}
	}
	var that = this;
	$.extend(that.parameters, parameters);
	this.init();
	$(window).resize(function(){
		that.init();
	});
}
$.extend(ActionArea.prototype, {
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
		this.locateActionArea(preferredRatio, offsetLeft, offsetTop);
	},
	positionTraget : function(preferredRatio, offsetLeft, offsetTop, imageWidth, imageHeight, imageLeft, imageTop){
		this.preferredRatio = preferredRatio;
		this.locateActionArea(preferredRatio, offsetLeft, offsetTop);
	},
	locateActionArea : function(ratio, offsetLeft, offsetTop){
		var that = this;
		var addedEle = null;
		if(this.theElement == null){
			var rootEle = this.rootElement;
			addedEle = $("<div></div>").css("position","absolute").css("background-image","url("+that.parameters.areaBackgroundImg+")").css("background-repeat","no-repeat").css("background-size","100% 100%").css("z-index","1");
			$(rootEle).append(addedEle);
			this.theElement = addedEle;	
			addedEle.on("click", function(evt){
				if(typeof that.parameters.events.click == "function"){
					that.parameters.events.click(evt);
					//evt.preventDefault();
					evt.stopPropagation();
				}
			});
		}else{
			addedEle = this.theElement;
		}
		var left = this.parameters.areaLeft*ratio;
		var top = this.parameters.areaTop*ratio;
		var areaWidth = this.parameters.areaWidth;
		var areaHeight = this.parameters.areaHeight;
		addedEle = $(addedEle);
		addedEle.width(areaWidth*ratio);
		addedEle.height(areaHeight*ratio);
		addedEle.css("left",(offsetLeft+left)+"px");
		addedEle.css("top",(offsetTop+top)+"px");
	},
	hide: function(){
		this.theElement.css("display","none");
	}
});