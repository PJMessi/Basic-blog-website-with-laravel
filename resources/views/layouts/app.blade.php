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
        <!--<link rel="apple-touch-icon" href="{{asset('images/logo1.png')}}">-->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />

        <link rel="stylesheet" href="{{asset('css/css/fonticons.css')}}">
        <link rel="stylesheet" href="{{asset('css/css/slider-pro.css')}}"><!---->
        <link rel="stylesheet" href="{{asset('css/css/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('css/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}"><!---->
        <link rel="stylesheet" href="{{ asset('css/css/comment.css') }}"><!---->


   


        <!--For Plugins external css-->

        <link rel="stylesheet" href="{{asset('css/css/plugins.css')}}" />

        <!--Theme custom css -->

        <link rel="stylesheet" href="{{asset('css/css/style.css')}}">

        <!--Theme Responsive css-->

        <link rel="stylesheet" href="{{asset('css/css/responsive.css')}}" />

        


        <script src="{{asset('js/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>{{--jquery--}}
        


    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">
 
        @include('includes.navbar')

        @include('includes.messages')


        <!-- Home Section -->
        @yield('content')
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

        <!-- this is for scroll to bot-->
            
        <script>
                $(document).ready(function(){
                    $( "a.scrollLink" ).click(function( event ) {
                        event.preventDefault();
                        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 1000);
                    });
                });
                </script>
            <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    

    </body>
</html>