$(document).ready(function(){
	var showname= $('#username').val();
	var password= $('#password').val();
	var phone= $('#phone').val();
	$('#updatePersonalInfo').click(function(evt){
		$('.infoInput').removeAttr('disabled');
		$('#updatePersonalInfo').addClass('hidden');
		$('#updatePersonalInfoSave').removeClass('hidden');
		$('#updatePersonalInfoCancel').removeClass('hidden');
		return false;
	});

	$('#updatePersonalInfoCancel').click(function(){
		$('.infoInput').attr('disabled', true);
		$('#username').val(showname);
		$('#password').val(password);
		$('#password').attr('type', 'password');
		$('#phone').val(phone);
		$('#updatePersonalInfo').removeClass('hidden');
		$('#updatePersonalInfoSave').addClass('hidden');
		$('#updatePersonalInfoCancel').addClass('hidden');
		return false;
	});

	$('#password').focus(function(){
		$('#password').val('');
		$('#password').attr('type', 'input');
	});
});