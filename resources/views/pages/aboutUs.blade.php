@extends('layouts.app')
@section('content')
        <!-- About Section -->
        <section id="aboutus" class="aboutus margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title text-center margin-top-80">
                            <h1>about us</h1>
                        </div><!-- End of head title -->

                        <div class="main_about_area"> 
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="signle_about_left">
                                        <img src="{{asset('/images/service3.jpg')}}" alt="" />
                                        <div class="single_about_left_text">
                                            <div class="separator2"></div>
                                            <h4>we create <br />
                                                the best projects<br />
                                                for the best<br />
                                                companies!</h4>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-sm-5 col-sm-push-1">
                                    <div class="single_about">
                                        <div class="separator2"></div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
                                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>

                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>

                                        <a href="" class="btn btn-default">get in touch</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
            <hr />
        </section><!-- End of about Section -->



        <!-- counter Seection -->
        <section id="counter" class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_counter sections text-center">
                            <div class="row">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="single_counter_right">
                                        <h4 class="statistic-counter">3,800</h4>
                                        <div class="separator"></div>
                                        <p>project complete</p>
                                    </div>
                                </div><!-- End of col-sm-4 -->

                                <div class="col-sm-4 col-xs-12">
                                    <div class="single_counter_right">
                                        <h4 class="statistic-counter">4510</h4>
                                        <div class="separator"></div>
                                        <p>happy clients</p>
                                    </div>
                                </div><!-- End of col-sm-4 -->

                                <div class="col-sm-4 col-xs-12">
                                    <div class="single_counter_right">
                                        <h4 class="statistic-counter">2,800</h4>
                                        <div class="separator"></div>
                                        <p>cups of milk</p>
                                    </div>
                                </div><!-- End of col-sm-4 -->

                            </div><!-- End of row -->
                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
        </section><!-- End of counter Section -->



        <!-- Team Section -->
        <section id="team" class="team colorsbg sections">
            <div class="container">
                <div class="row">
                    <div class="main_team_area">
                        <div class="head_title text-center">
                            <h1>best team</h1>
                        </div><!-- End of head title -->
                        <div class="main_team text-center">
                            <div class="single_team">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="{{asset('/images/team1.jpg')}}" alt="" />
                                                <h4>paul hall</h4>
                                                <div class="separator"></div>
                                                <p>art director</p>
                                            </div>
                                        </div><!-- End of col-sm-4 -->  
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="{{asset('/images/team2.jpg')}}" alt="" />
                                                <h4>joshua spencer</h4>
                                                <div class="separator"></div>
                                                <p>founder</p>
                                            </div>
                                        </div> <!-- End of col-sm-4 --> 
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="{{asset('/images/team3.jpg')}}" alt="" />
                                                <h4>diane lewis</h4>
                                                <div class="separator"></div>
                                                <p>artist, designer</p>
                                            </div>
                                        </div> <!-- End of col-sm-4 --> 
                                    </div>
                                </div><!-- End of col-sm-10 -->
                            </div>
                            <div class="single_team">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="{{asset('/images/team1.jpg')}}" alt="" />
                                                <h4>paul hall</h4>
                                                <div class="separator"></div>
                                                <p>art director</p>
                                            </div>
                                        </div> <!-- End of col-sm-4 --> 
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="{{asset('/images/team1.jpg')}}" alt="" />
                                                <h4>joshua spencer</h4>
                                                <div class="separator"></div>
                                                <p>founder</p>
                                            </div>
                                        </div> <!-- End of col-sm-4 --> 
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="{{asset('/images/team1.jpg')}}" alt="" />
                                                <h4>diane lewis</h4>
                                                <div class="separator"></div>
                                                <p>artist, designer</p>
                                            </div>
                                        </div> <!-- End of col-sm-4 --> 
                                    </div>
                                </div><!-- End of col-sm-10 -->
                            </div>
                            <div class="single_team">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="{{asset('/images/team1.jpg')}}" alt="" />
                                                <h4>paul hall</h4>
                                                <div class="separator"></div>
                                                <p>art director</p>
                                            </div>
                                        </div>  <!-- End of col-sm-4 -->
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="{{asset('/images/team1.jpg')}}" alt="" />
                                                <h4>joshua spencer</h4>
                                                <div class="separator"></div>
                                                <p>founder</p>
                                            </div>
                                        </div> <!-- End of col-sm-4 --> 
                                        <div class="col-sm-4">
                                            <div class="team">
                                                <img class="img-circle" src="{{asset('/images/team1.jpg')}}" alt="" />
                                                <h4>diane lewis</h4>
                                                <div class="separator"></div>
                                                <p>artist, designer</p>
                                            </div>
                                        </div> <!-- End of col-sm-4 --> 
                                    </div>
                                </div><!-- End of col-sm-10 -->
                            </div>
                        </div>
                    </div>
                </div><!-- End of row -->
            </div><!-- End of Container -->
        </section><!-- End of counter Section -->


        <!-- Clients Section -->
        <section id="instagrams" class="instagrams sections">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_instagrams_area text-center">
                            <div class="head_title">
                                <h1>instagram</h1>
                            </div><!-- End of head title -->

                            <div class="instagram-thumbnails">
                                <img class="instagram-thumbnail img-responsive" src="{{asset('/images/insta1.png')}}"/>
                                <img class="instagram-thumbnail img-responsive" src="{{asset('/images/insta1.png')}}"/>
                                <img class="instagram-thumbnail img-responsive" src="{{asset('/images/insta1.png')}}"/>
                                <img class="instagram-thumbnail img-responsive" src="{{asset('/images/insta1.png')}}"/>
                                <img class="instagram-thumbnail img-responsive" src="{{asset('/images/insta1.png')}}"/>
                            </div>
                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
        </section><!-- End of counter Section -->

        
@endsection