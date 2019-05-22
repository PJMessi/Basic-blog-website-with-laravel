@extends('layouts.app')
@section('content')
<!-- Home Section -->
<section id="home" class="home">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                
                <div class="main_home_slider text-center">


                    <div class="single_home_slider">
                        <div class="home-overlay"></div>
                        <div class="main_home wow fadeInUp" data-wow-duration="700ms"> 

                            <h2>Hi, I'm Prajwal.</h2>
                            <div class="separator3"></div>
                            <p class="subtitle">
                                focusing on php laravel
                                <br> to become an awesome backend developer 
                            </p>
                            <div class="home_btn">
                                <a href="#laravel" class="btn btn-defaultSlider scrollLink">Learn More</a>                        
                            </div>
                        </div>
                    </div><!-- End of single_home_slider -->

                    <div class="single_home_slider2">
                        <div class="home-overlay"></div>
                        <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                            <h2>Hi, I'm Prajwal.</h2>
                            <div class="separator3"></div>
                            <p class="subtitle">i also do small<br />
                                animations for fun</p>
                                <div class="home_btn">
                                    <a href="#afterEffect" class="btn btn-defaultSlider scrollLink">Learn More</a> 
                                    </div>
                        </div>
                    </div><!-- End of single_home_slider -->



                </div>
            </div>
        </div>
    </div>
</section><!-- End of Home Section -->





<!-- Service Section -->
<section id="service" class="service sections lightbg">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-12">
                <div class="head_title text-center">
                    <a id="laravel"></a>
                    <h1>what I do?</h1>
                </div><!-- End of head title -->

                
                <div class="main_service_area"> 

                    <div class="single_service_area">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="signle_service_left">
                                    <!--<img src="assets/images/service0.png" alt="" />-->
                                    <img src="{{asset('images/service0.jpg')}}" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-5 col-sm-push-1">
                                <div class="single_service">
                                    <h3>learning</h3>
                                    <h2>laravel</h2>
                                    <div class="separator4"></div>
                                    <p>Laravel is one of the highly used, open-source modern web application framework that designs customized web applications 
                                        quickly and easily. It attempts to take the pain out of development by easing common tasks used in the majority of web 
                                        projects, such as authentication, routing, sessions and caching.</p>

                                    <p>It was quite a pain to select one, as there are many awesome frameworks. But after goin through lots of googling and research,
                                        I decided to focus on Laravel.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div><!-- End of single service area -->
                    
                
                    <a id="afterEffect"></a>
                    <div class="single_service_area  margin-top-80">
                        <div class="row">

                            <div class="col-sm-6 col-sm-push-6">
                                <div class="signle_service_left">
                       
                                     <img src="{{asset('images/service1.jpg')}}" alt="" />
                                </div>
                            </div>

                            <div class="col-sm-5 col-sm-pull-6">
                                <div class="single_service">
                                    <h3>fun animation</h3>
                                    <h2>after effects</h2>
                                    <div class="separator4"></div>
                                    <p>I do some simple animations for fun during my free time. I use Adobe After Effects CC for this. Its 
                                        pretty powerful tool and provides you with many different cool animation tools. I also use Adobe Photoshop 
                                        and Adobe Flash for this sometimes. 
                                    </p>

                                    <p>I'm not that good in it. I just follow some youtube tutorials and make funanimations to make fun of
                                        my friends hehe. If you want to check out some of my works, click the link below. It's not totally 
                                        mindblowing, but hey i don't work at disney.
                                    </p>
                                    <p>If you are intersted in animations too, you can follow <a href="https://www.youtube.com/user/avnishparker">Avnish Parkar</a>.
                                        He teaches you pretty cool stuffs without any 3rd party plugins in after effects.
                                    </p>
                                    <a href="https://drive.google.com/open?id=1QZOG_4jJ0f8kfuaobfnTjp6HUAOQ44Zm">here's the link to my works</a>
                        
                                </div>
                            </div>

                        </div>
                    </div><!-- End of single service area -->

                    <div class="single_service_area margin-top-80">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="signle_service_left">                              
                                    <img src="{{asset('images/service4.jpg')}}" alt="" /><br><br>
                                    <img src="{{asset('images/service3.jpg')}}" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-5 col-sm-push-1">
                                <div class="single_service">
                                    <h3>movies, animes and</h3>
                                    <h2>games</h2>
                                    <div class="separator4"></div>
                                    <p>Besides all these coding and other stuffs, i'm really onto movies, superhero moives especially (yep, i like to
                                        live in fantasy world), and anime. I go to QFX or BSR every time Marvel realeses a new movie. And yeah, i think DC 
                                    movies suck, except Wonder Woman of course.</p>

                                    <p>I'm intrested in video games too, although i dont play that much now a days. (why? cause i got a girlfriend now, See ya later losers, just kiddin)
                                        DOTA is my favourite game btw. Damn, i've spent some frekkin thousand hours in that game. We can play together sometimes if ya want to play together, send me req 
                                        on steam, here is my profile: 
                                    </p>
                                    <a href="http://steamcommunity.com/profiles/76561198329466479/" >my steam profile link</a>
                                    <br><br><p>Oh, and if you haven't watched Avengers Infinity War, GO WATCH IT. </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End of single service area -->
                </div>
    
            </div><!-- End of col-sm-12 -->
        </div><!-- End of row -->
    </div><!-- End of Container -->
