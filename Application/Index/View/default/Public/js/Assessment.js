$(document).ready(function(){
	var currentUserId='';
	$('.assess-button').click(
		function(){
			var userid= $(this).attr('userid');
			currentUserId= userid;
		});	
	$('.assess-save').click(
		function(){
			if($('#score').val()){
				if(0<$('#score').val()&& $('#score').val()<= 100){
					$.ajax({url:"assessExecution",async:false, success: function(evt){
						if(evt){
							$('.success-hint').text('保存成功,3秒后自动关闭');
							$('.success-hint').fadeIn("slow");
							setTimeout(function(){
								$('.success-hint').fadeOut("slow");
								$('#myModal').modal('hide');
								window.location.reload();
							}, 2000);
						}else{
							$('.success-hint').text('保存失败');
							$('.success-hint').fadeIn("slow");
							setTimeout(function(){
								$('.success-hint').fadeOut("slow");
							}, 2000);
						}				
					},
					data: {'userid': currentUserId, 'score': $('#score').val(), 'remark': $('#remark').val(), 'isannoy': ($('#anony').is(':checked')? 1: 0)}
					});
				}else{
						$('#score').focus();
						$('.success-hint').text('分数无效');
						$('.success-hint').fadeIn("slow");
							setTimeout(function(){
								$('.success-hint').fadeOut("slow");
						}, 1000);
				}
			}else{
					$('#score').focus();
					$('.success-hint').text('分数必须输入');
					$('.success-hint').fadeIn("slow");
						setTimeout(function(){
							$('.success-hint').fadeOut("slow");
					}, 1000);
			}
		});


});