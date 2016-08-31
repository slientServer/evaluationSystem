$(document).ready(function(){
	var currentUserId='';
	$('.pm-button').click(
		function(){
			var userid= $('.active .pm-button').attr('userid');
			currentUserId= userid;
		});	
	$('.pm-save').click(
		function(){
			var valueArr=[];
			var groupId= $('.active .pm-save').attr('groupId');
			var modalNum= $('.active .pm-save').attr('modalNum');
			var questionArr= [];
			var questionValue= [];
			for(var idx=0; idx< $('.questionValue'+modalNum).length; idx++){
				if($('.questionValue'+modalNum)[idx].value== ''|| $('.questionValue'+modalNum)[idx].value<0 || $('.questionValue'+modalNum)[idx].value>100){
					$('.errorHint').fadeIn();
					setTimeout(function(){
						$('.errorHint').fadeOut();
					}, 2000);
					return false;
				}else{
					questionValue.push($('.questionValue'+modalNum)[idx].value);
					questionArr.push($('.questionLabel'+modalNum)[idx].innerText);
				}
			}
			$.ajax({url:"performanceExecution",async:false, success: function(evt){
				if(evt== 'success'){
					$('.errorHint').text('保存成功,1秒后自动关闭');
					$('.errorHint').fadeIn("slow");
					setTimeout(function(){
						$('.errorHint').fadeOut("slow");
						$('#myModal'+modalNum).modal('hide');
						window.location.reload();
					}, 1000);
				}else{
					$('.errorHint').text('保存失败');
					$('.errorHint').fadeIn("slow");
					setTimeout(function(){
						$('.errorHint').fadeOut("slow");
					}, 1000);
				}				
			},
			data: {'userid': currentUserId, 'groupId': groupId, 'questionArr': questionArr, 'questionValue': questionValue}
			});
		}
	);
});