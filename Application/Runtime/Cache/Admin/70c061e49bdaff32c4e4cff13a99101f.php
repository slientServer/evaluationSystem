<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/News/insert/navTabId/listnews/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>新闻标题：</dt>
				<dd><input type="input"  style="width:568px" name="newstitle"/></dd>
			</dl>
			<dl>
				<dt>新闻内容：</dt>
				<dd><textarea id="elm1" rows="28" style="width:568px" name="newscontent"/>
					</textarea>
					<script>
						$('#elm1').xheditor({tools:'Cut,Copy,Paste,Pastetext,|,Fullscreen,Blocktag,Fontface,FontSize,Bold,Italic,Underline,Strikethrough,FontColor,BackColor,SelectAll,Removeformat,Align,List,Outdent,Indent,Hr,Img',skin:'o2007blue',upLinkUrl:"/workspace/simpsons/trunk/server/Admin/News/upload",upLinkExt:"zip,rar,txt",upImgUrl:"/workspace/simpsons/trunk/server/Admin/News/upload",upImgExt:"jpg,jpeg,gif,png",upFlashUrl:"/workspace/simpsons/trunk/server/Admin/News/upload",upFlashExt:"swf",upMediaUrl:"/workspace/simpsons/trunk/server/Admin/News/upload",upMediaExt:"avi",urlBase:'/workspace/simpsons/trunk/server/'});
					</script>
				</dd>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>