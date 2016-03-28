$(function() {
	////////////登录////////////
	$('.Inp').each(function(index, element) {
		$(this).focus(function() {
			$(this).next().css('border-color', '#eb413d')
				.siblings('.warning').css('display', 'none')
				.parent().siblings().children('.info_Line').css('border-color', '#C2C2C2')
				.siblings('.warning').css('display', 'none');
		});
	});

	$('.login_Btn').on('tap', function() {
		var a = b = c = 1;
		$(this).prev().children().find('.Inp').each(function(index, element) {
			if ($(this).val() == '') {
				$(this).siblings('.warning').css('display', 'block');
				$(this).next().css('border-color', '#eb413d');
				a = 0;
			} else {
				a = 1;
			}

		});

		//电话验证
		var tel = $('#Tel').val();
		$Tel = $(this).prev().children().find('#Tel');
		if (!telFun(tel)) {
			$Tel.next().next().css('display', 'block');
			$Tel.next().css('border-color', '#eb413d');
			b = 0;
		} else {
			b = 1;
		}

	});



	///////注册//////////
	$('.register_Btn').on('tap', function() {
		var a = b = c = d = 1;
		$(this).prev().children().find('.Inp').each(function(index, element) {
			if ($(this).val() == '') {
				$(this).siblings('.warning').css('display', 'block');
				$(this).next().css('border-color', '#eb413d');
				a = 0;
			} else {
				a = 1;
			}
		});

		//电话验证
		var tel = $('#r_Tel').val();
		$rTel = $(this).prev().children().find('#r_Tel');
		if (!telFun(tel)) {
			$rTel.next().next().css('display', 'block');
			$rTel.next().css('border-color', '#eb413d');
			b = 0;
		} else {
			b = 1;
		}

		//验证码验证

		//**********服务器验证码***********//
		var yz = mcode;
		//******************************//	
		$Yz = $(this).prev().children().find('#g_Psw');
		if ($Yz.val() != yz) {
			$Yz.next().next().css('display', 'block');
			$Yz.next().css('border-color', '#eb413d');
			c = 0;
		} else {
			c = 1;
		}

		//密码验证
		$Psw = $(this).prev().children().find('#r_Psw');
		$rePsw = $(this).prev().children().find('#r_rePsw');
		if ($Psw.val() != $rePsw.val()) {
			$Psw.next().next().css('display', 'block');
			$Psw.next().css('border-color', '#eb413d');
			$rePsw.next().next().css('display', 'block');
			$rePsw.next().css('border-color', '#eb413d');
			d = 0;
		} else {
			d = 1;
		}

		if (a * b * c * d == 1) {
			$('form[name="regForm"]').submit();
			//				$('.regiter_Success').show();
		}


	});

	//验证码
	var status = true;
	var mcode = '';

	$(".yanzheng").on("tap", function() {
		var _this = $("#r_Tel");

		if (_this.val() == "") {
			_this.next().next().css('display', 'block');
			_this.next().css('border-color', '#eb413d');
		} else {

			var temp = $(this).hasClass("reg_Wait");
			var timeYz = 60;
			var str = timeYz + 's';
			if (!temp && status) {
				mcode = Math.round(Math.random() * 10000);
				var str2 = "http://www.lazyyy.net/lyc/think_sys/Public/js/sms.php";
				str2 += "?mobile=" + _this.val() + "&mcode=" + mcode;

				$.get(str2, function(data) {
					// alert(data);
				});
				$(this).addClass("reg_Wait");
				$(".yanzheng").html(str);
				status = false;

				var timer = setInterval(function() {
					timeYz--;
					str = timeYz + 's';
					$(".yanzheng").html(str);
					if (timeYz <= 0) {
						clearInterval(timer);
						$(".yanzheng").removeClass("reg_Wait");
						$(".yanzheng").html("验证码");
						status = true;
					}
				}, 1000)
			}
		}


	})
});

//电话验证

function telFun(obj) {
	var myreg = /^0?(13[0-9]|15[012356789]|18[02356789]|14[57])[0-9]{8}$/;
	if (myreg.test(obj)) {
		return 1;
	} else {
		return 0;
	}

}