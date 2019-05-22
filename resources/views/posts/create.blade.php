@extends('layouts.app')
@section('content')
        <!-- Service Section -->
        <section id="bloginner" class="bloginner sections margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h1>Create</h1>

                            <h5>Blog</h5>
                        </div><!-- End of head title -->
                        <div class="main_bloginner_area">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="main_bloginner_content">                                        

                                        <div class="single_bloginner s_blogIner_2 margin-top-80">
                                            
                                            {!! Form::open(['action'=>'postsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                                                <div class="form-group">
                                                    {{Form::label('title', 'Title')}}<br>
                                                    {{Form::text('title','' , ['style'=>'width: 30%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box; ', 'placeholder'=>'Enter blog title', 'required'])}}
                                                </div>
                                                <div class="separator2"></div>
                                                <div class="form-group">
                                                    {{Form::label('body', 'Body')}}<br>
                                                    {{Form::textarea('body','' , ['placeholder'=>'Enter blog content', 'style'=>' width: 100%; padding: 12px 20px; margin: 8px 0; box-sizing: border-box; ', 'id'=>'article-ckeditor', 'required'])}}
                                                </div>
                                                <hr>
                                                <div class="from-group">
                                                        {{Form::file('cover_image')}}
                                                    </div>
                                                    {{Form::submit('Create', ['class'=>'btn btn-primaryx'])}}
                                            {!! Form::close()!!}
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

              
            </div><!-- End of Container -->
        </section><!-- End of Service Section -->




       
@endsection