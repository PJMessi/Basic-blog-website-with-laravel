<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{config('app.name', 'PJMESSI')}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{asset('css/css/fonticons.css')}}">
        <link rel="stylesheet" href="{{asset('css/css/slider-pro.css')}}"><!---->
        <link rel="stylesheet" href="{{asset('css/css/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('css/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}"><!---->


   


        <!--For Plugins external css-->

        <link rel="stylesheet" href="{{asset('css/css/plugins.css')}}" />

        <!--Theme custom css -->

        <link rel="stylesheet" href="{{asset('css/css/style.css')}}">

        <!--Theme Responsive css-->

        <link rel="stylesheet" href="{{asset('css/css/responsive.css')}}" />
        


        <script src="{{asset('js/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">
 


            <div class='preloader'><div class='loaded'>&nbsp;</div></div>
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default" id="navmenu">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#">
                                                <!--<img src="assets/images/logo.png"/>-->
                                                <img src="{{asset('images/logo1.png')}}"/>
                                            </a>
                                        </div>  
                                    </div>
                                </nav>
                            </div>	
                        </div>
    
                    </div>
    
                </div>
            </header> <!--End of header -->

            <div class="well">occupying space</div><div class="well">occupying space</div>
        <!-- Home Section -->
        <div class="container">

        <p>Your account under the email address: {{$email}} has been verified.</p>
        <p>You can now log in to the website.
            
            <p><a href="/dashboard">click here</a> to log in.<p>
        </p>
        </div>
        <!---->



        <!-- footer Section -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="main_footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="copyright_text text-center">
                                <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.facebook.com/notPrajwal">Prajwal Shrestha</a>2018. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End of container -->
        </footer><!-- End of footer -->



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="{{asset('js/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('js/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/js/masonry/masonry.min.js')}}"></script>

        <script type="text/javascript">
            $('.mixcontent').masonry();
        </script>

        <script src="{{asset('js/js/jquery.sliderPro.min.js')}}"></script>
        
        <script type="text/javascript">
            $(document).ready(function ($) {
                $('#example3').sliderPro({
                    width: 960,
                    height: 200,
                    fade: true,
                    arrows: false,
                    buttons: true,
                    fullScreen: false,
                    shuffle: true,
                    smallSize: 500,
                    mediumSize: 1000,
                    largeSize: 3000,
                    thumbnailArrows: true,
                    autoplay: false,
                    thumbnailsContainerSize: 960

                });
            });
        </script>

        <script src="{{asset('js/js/plugins.js')}}"></script>
        <script src="{{asset('js/js/main.js')}}"></script>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>

    </body>
</html>
