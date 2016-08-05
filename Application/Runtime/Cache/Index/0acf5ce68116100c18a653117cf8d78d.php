<?php if (!defined('THINK_PATH')) exit();?><div id="newsPopupMain" style="width:100%;height:100%;position:absolute;z-index:10;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/NewsBackground.png');background-size: 100% 100%;left:0px;top:0px;">
	<script>
	$(document).ready(function(){
        $("#newsPopupMain .newsPopupMain_CloseButton").click(function(){
            dynamicPopupGroup._closePopup("NewsMainPopup");
        });
        $("#newsPopupMain .newsPopupMain_NewsList div").click(function(evt){
			var newsid=evt.target.attributes[0].value;
            dynamicPopupGroup.addNewPopup("NewsDetailPopup","<?php echo U('WScreen/newsDetail');?>",{'newsid': newsid}, {forceReload:true,
            	afterclose:function(){
	        	dynamicPopupGroup.addNewPopup("NewsMainPopup","<?php echo U('WScreen/newsMain');?>",{}, {forceReload:true,closeButton:false}, DivDialog);
	        	}
	        }, DivDialog);
        });
        
    });
	</script>
	<div class="newsPopupMain_NextButton" style="float:right;margin-right:5%;margin-top:13%;width:30px;height:30px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/NewsNext.png');background-size: 100% 100%;">
	</div>
	<div class="newsPopupMain_CloseButton" style="float:right;margin-right:0%;margin-top:4%;width:30px;height:30px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/NewsClose.png');background-size: 100% 100%;">
	</div>
	<div class="newsPopupMain_PrevButton" style="float:right;margin-right:0%;margin-top:13%;width:30px;height:30px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/NewsPrev.png');background-size: 100% 100%;">
	</div>
	<div style="margin-top:11%;margin-left:10%;width:55%;height:60%;">
		<div class="newsPopupMain_NewsList" style="width:92%;height:94%;margin:3% 4% 3% 4%;">
			<?php if(is_array($news)): foreach($news as $key=>$vo): if($key == 0): ?><div style="padding-bottom:10px;font-size:15px;border-bottom:1px dotted black;">
						<a newsid= "<?php echo ($vo["newsid"]); ?>"><?php echo ($vo["newstitle"]); ?></a>
					</div>
				<?php else: ?>
					<div style="margin-top:20px;padding-bottom:10px;font-size:15px;border-bottom:1px dotted black;">
						<a newsid= "<?php echo ($vo["newsid"]); ?>"><?php echo ($vo["newstitle"]); ?></a>
					</div><?php endif; endforeach; endif; ?>
		</div>
	</div>

</div>