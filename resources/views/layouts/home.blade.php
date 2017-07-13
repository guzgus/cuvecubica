<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>CuveCubica :: NetWorks </title>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/idea_homes._icons.css">
<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="/css/settings.css">
<link rel="stylesheet" type="text/css" href="/css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="/css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="/css/style.css?{{rand()}}">
<link rel="stylesheet" href="/css/easyzoom.css" />
<link rel="stylesheet" href="/assets/html5-editor/bootstrap-wysihtml5.css" />

    @stack('styles')

<link rel="shortcut icon" href="images/short_icon.png">
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<!-- LOADER-->
<div class="loader">
  <div class="cssload-thecube">
    <div class="cssload-cube cssload-c1"></div>
    <div class="cssload-cube cssload-c2"></div>
    <div class="cssload-cube cssload-c4"></div>
    <div class="cssload-cube cssload-c3"></div>
  </div>
</div>
<!--/LOADER -->

<!-- BACK TO TOP -->
<a href="#" class="back-to"><i class="icon-arrow-up2"></i></a>
<!--BACK TO TOP =-->

    

<!--===== Header =====
<header class="layout_fifth">-->
<header id="header-top_2">
    @include('partials.navbarContactHeader')
</header>


    @yield('content')



<!-- FOOTER -->
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">
@include('partials.footer')
</footer>
<!--#/FOOTER -->





<script src="/js/jquery.2.2.3.min.js"></script>
{{--  <script src="/js/custom-map.js"></script>  --}}
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.appear.js"></script>
<script src="/js/modernizr.js"></script>
<script src="/js/jquery.parallax-1.1.3.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/cubeportfolio.min.js"></script>
<script src="/js/range-Slider.min.js"></script>
<script src="/js/selectbox-0.2.min.js"></script>
<script src="/js/bootsnav.js"></script>
<script src="/js/zelect.js"></script>
<script src="/js/themepunch/jquery.themepunch.tools.min.js"></script>
<script src="/js/themepunch/jquery.themepunch.revolution.min.js"></script>
<script src="/js/themepunch/revolution.extension.layeranimation.min.js"></script>
<script src="/js/themepunch/revolution.extension.navigation.min.js"></script>
<script src="/js/themepunch/revolution.extension.parallax.min.js"></script>
<script src="/js/themepunch/revolution.extension.slideanims.min.js"></script>
<script src="/js/themepunch/revolution.extension.video.min.js"></script>
<script src="/js/functions.js"></script>
<script src="/js/form.js"></script>
<script src="/js/easyzoom.js"></script>
	<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});

		// Setup toggles example
		var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

		$('.toggle').on('click', function() {
			var $this = $(this);

			if ($this.data("active") === true) {
				$this.text("Switch on").data("active", false);
				api2.teardown();
			} else {
				$this.text("Switch off").data("active", true);
				api2._init();
			}
		});
	</script>
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="/assets/tinymce/tinymce.min.js"></script>
    <script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
				language : "es",
            });
        }
    });
    </script>


    @stack('scripts')


</body>
</html>