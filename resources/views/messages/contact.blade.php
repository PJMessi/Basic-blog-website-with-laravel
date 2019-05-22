@extends('layouts.app')
@section('content')
        <!-- Contact Section -->
        <section id="contact" class="contactus margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_contact sections">
                            <div class="head_title text-center">
                                <h1>get in touch</h1>
                            </div>

                            <div class="row">
                                <div class="contact_contant">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_message_right_info">
                                            <ul>
                                                <li><i class="fa fa-map-marker"></i> <span>Kathmandu, Swoyambhu, Ranighatta - 04</span></li>

                                                <li><i class="fa fa-mobile-phone"></i> <span>+977 9843471707</span></li>

                                                <li><i class="fa fa-envelope-o"></i> <span>pjmessi25@gmail.com</span></li>
                                            </ul>

                                            <div class="work_socail transition">
                                                <a href="https://www.facebook.com/notPrajwal"><i class="fa fa-facebook img-circle"></i></a>
                                                <a href="https://plus.google.com/u/0/110465281268349486160"><i class="fa fa-google-plus img-circle"></i></a>
                                                <a href="https://www.pinterest.com/PJMikasa/"><i class="fa fa-pinterest img-circle"></i></a>
                                                <a href="https://www.instagram.com/pjmessi10/?hl=en"><i class="fa fa-instagram img-circle"></i></a>
                                            </div>
                                        </div>
                                    </div><!-- End of col-sm-6 -->

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_contant_left margin-top-60">

                                           
                                            {{Form::open(['action'=>'messagesController@store', 'method'=>'POST', 'id'=>'formid'])}}

                                                <div class="form-group">                                                    
                                                    {{Form::label('topic', 'Topic')}}                                          
                                                    {{Form::text('topic','', ['class'=>'form-control', 'required', 'placeholder'=>'topic here.'])}}
                                                </div>

                                                <div class="form-group">                                               
                                                    {{Form::label('body', 'message')}}                                        
                                                    {{Form::textarea('body','', ['class'=>'form-control', 'required', 'rows'=>'8', 'placeholder'=>'wanna say something? say here.'])}}
                                                </div>

                                                      
                                                @guest
                                                    <button class="btn" data-toggle="modal" data-target="#loginBeforeMessage">Submit</button>
                                                @else
                                                    {{Form::submit('Submit', ['class'=>'btn'])}}
                                                @endguest
                                                
                                        

                                            {{Form::close()}}
                                        </div>
                                    </div>
                                </div> <!-- End of messsage contant-->
                            </div>
                        </div>
                    </div>
                </div><!-- End of row -->
            </div><!-- End of container -->
        </section><!-- End of contact Section -->

@endsection