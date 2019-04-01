<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Template for amclcanada.com/comming-soon.html by akr4m, Sat, 30 Mar 2019 14:36:56 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<link rel="apple-touch-icon" href="{{asset('client/apple-touch-icon.png')}}">
	<link rel="stylesheet" href="{{asset('client/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/jquery-ui.html')}}">
	<link rel="stylesheet" href="{{asset('client/css/transitions.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/responsive.css')}}">
	<script src="{{asset('client/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body class="comingsoon-page">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="wrapper" class="haslayout">
		<!--************************************
				Main Start
		*************************************-->
		<main id="main" class="haslayout">
			<!--************************************
					Comming-Soon Start
			*************************************-->
					<div class="comming-soon">
						<div class="tg-displaytable">
							<div class="tg-displaytablecell">
								<h2>coming soon!</h2>
								<div class="tg-description">
									<p>Stay tuned, we are launching very soon...</p>
								</div>
								<img src="{{asset('images/img-07.jpg')}}" alt="Image Description">
								<div class="coming-soon-counter">
									<div id="days" class="timer_box tg-border-topleft"></div>
									<div id="hours" class="timer_box tg-border-topleft"></div>
									<div id="minutes" class="timer_box tg-border-topleft"></div>
									<div id="seconds" class="timer_box seconds tg-border-topleft"></div>
								</div>
							</div>
						</div>
					</div>
			<!--************************************
					Comming-Soon End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="{{asset('client/js/vendor/jquery.min.js')}}"></script>
	<script src="{{asset('client/js/vendor/bootstrap.min.js')}}"></script>
	<script>
	/* -------------------------------------
			COMMING SOON PAGE
	------------------------------------- */
	(function($) {
		var launch = new Date(2016, 06, 14, 11, 15);
		var days = $('#days');
		var hours = $('#hours');
		var minutes = $('#minutes');
		var seconds = $('#seconds');
		setDate();
		function setDate(){
			var now = new Date();
			if( launch < now ){
				days.html('<h1>0</H1><p>Day</p>');
				hours.html('<h1>0</h1><p>Hour</p>');
				minutes.html('<h1>0</h1><p>Minute</p>');
				seconds.html('<h1>0</h1><p>Second</p>');
			}
			else{
				var s = -now.getTimezoneOffset()*60 + (launch.getTime() - now.getTime())/1000;
				var d = Math.floor(s/86400);
				days.html('<h1>'+d+'</h1><p>Day'+(d>1?'s':''),'</p>');
				s -= d*86400;
				var h = Math.floor(s/3600);
				hours.html('<h1>'+h+'</h1><p>Hour'+(h>1?'s':''),'</p>');
				s -= h*3600;
				var m = Math.floor(s/60);
				minutes.html('<h1>'+m+'</h1><p>Minute'+(m>1?'s':''),'</p>');
				s = Math.floor(s-m*60);
				seconds.html('<h1>'+s+'</h1><p>Second'+(s>1?'s':''),'</p>');
				setTimeout(setDate, 1000);
			}
		}
	})(jQuery);
	</script>
</body>

<!-- Template for amclcanada.com/comming-soon.html by akr4m, Sat, 30 Mar 2019 14:37:08 GMT -->
</html>