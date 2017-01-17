@extends('template.main')

@section('title') Jimbes Printing @stop

@section('content') 
    
    <div class="container" style="margin-top: 120px; margin-bottom: 120px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Login</div>
                <div class="panel-body">
                    <form data-toggle="validator" class="form-horizontal" role="form" id='form-create-user' method="POST" action="{{ url('/login') }}">
		                {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                  <script type="text/javascript">
                                  swal("Good job!", "You clicked the button!", "success")
                              </script>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <script type="text/javascript">
                                       swal("Good job!", {{$errors->first('email')}} , "success")
                                   </script>
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

	                    <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="col-xs-3 btn btn-primary">
                                    Login
                                </button>

                                <p class="col-xs-6">Don't have an Account? <a href="/register"><br>Sign up here.</a></p>

                                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                        <br>
                    	

		            </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop