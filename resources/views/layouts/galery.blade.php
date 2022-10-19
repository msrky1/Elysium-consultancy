<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<title>Mesa Vip Koleji</title>
    <link rel="shortcut icon" href="{{ asset('assets') }}/{{ asset('assets') }}/images/x-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightcase.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

<!-- PAGE'S BASE CSS -->
<style type="text/css">
/*! normalize.css v2.1.2 | MIT License | git.io/normalize */article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,video{display:inline-block}audio:not([controls]){display:none;height:0}[hidden]{display:none}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a:focus{outline:thin dotted}a:active,a:hover{outline:0}h1{font-size:2em;margin:.67em 0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}mark{background:#ff0;color:#000}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em}pre{white-space:pre-wrap}q{quotes:"\201C" "\201D" "\2018" "\2019"}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:0}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}button,input{line-height:normal}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}






.elem, .elem * {
	box-sizing: border-box;
	margin: 0 !important;	
}
.elem {
	display: inline-block;
	font-size: 0;
	width: 33%;
	border: 20px solid transparent;
	border-bottom: none;
	background: #fff;
	padding: 10px;
	height: auto;
	background-clip: padding-box;
}
.elem > span {
	display: block;
	cursor: pointer;
	height: 0;
	padding-bottom:	70%;
	background-size: cover;	
	background-position: center center;
}
</style>






<!-- LIGHTBOX FADING SHOW/HIDE EFFECT (as explained in documentation) -->
<style type="text/css">
.lcl_fade_oc.lcl_pre_show #lcl_overlay,
.lcl_fade_oc.lcl_pre_show #lcl_window,
.lcl_fade_oc.lcl_is_closing #lcl_overlay,
.lcl_fade_oc.lcl_is_closing #lcl_window {
	opacity: 0 !important;
}
.lcl_fade_oc.lcl_is_closing #lcl_overlay {
	-webkit-transition-delay: .15s !important; 
	transition-delay: .15s !important;
}
</style>






<!-- //////////////////////////////////////////////// -->
<!-- REQUIRED ELEMENTS -->

<script src="{{asset('assets/galery')}}/lib/jquery.js" type="text/javascript"></script>

<script src="{{asset('assets/galery')}}/js/lc_lightbox.lite.js" type="text/javascript"></script>
<link rel="stylesheet" href="{{asset('assets/galery')}}/css/lc_lightbox.css" />


<!-- SKINS -->
<link rel="stylesheet" href="{{asset('assets/galery')}}/skins/minimal.css" />


<!-- ASSETS -->
<script src="{{asset('assets/galery')}}/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>

<!-- //////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////// -->

</head>

<body>


    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->
    
    <livewire:project.menu-component />


    {{$slot}}



<!-- //////////////////////////////////////////////// -->
<!-- LIGHTBOX INITIALIZATION -->
<script type="text/javascript">
$(document).ready(function(e) {
   
	// live handler
	lc_lightbox('.elem', {
		wrap_class: 'lcl_fade_oc',
		gallery : true,	
		thumb_attr: 'data-lcl-thumb', 
		
		skin: 'minimal',
		radius: 0,
		padding	: 0,
		border_w: 0,
	});	

});
</script>
<!-- //////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////// -->
<script src="{{ asset('assets') }}/js/jquery.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/swiper.min.js"></script>
    <script src="{{ asset('assets') }}/js/progress.js"></script>
    <script src="{{ asset('assets') }}/js/lightcase.js"></script>
    <script src="{{ asset('assets') }}/js/counter-up.js"></script>
    <script src="{{ asset('assets') }}/js/isotope.pkgd.js"></script>
    <script src="{{ asset('assets') }}/js/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.6.1/lightgallery.umd.min.js"></script>
</body>
</html>
