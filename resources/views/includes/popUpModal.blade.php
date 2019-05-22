<!--Modal for login-->
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">LogIn</h5>        
         
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <br><br>
                    <!--for email address-->
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} resizedTextbox" name="email" value="{{ old('email')}}" required autofocus>
                            <br>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <p style="color: red">{{ $errors->first('email') }}</p>
                                </span>
                            @endif
                        </div>
                    </div><!--for email address-->
                    <!--for password-->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} resizedTextbox" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <p style="color: red">{{ $errors->first('password') }}</p>
                                </span>
                            @endif
                        </div>
                    </div>
                <!--for password-->
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-default">
                                {{ __('Login') }}
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <!--<a class="btn btn-default" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>-->
                        </div>
                    </div>
                </form>
        </div>
      </div>
    </div>
  </div>
<!--end of login modal-->

<!--Modal for register-->
<div id="registerModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">LogIn</h5>        
         
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <br><br>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} resizedTextbox" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <p style="color: red">{{ $errors->first('name') }}</p>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} resizedTextbox" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <p style="color: red">{{ $errors->first('email') }}</p>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} resizedTextbox" name="password"  required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <p style="color: red">{{ $errors->first('password') }}</p>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control resizedTextbox" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-default">
                            {{ __('Register') }}
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    
      </div>
    </div>
  </div>
<!--end of login modal-->

<!-- login before messaging-->
<div class="modal fade" id="loginBeforeMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">thanks</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Please, login before messaging
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
        </div>
      </div>
    </div>
  </div>
  <!-- end of login before messaging-->