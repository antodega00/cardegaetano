<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - AgriCulture Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">



    <!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">


    <!-- Main CSS File -->
    {{-- <link href="assets/css/main.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- =======================================================
    * Template Name: AgriCulture
    * Template URL: https://bootstrapmade.com/agriculture-bootstrap-website-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


        {{-- <header id="header" class="header d-flex align-items-center position-relative">
            <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

              <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" alt="AgriCulture">
                <!-- <h1 class="sitename">AgriCulture</h1>  -->
              </a>

                                @include('components.navbar')
            </div>
        </header> --}}

@yield('content');

{{-- @include('components.footer'); --}}

<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<!-- Google Map -->
{{-- <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/vendor/jquery.gmap3.min.js"></script> --}}

<script type="text/javascript">
$(document).ready(function() {

    // mobile nav toggle
    $('#nav-toggle').on('click', function (event) {
        event.preventDefault();
        $('#main-nav').toggleClass("open");
    });

    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "zoom",
            "close"

        ]
    });

    $(".zoom").hover(function(){

		$(this).addClass('transition');
	}, function(){

		$(this).removeClass('transition');
	});

    setTimeout(function(){
      $('.overlay-message').fadeOut('slow');
    }, 5000);

// CODICE PER EVITARE IL REFRESH DELLA PAGINA
    // $("#contact").submit(function(e) {
    //         e.preventDefault(); //blocco il comportamento usuale e lo fa gestire ad ajax

    //         $.ajax({
    //             url: "{{ route('home.sendMessage') }}",
    //             type: "POST",
    //             data: $(this).serialize(),
    //             success: function(response) {
    //                 $("#success-message").text(response.success).fadeIn();
    //                 $("#contact")[0].reset();
    //             },
    //             error: function(xhr) {
    //                 var errors = xhr.responseJSON.errors;
    //                 for (var key in errors) {
    //                     if (errors.hasOwnProperty(key)) {
    //                         var errorElement = $("#" + key).next(".text-danger");
    //                         if (errorElement.length) {
    //                             errorElement.text(errors[key][0]);
    //                         } else {
    //                             $("#" + key).after('<div class="text-danger">' + errors[key][0] + '</div>');
    //                         }
    //                     }
    //                 }
    //             }
    //         });
    //     });
});
</script>

</body>
</html>
