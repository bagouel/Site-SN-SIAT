$( document ).ready(function()
{
	/*==================================================
	MAIN CONFIG
	==================================================*/



	/*================================================*/










	/*==================================================
	MENÚ FUNCTIONS
	==================================================*/
	/*
	$(document).on('mouseover', '.menu_item', function(e)
	{
		//TweenLite.to(this, 0.25, {color:"#55EFCD"});
	});

	$(document).on('mouseout', '.menu_item', function(e)
	{
		//TweenLite.to(this, 0.25, {color:"#000"});
	});
	*/

	$(document).on('mousedown touchdown', '.main_menu_item', function(e)
	{
		$('.submenu').hide('fast');
		$(this).find('.submenu').show('fast');
	});

	$(document).on('mouseleave', '.submenu', function(e)
	{
		$('.submenu').hide('fast');
	});
	
	/*================================================*/










	/*==================================================
	ANCHOR
	==================================================*/

	$(document).on('mousedown', '.main_menu_item .submenu_item', function(e)
	{
		e.preventDefault();

		var name = $(this).attr('href');
		var split = name.split('#');

    	$('html,body').animate({scrollTop: $('#' + split[1]).offset().top - 100},'slow');
	});

	/*
	function about_us(get_url)
	{
		$('.submenu_item').removeClass('submenu_active');
		$('.submenu_item[name=' + get_url + ']').addClass('submenu_active');

		$('.submenu_content').hide();
		$('.submenu_content[data-name=' + get_url + ']').show();
	}
	*/
	/*================================================*/










	/*==================================================
	GALLERY
	==================================================*/

	$("[data-fancybox]").fancybox({
		buttons: ["close", "thumbs", "share"],
		thumbs : {
			autoStart   : true
		},
	});

	/*================================================*/










	/*==================================================
	POPUP
	==================================================*/

	var form_popup = 
		'<div id="dialog_box">'+
			'<div id="dialog_block">'+
				'<div id="dialog_text_block">'+
					'<div id="dialog_text"></div>'+
				'</div>'+
			'</div>'+
			'<div id="dialog_btn">X</div>'+
		'</div>'
	;

	function popup(state, text)
	{
		screen_size = $('body').height();

		if(state == "open")
		{
			if($('#dialog_box').length)
			{
				setTimeout(
					function()
					{
						$('#dialog_box:first-child').css('z-Index', 22);
					},100
				);
			}

			$('body').prepend(form_popup);
			$('#dialog_text').html(text);

			$('#dialog_box').css('z-index', '21');

			TweenLite.to('#dialog_box', 0.25, {alpha:1, display:'table'});
			TweenLite.from('#dialog_block', 0.5, {y:screen_size, scaleX:1, scaleY:1, ease:Expo.easeOut});
		}

		if(state == "close")
		{
			TweenLite.to('#dialog_block', 0.25, {y:screen_size, scaleX:1, scaleY:1, ease:Expo.easeOut});
			TweenLite.to('#dialog_box', 0.25, {alpha:0, display:'none',
				onComplete:function()
				{
					$('#dialog_box').remove();
				}
			});
		}
	}

	$(document).on('mousedown', '#dialog_btn', function(e)
	{
		popup('close', null);
	});

	/*================================================*/










	/*==================================================
	CONTACT FORM
	==================================================*/

	function contact_form()
	{
		active_btn = true;

		var flag;

		$('#contact_form input, #contact_form select, #contact_form textarea').on('mouseup keyup', function(e)
		{
			flag = true;

			var name = $('input[name="name"]');
			var lastname = $('input[name="lastname"]');
			var phone = $('input[name="phone"]');
			var email = $('input[name="email"]');

			var error_color = "0px 0px 10px 0px #737A7F";
			
			//NAME
			if(!$(name).val().length)
			{
				flag = false;
				TweenLite.to(name, 0.25, {boxShadow:error_color});
			}
			else
			{
				TweenLite.to(name, 0.25, {boxShadow:"none"});
			}

			//LASTNAME
			if(!$(lastname).val().length)
			{
				flag = false;
				TweenLite.to(lastname, 0.25, {boxShadow:error_color});
			}
			else
			{
				TweenLite.to(lastname, 0.25, {boxShadow:"none"});
			}

			//PHONE
			if(!$(phone).val().length)
			{
				flag = false;
				TweenLite.to(phone, 0.25, {boxShadow:error_color});
			}
			else
			{
				TweenLite.to(phone, 0.25, {boxShadow:"none"});
			}

			//EMAIL
			if($(email).val().search('@') == -1 || $(email).val().indexOf('.') == -1)
			{
				flag = false;
				TweenLite.to(email, 0.25, {boxShadow:error_color});
			}
			else
			{
				TweenLite.to(email, 0.25, {boxShadow:"none"});
			}
		});

		$('#contact_form').on('submit', function(e)
		{
			if(flag && active_btn)
			{
				active_btn = false;
				$('#contact_form #form_btn').hide();

				$.ajax(
				{
		        	url: "php/contact.php",
					type: "POST",
					data:  new FormData(this),
					contentType: false,
		    	    cache: false,
					processData:false,
					success: function(data)
				    {
						if(parseInt(data))
						{
							popup('close', null);

							setTimeout(
								function()
								{
									$('#contact_form')[0].reset();
									popup('open', "¡GRACIAS! Te estaremos contactando muy pronto.");
								},500
							);
						}
						else
						{
							popup('open', "ERROR: verifica si tienes conexión a internet y vuelve a intentar.");
						}

						active_btn = true;
						$('#contact_form #form_btn').show();
				    },
				  	error: function() 
			    	{
						popup('open', "ERROR: verifica si tienes conexión a internet y vuelve a intentar.");
						
						active_btn = true;
						$('#contact_form #form_btn').show();
			    	}
			   });
			}
				
			return false;
		});
	}

	contact_form();

	/*================================================*/
});