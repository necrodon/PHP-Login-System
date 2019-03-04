$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);
	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']",_form).val()
	}

	if (dataObj.email.length < 6) {
		_error
			.text("please enter a valid email")
			.show();
			return false;

	}else if(dataObj.password.length < 8){
		 _error
		 	.text("please enter a password that is at least 10 chars long")
		 	.show();
		 	return false;
	}

	// if the code gets this far start ajax process
	_error.hide();

	$.ajax({
		type: 'POST',
		url: 'ajax/register.php',
		data: dataObj,
		dataType: 'Json',
		async: true,
	})
	.done(function ajaxDone(data){
		console.log(data);
	})

	.fail(function ajaxFailed(e){
		console.log(e);
	})

	.always(function ajaxAlwaysDoThis(data){
		console.log('always');
	})

	console.log(dataObj);
	return false;
})