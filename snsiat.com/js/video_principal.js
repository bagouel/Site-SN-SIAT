/*$( document ).ready(function()
{
	/*==================================================
	POPUP
	==================================================

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
	VIDEO
	==================================================*/
	/*
	$('body').prepend(
		'<video id="background-video" autoplay preload="metadata" playsinline muted loop>'
			+'<source src="video/video.mp4" type="video/mp4">'
		+'</video>'
	);
	*/
	/*
	var video = 
		'<video id="video_container" autoplay preload="auto" controls playsinline loop>'
			+'<source src="'+video_path+'video/video_principal.mp4" type="video/mp4">'
		+'</video>'
	;
	*/
	/*var video = 
		'<div class="embed-container">'
			+'<iframe src="https://www.youtube.com/embed/qw0Nxu0syaA?rel=0" frameborder="0" allowfullscreen></iframe>'
		+'</div>'
	;

	popup('open', video);

	/*================================================*/
});