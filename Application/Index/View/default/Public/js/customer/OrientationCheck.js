function OrientationCheck(preferredOrintation, successCallBack, failedCallBack){
	this.preferredOrintation = preferredOrintation;
	this.successCallBack = successCallBack;
	this.failedCallBack = failedCallBack;
	this.prevOrientation = -1;
}
$.extend(OrientationCheck.prototype, {
	setPreferredOrintation : function(orintation){
		this.preferredOrintation = orintation;
	},
	getPreferredOrintation : function(){

	},
	_checkOrientation : function(){
		var callbacksuccess = this.successCallBack;
		var callback = this.failedCallBack;
		var orintation = this.preferredOrintation
		/*if(window.orientation==null){
			if(typeof callbacksuccess=="function"){
				callbacksuccess();
			}
			return true;
		}*/
		var wheight = $(window).height();
		var wwidth = $(window).width();
		var windowOritation = 0;
		if(wheight>wwidth){
			windowOritation=0;
		}else{
			windowOritation=90;
		}
		//var windowOritation = Math.abs(window.orientation);
		
		if(windowOritation==180) windowOritation = 0;
		if(orintation==0){
			if(windowOritation != 0) // Portrait
			{
				if(typeof callback=="function"){
					callback();
					return false;
				}
			}
		}else{
			if(windowOritation == 0) // Portrait
			{
				if(typeof callback=="function"){
					callback();
					return false;
				}
			}
		}
		if(typeof callbacksuccess=="function"){
			callbacksuccess();
			return true;
		}
		return true;
	},
	setOritationChangeMethod : function(){
		var that = this;
		if(window.orientation!=null){
			var windowOritation = Math.abs(window.orientation);
			if(windowOritation==this.prevOrientation){
				return;
			}else{
				this.prevOrientation = windowOritation;
			}
		}
		setTimeout(function(){
			that._checkOrientation(that.preferredOrintation, that.failedCallBack, that.successCallBack);	
		},1);
	}
});