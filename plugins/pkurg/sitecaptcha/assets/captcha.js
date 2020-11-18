
	function updateCaptcha()
	{
		
		var captcha = $('img.captcha-img');
        var config = captcha.data('refresh-config');
        $.ajax({
            method: 'GET',
            url: '/get_captcha/' + config,
        }).done(function (response) {
            captcha.prop('src', response);
        });
		
	}

   
    $('#refreshcaptcha').on('click', updateCaptcha);
