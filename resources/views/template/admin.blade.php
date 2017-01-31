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
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css"  
          href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <link href="{{ url('css/modern-business.css') }}" rel="stylesheet">
    <link href="{{ url('css/jb-printing-admin.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Montserrat">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/r-2.1.0/sc-1.4.2/datatables.min.css"/>

    <!-- <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @include('inc/navigation-admin')

    @include('inc/dash-admin')

    @yield('content')

    <!-- Footer -->
    <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border: 1px dashed;">
                    <p class="copyright">Copyright © Jimbes Printing 2017</p>
                </div>
            </div>
        </div>
    </footer> -->

    <!-- jQuery -->
    <script src="{{ url('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <!-- CUSTOM Script-->
    <!-- <script src="js/jb-printing.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>

    <script src="{{ url('js/graphs.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $('#' + location.pathname.split("-")[1]).addClass('active');
            $('#sub-' + location.pathname.split("-")[2]).addClass('sub-active');  
        });

        $(document).ready(function() {
            $('#order-table').DataTable();

            $('#opt-paper').change(function(){
                if(this.checked)
                    $('#sec-paper').fadeIn('slow');
                else
                    $('#sec-paper').fadeOut('slow');
            });
            $('#opt-colorply').change(function(){
                if(this.checked)
                    $('#sec-colorply').fadeIn('slow');
                else
                    $('#sec-colorply').fadeOut('slow');
            });

                
        } );

        $(document).ready(function() {
            $("input[name$='has']").click(function() {
                var test = $(this).val();

                $("div.desc").hide();
                $("#has" + test).show();
            });
        });

        var tagcount = 0;

        $("input[name$='cars']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Cars" + test).show();
            if(e.which == 13) {
                if ($('#p-size').is(':focus')) {
                    var div = document.getElementById('div-size');
                    var incont = $('#p-size').val();
                }
                if ($('#p-paper').is(':focus')) {
                    var div = document.getElementById('div-paper');
                    var incont = $('#p-paper').val();
                }
                if ($('#p-colorply').is(':focus')) {
                    var div = document.getElementById('div-colorply');
                    var incont = $('#p-colorply').val();
                }

                if (incont != "" && incont != null) {
                    div.innerHTML = div.innerHTML + 
                        '<span name="' + incont + '" id="vartag-' + incont + '-' + tagcount + '" contenteditable="false" class="tag-label">' + 
                        '<button class="tag-label-btn" type="button" id="btn-vartag-' + incont + '-' + tagcount + '" onclick="removeVarTag(\'vartag-' + incont  + '-' + tagcount + '\')">' +
                        '<i class="fa fa-times" aria-hidden="true"></i></button>' + 
                        incont +
                        '</span>';

                    tagcount++;
                    $('#p-size').val("");
                    $('#p-paper').val("");
                    $('#p-colorply').val("");
                }
            }
        });

        function removeVarTag(tagname) {
            var elem = document.getElementById(tagname);
            elem.remove();
        }
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/r-2.1.0/sc-1.4.2/datatables.min.js"></script>
    <script src="{{ url('js/graphs.js') }}"></script> 

    <!-- <script href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script href="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script href="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script> -->

</body>

</html>
