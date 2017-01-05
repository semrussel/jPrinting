@extends('services-main')

@section('serv-name') <b>Largeformat Printing</b> | Tarpaulin  @stop

@section('serv-img') 
    <img src="img/pexels-photo-08.jpg" width="100%" style="border: 1px solid grey">
@stop  

@section('pricing') 
<!-- Pricing -->
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
<!-- /.Pricing -->

@stop

@section('price-calculator')
<!-- Price Calculator -->
<div class="col-md-4">
    <p class="list-head price">Options</p>
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
<!-- /.Price Calculator -->
@stop