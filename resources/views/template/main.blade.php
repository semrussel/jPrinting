<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css"  
          href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/jb-printing.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Montserrat">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</head>

<body>

    @include('inc/navigation')

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 footer-info">
                    <p class="footer-head">FIND US</p>
                    <p><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><span> 301 Quirino Highway, Brgy. Baesa, Quezon City, Philippines</span></p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i><span> jimbes.printing@yahoo.com</span></p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i><span> Call 0932 547 1020</span></p>
                    <br>
                </div>
                <div class="col-xs-4">
                    <!-- <p>Copyright &copy; Jimbes Printing 2016</p> -->
                </div>
                <div class="col-xs-4 social-med">
                    <p class="footer-head">FOLLOW US </p>
                    <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></p>
                </div>
                <div class="col-xs-12">
                    <hr style="border: 1px dashed;">
                    <p class="copyright">Copyright © Jimbes Printing 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <a id="scroller-top" href="body"><div id="scroller-top-div" class="up-butt"><i class="fa fa-arrow-up" aria-hidden="true"></i></div></a>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- CUSTOM Script-->
    <script src="js/jb-printing.js"></script>

    <script href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


</body>

</html>
