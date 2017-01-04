@extends('template.main')

@section('title') Jimbes Printing @stop

@section('nav') 
    <li><a class="hover-orange" href="/">Home</a></li>
    <li><a class="hover-orange active" href="/services">Services</a></li>
@stop

@section('content') 

<div class="inner-pad"></div>

<!-- Page Content -->
<div class="container">

    <!-- Services -->
    <div class="row">
        <div class="col-md-3">
            @include('inc/services-nav')
        </div>
        <h3 class="serv-main-title col-md-offset-3"><b>Largeformat Printing</b> | Tarpaulin</h3>
        <div class="col-md-9 serv-main-box">
                <div class="col-md-8 no-pad">

                    <img src="img/pexels-photo-08.jpg" width="100%" style="border: 1px solid grey">

                    <a href="#">
                        <div class="col-xs-2 no-pad"><div class="serv-main-up browse">
                            <p><i class="fa fa-external-link" aria-hidden="true"></i> Browse<p>
                        </div></div>
                    </a>
                    <a href="#">
                        <div class="col-xs-2 no-pad"><div class="serv-main-up create">
                            <p><i class="fa fa-image" aria-hidden="true"></i> Create<p>
                        </div></div>
                    </a>
                    <a href="#">
                        <div class="col-xs-2 no-pad"><div class="serv-main-up upload">
                            <p><i class="fa fa-upload" aria-hidden="true"></i> Upload<p>
                        </div></div>
                    </a>

                    <div class="clear"></div><br>
                    <p class="list-head price" style="background-color: grey; margin: 0;">Pricing</p>
                    <table class="tg">
                        <tr>
                            <th class="tg-yw4l">Size</th>
                            <th class="tg-yw4l">Quantity</th>
                            <th class="tg-yw4l">Price</th>
                        </tr>
                        <tr>
                            <td class="tg-yw4l"> 1" x 1"</td>
                            <td class="tg-yw4l"> 1</td>
                            <td class="tg-yw4l"> $ 1.00</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l"> 2" x 2"</td>
                            <td class="tg-yw4l"> 1</td>
                            <td class="tg-yw4l"> $ 5.00</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <p class="list-head price">Price Calculator</p>
                    <p><b>Size</b> | Width x Height</p>
                    <div class="col-xs-6 no-pad-left"><input type="text" id="width" class="form-control" placeholder="Width" required></div>
                    <div class="col-xs-6 no-pad-right"><input type="text" id="height" class="form-control" placeholder="Height" required></div>
                    <div class="clear"></div><hr>
                    
                    <p><b>Quantity</b></p>
                    <div class="col-xs-12 no-pad"><input type="text" id="width" class="form-control" placeholder="1" required></div>
                    <div class="clear"></div><br>
                    
                    <p><b>Shipping Cost</b> <i class="fa fa-tags" aria-hidden="true"></i></p>
                    <div class="col-xs-12 no-pad"><input type="text" id="width" class="form-control" placeholder="$ 1.00" disabled="true"></div>
                    <div class="clear"></div><hr>
                    
                    <p class="list-head price">TOTAL</p>
                    <div class="col-xs-12 no-pad total-price">$ 1.00</div>
                    <div class="clear"></div>
                    
                    <br>
                    <div class="col-xs-6 col-xs-offset-6 no-pad"><button type="button" class="btn btn-primary" style="width: 100%;">Confirm</button></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@stop