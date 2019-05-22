
@extends('layouts.app')
@section('content')
        <!-- Blog Section -->
        <section id="blog" class="blog sections margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h1>blogs</h1>
                        </div><!-- End of head title -->

                        <div class="row">
                            

                            <div class="main_blog_area"> 

                            @if( count($posts) > 0 )
                                <?php $index = 0 ?>

                                @foreach($posts as $post)                             
                           
                                <div class="single_blog_area  margin-top-80">

                                        <div class="row">   

                                            @if($post->cover_image != 'noImage.jpeg')
                                            <!--post image-->
                                            <div class="col-sm-6 @if($index == 0) col-sm-push-6 @endif">
                                                <div class="signle_service_left">
                                                    <img src="/storage/cover_images/{{$post->cover_image}}" alt="">
                                                   
                                                </div>
                                            </div>
                                            <!--end post image-->
                                            @endif

                                            <!--post body-->
                                            @if($post->cover_image != 'noImage.jpeg')
                                            <div class="col-sm-5 @if($index == 0) col-sm-pull-6 @else col-sm-push-1 @endif">
                                            
                                            @else
                                            <div class="col-sm-12">
                                         
                                            @endif
                                                    <h3>{{$post->title}}</h3>    
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
                                                        </div> <br>                                
                                                    @else
                                                    <div class="separator2"></div>
                                                    @endif
                                                    <p>
                                                    <?php    
                                                        $string = $post->body;
                                                        $string = strip_tags($string);
                                                     
                                                    
                                                        if (strlen($string) > 525) {
                                                        
                                                            // truncate string
                                                            $stringCut = substr($string, 0, 525);
                                                            $endPoint = strrpos($stringCut, ' ');
                                                        
                                                            //if the string doesn't contain any space then it will cut without word basis.
                                                            $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                                                            $string .= '...<a href="/posts/'.$post->id.'">see full post</a>';
                                                        }

                                                        else{
                                                            $string .= '<br><a href="/posts/'.$post->id.'">see full post</a>';
                                                        }
                                                        
                                                    ?>
                                                    {!!$string!!}
                                                    </p>
                                                    <h5>{{(date('l F j, Y', strtotime($post->created_at)))}}</h5>
                                                    <p>Written by @if(Auth::user() == $post->user) You @else {{$post->user->name}} @endif</p>
                                                    
                                                    <!--<a href="/posts/{{$post->id}}" class="btn btn-default">see full blog</a>-->
                                                </div>
                                            </div>  
                                            <!--end post body-->

                                 

                                    </div>

                                    @if($index == 0)
                                        <?php $index = 1 ?>
                                    @else
                                        <?php $index = 0 ?>
                                    @endif


                                  
                                @endforeach   
                                <center>{{$posts->links()}}</center>                          

                            @else
                            <p>No posts yet</p>
                            @endif                           
                                                       

                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
        </section><!-- End of Service Section -->
@endsection