</section><!-- End of Service Section -->

<!-- Work Section -->
<section id="work" class="work sections">
    <div class="container">
        <div class="row">
            <div class="main_mix_content text-center">
                <div class="head_title">
                    <h1>fun along the way</h1>
                </div><!-- End of head title -->

                <div id="mixcontent" class="row">

                    <center>
                        <div id="cardMargin" class="col-sm-3 col-xs-12">
                            <div class="polaroid">
                                <img src="{{asset('images/drStrange.gif')}}" alt="Norway" style="width:100%">
                                <div id="pol">
                                <p>cool, aint it?</p>
                                </div>
                            </div>
                        </div>
                    </center>

                    <center>
                        <div id="cardMargin" class="col-sm-3 col-xs-12">
                            <div class="polaroid">
                                <img src="{{asset('images/pjLightning.gif')}}" alt="Norway" style="width:100%">
                                <div id="pol">
                                <p>badass logo animation XD</p>
                                </div>
                            </div>
                        </div>
                    </center>

                    <center>
                        <div id="cardMargin" class="col-sm-3 col-xs-12">
                                <div class="polaroid">
                                    <img src="{{asset('images/koseliAd.gif')}}" alt="Norway" style="width:100%">
                                    <div id="pol">
                                      <p>intro i made, for a online shopping team</p>
                                    </div>
                                </div>
                        </div>  
                    </center>  

                    <center>
                        <div id="cardMargin" class="col-sm-3 col-xs-12">
                            <div class="polaroid">
                                <img src="{{asset('images/pjSpark.gif')}}" alt="Norway" style="width:100%">
                                <div id="pol">
                                  <p>how cool is that</p>
                                </div>
                              </div>
                        </div>
                    </center>  

                </div>

                <a href="https://drive.google.com/open?id=1QZOG_4jJ0f8kfuaobfnTjp6HUAOQ44Zm" class="btn">see more</a>
            </div>                     
        </div><!-- End of row -->
    </div><!-- End of Contaier -->
</section><!-- End of portfolio Section -->        



