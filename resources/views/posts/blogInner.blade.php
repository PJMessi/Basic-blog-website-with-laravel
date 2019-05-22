@extends('layouts.app')
@section('content')
        <!-- Service Section -->
        <section id="bloginner" class="bloginner sections margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                            @if(Auth::user() == $post->user || $admin == 1)  
                            <div class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><img style="width:30px; height:30px" src="/images/options.png"></a>
                                <ul class="dropdown-menu">                               
                                        {!! Form::open(['action' => ['postsController@destroy', $post->id], 'method'=>'POST', 'style'=>'float: right']) !!}
                                        <li><a class="btn btn-link" href="/posts/{{$post->id}}/edit">Edit Post</a></li>
                                     
                                        <li> 
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete post', ['class'=>'btn btn-link-del'])}}                                       
                                        </li>
                                        {!!Form::close()!!}
                                    </ul>
                                </div>                                
                            @endif
                        <div class="head_title text-center">
                            <h1>{{$post->title}}</h1>                           
                            
                            <h5>{{(date('l F j, Y', strtotime($post->created_at)))}}</h5>
                            <p>Written by @if(Auth::user() == $post->user) You @else {{$post->user->name}} @endif</p>
                            
                        </div><!-- End of head title -->                        

                        <div class="main_bloginner_area">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="main_bloginner_content">

                                        @if($post->cover_image != 'noImage.jpeg')
                                        <div class="single_bloginner s_blogIner_1 text-center">
                                            <img src="/storage/cover_images/{{$post->cover_image}}" alt="">
                                        </div><!-- End of single single_bloginner -->
                                        <div class="separator2"></div>
                                        @endif

                                        <div class="single_bloginner s_blogIner_2 margin-top-80">
                                            
                                            <p>{!!$post->body!!}</p>
                              
                                        </div>
                                        
                                        
                                    </div>

                                                                
                                   
                                </div>
                            </div>
                        </div>

              
            </div><!-- End of Container -->
        </section><!-- End of Service Section -->
 

@endsection