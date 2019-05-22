@extends('layouts.app')

@section('content')
        <!-- Blog Section -->
        <section id="blog" class="blog sections margin-top-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="head_title text-center">
                            <h1>messages for you</h1>
                        </div><!-- End of head title -->

                        <div class="row">
                            <div class="main_blog_area"> 

                            @if( count($messages) > 0 )
                          
                                @foreach($messages as $message)     
                                <center>                        
                                    <div class="row"> 
                                            <h3>{{$message->topic}}</h3>                                           
                                                <p><!--body-->
                                                <?php    
                                                    $string = $message->body;
                                                    $string = strip_tags($string);
                                                    if (strlen($string) > 525) {                                                        
                                                        // truncate string
                                                        $stringCut = substr($string, 0, 525);
                                                        $endPoint = strrpos($stringCut, ' ');                                                        
                                                        //if the string doesn't contain any space then it will cut without word basis.
                                                        $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                                                        $string .= '..';
                                                    }
                                                    echo $string;
                                                ?>
                                                </p>
                                                <div class="separator2"></div>
                                                <h5>{{(date('l F j, Y', strtotime($message->created_at)))}} at {{(date('g:i A', strtotime($message->created_at))) }}</h5>
                                                <p>Written by {{$message->user->name}}</p>
                                            </div>  
                                        <hr><br><br>
                                    </div>                                
                                @endforeach   
                                </center>
                                <center>{{$messages->links()}}</center>                          

                            @else
                            <p>No posts yet</p>
                            @endif
                        </div>
                    </div><!-- End of col-sm-12 -->
                </div><!-- End of row -->
            </div><!-- End of Container -->
        </section><!-- End of Service Section -->
@endsection