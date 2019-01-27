<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
	@hasSection('title')
    	@yield('title')
    @else
     	{{setting(App::getLocale().'.title')}}	
    @endif
	
</title>
<!-- Stylesheets -->
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/revolution-slider.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="/css/responsive.css" rel="stylesheet">
<link href="/css/custom.css?t={{time()}}" rel="stylesheet">
<link rel="stylesheet" href="/css/toastr.min.css">
	@yield('style')
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	@yield('content')
    <!-- Main Header-->
   
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<script src="/js/jquery.js"></script> 
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/revolution.min.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/jquery.fancybox-media.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/mixitup.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/script.js"></script>
<script src="/js/toastr.min.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="/js/map-script.js"></script>
<!--End Google Map APi-->
<script>
		@if(Session::has('message'))

	    // TODO: change Controllers to use AlertsMessages trait... then remove this
	    var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
	    var alertMessage = {!! json_encode(Session::get('message')) !!};
	    var alerter = toastr[alertType];
			@if(Helper::isRtl())
				toastr.options.rtl = true;
			@endif
	    if (alerter) {
	        alerter(alertMessage);
	    } else {
	        toastr.error("toastr alert-type " + alertType + " is unknown");
	    }
	
	    @endif
</script>

	@yield('js')
</body>
</html>