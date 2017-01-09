<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img id="jb-logo" src="img/jb_logo.jpg" width="100px">
                <span id="jb-title"><b>Jimbes</b> Printing</span>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a id="home-nav" class="hover-orange" href="/">Home</a></li>
                <li><a class="hover-orange" href="/services-tshirt">Services</a></li>
                <li><a class="hover-orange" href="/request-quote">Request a Quote</a></li>
                <li><a class="hover-orange" href="#" data-toggle="modal" data-target="#login-modal">Login | Register</a></li>

                <!-- <li class="nav-divider"></li>
                <li><a href="#"><span class="cart-count">0 <i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a></li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content login">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login | Register</h4>
            </div>

            <form data-toggle="validator" class="form-horizontal" role="form" id='form-create-user' action="{{ url('login') }}">
                <div class="modal-body" style="padding: 50px 75px">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <br>
                    <p class="center">Don't have an Account? <a href="/register"><br>Sign up here.</a></p>

                    <!-- <input type="text" id="login-username" class="form-control" placeholder="Username" required>
                    <br>
                    <input type="password" id="login-password" class="form-control" placeholder="Password" required>
                    <br>
                    <p>Don't have an Account? <a href="/register">Sign up here.</a></p> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Login</button> -->
                    <div class="form-group" style="display: -webkit-inline-box; margin: 0;">
                        <input type="submit" class="form-control btn btn-primary" id="btn_login" value="Login">
                        <!-- <input type="hidden" name="_id" value="0"> -->
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>