<!-- Team Section -->
<section id="team" class="team colorsbg sections">
    <div class="container">
        <div class="row">
            <div class="main_team_area">
                <div class="head_title text-center">
                    <h1>my team</h1>
                </div><!-- End of head title -->

                <div class="main_team text-center">
                    <div class="single_team">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="row">

                                <div class="col-sm-4">
                                    
                                </div> <!-- End of col-sm-4 --> 

                                <div class="col-sm-4">
                                    <div class="team">
                                        <!--<img class="img-circle" src="assets/images/team2.jpg" alt="" />-->
                                        <img class="img-circle" src="{{asset('images/team2.jpg')}}" alt="" />
                                        <h4>Prajwal Shrestha</h4>
                                        <div class="separator"></div>
                                        <p>well thats me</p>
                                    </div>
                                </div> <!-- End of col-sm-4 --> 

                                <div class="col-sm-4">
                                    
                                </div><!-- End of col-sm-4 -->  

                            </div>
                        </div><!-- End of col-sm-10 -->
                    </div>

                    <div class="single_team">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="row">

                                <div class="col-sm-4">
                                    
                                   
                                </div> <!-- End of col-sm-4 --> 

                                <div class="col-sm-4">
                                    <div class="team">
                                            <!--<img class="img-circle" src="assets/images/team2.jpg" alt="" />-->
                                            <img class="img-circle" src="{{asset('images/team2.jpg')}}" alt="" />
                                            <h4>Prajwal Shrestha</h4>
                                            <div class="separator"></div>
                                            <p>i work alone currently.</p><p> ONE MAN ARMY.</p>
                                        </div>
                                </div><!-- End of col-sm-4 -->  

                                <div class="col-sm-4">
                                    
                                        
                                </div> <!-- End of col-sm-4 --> 

                            </div>
                        </div><!-- End of col-sm-10 -->
                    </div>
                    
                </div>
            </div>
        </div><!-- End of row -->
    </div><!-- End of Contaier -->
</section><!-- End of portfolio Section --> 



<!-- Clients Section -->
<section id="clients" class="clients sections">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_clients_area text-center">
                    <div class="head_title">
                        <h1>messages</h1>
                    </div><!-- End of head title -->

                    <div id="example3" class="slider-pro">
                        <div class="sp-slides sps_slider">
                        
                        @if( count( $messages ) > 0 )
                        @foreach( $messages as $message )
                        <div class="sp-slide">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="single_left_text text-right">
                                                <h4 class="sp-layer" 
                                                    data-horizontal="right" data-vertical="0" data-width="81%"
                                                    data-show-transition="left" data-show-delay="200">

                                                    @if( strlen($message->user->name) > 15)
                                                    {{substr($message->user->name, 0, 15)}}
                                                    @else
                                                    {{$message->user->name}}
                                                    @endif
                                                </h4>

                                                <div class="separator sp-layer sp-black" data-horizontal="340" data-vertical="70"></div>

                                                <p class="sp-layer" 
                                                   data-horizontal="right" data-vertical="100" data-width="81%" 
                                                   data-show-transition="left" data-show-delay="400">
                                                    {{ date('l F, Y', strtotime($message->created_at)) }}
                                                </p>

                                            </div>
                                        </div><!-- End of col-sm-6 -->
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="single_right_text text-left">
                                            <p class="sp-layer right_sp_layer" data-width="100%">{{$message->body}}</p>
                                            </div>
                                        </div><!-- End of col-sm-6 -->
                                    </div>
                                </div><!-- End of col-sm-12 -->
                            </div>
                            @endforeach

                            @else
                            <div class="sp-slide">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6">
                                                
                                            </div><!-- End of col-sm-6 -->
                                            <div class="col-sm-6 col-xs-6">
                                                <div class="single_right_text text-left">
                                                <p class="sp-layer right_sp_layer" data-width="100%">Nothing yet</p>
                                                </div>
                                            </div><!-- End of col-sm-6 -->
                                        </div>
                                    </div><!-- End of col-sm-12 -->
                                </div>
                            @endif
                            
                    </div>
                </div>
            </div><!-- End of col-sm-12 -->
        </div><!-- End of row -->
    </div><!-- End of Contaier -->
</section><!-- End of portfolio Section --> 
@endsection