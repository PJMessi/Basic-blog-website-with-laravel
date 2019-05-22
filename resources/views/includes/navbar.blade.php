@include('includes.popUpModal');

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
                                        <a class="navbar-brand" href="/">
                                            <img src="{{asset('images/logo1.png')}}"/>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        @guest
                                        @else
                                        <ul class="nav navbar-nav navbar-left"> 
                                                <li><a href="/dashboard">my dashboard</a></li>   
                                        </ul>
                                        @endguest

                                        <ul class="nav navbar-nav navbar-right">                                   
                                            <li><a href="/posts">blogs</a></li>                                            
                                            <li><a href="/messages">contact me</a></li>                                            
                                            @guest         
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Wanna stay connected?</a>
                                                <ul class="dropdown-menu">
                                                    <!--<li><a id="loginOption" data-toggle="modal" data-target="#loginModal">{{ __('Login') }}</a></li>   
                                                    <li><a id="registerOption" data-toggle="modal" data-target="#registerModal">{{ __('Register') }}</a></li>-->                                                
                                                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>   
                                                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                                                                                  
                                                </ul>
                                            </li> 

                                                
                                            @else
                                            
                                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">{{ Auth::user()->name }}&nbsp<span class="caret"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="/dashboard">Dashboard</a></li>  
                                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                      document.getElementById('logout-form').submit();">
                                                         {{ __('Logout') }}
                                                     </a>
                 
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                         @csrf
                                                     </form></li>                                              
                                                </ul>
                                            </li> 

                                            @endguest

                                        </ul>    
                                    </div>

                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->