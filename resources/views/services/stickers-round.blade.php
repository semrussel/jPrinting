@extends('template.services')

@section('serv-name') <b>Services</b> | Stickers & Labels | Vinyl Round Sticker @stop

@section('serv-img') 
    <img src="img/serv-02.jpg" width="100%" style="border: 1px solid grey">
@stop               

@section('browse-modal') 
<div class="modal fade" id="browse-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="width: 80%">
        <div class="modal-content browse">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Browse</h4>
            </div>
            <div class="modal-body">
                
                @for($i=1; $i<=5; $i++)
                    <div class="col-sm-6 col-md-3">
                        <a href="#">
                            <img src="img/bl-shirt-0{{ $i }}.jpg" width="100%" style="border: 1px solid grey; margin-bottom: 5px">
                            <p>Borderlands Shirt #{{ $i }}</p>
                        </a>
                    </div>
                @endfor

                <div class="clear"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
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
        <td class="tg-yw4l"> Small</td>
        <td class="tg-yw4l"> 1</td>
        <td class="tg-yw4l"> $ 1.00</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> Medium</td>
        <td class="tg-yw4l"> 1</td>
        <td class="tg-yw4l"> $ 5.00</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> Large</td>
        <td class="tg-yw4l"> 1</td>
        <td class="tg-yw4l"> $ 10.00</td>
    </tr>
</table>
<!-- /.Pricing -->

@stop

@section('price-calculator')
<!-- Price Calculator -->
<div class="col-md-4">
    <p class="list-head price">Options</p>
    <p><b>Size</b></p>
    <select class="form-control" id="sel1">
        <option>2.00” x 2.00”</option>
        <option>2.25” x 2.25”</option>
        <option>2.50” x 2.50”</option>
        <option>2.75” x 2.75”</option>
        <option>3.00” x 3.00”</option>
        <option>3.25” x 3.25”</option>
        <option>3.50” x 3.50”</option>
        <option>3.75” x 3.75”</option>
        <option>4.00” x 4.00”</option>
        <option>4.25” x 4.25”</option>
        <option>4.50” x 4.50”</option>
        <option>4.75” x 4.75”</option>
        <option>5.00” x 5.00”</option>
        <option>5.25” x 5.25”</option>
        <option>5.50” x 5.50”</option>
        <option>5.75” x 5.75”</option>
        <option>6.00” x 6.00”</option>
    </select>
    <div class="clear"></div><br>
    <p><b>Substrate</b></p>
    <select class="form-control" id="sel1">
        <option>White Vinyl Sticker</option>
        <option>Transparent Vinyl Sticker</option>
    </select>
    <div class="clear"></div><hr>
    
    <p><b>Quantity</b></p>
    <div class="col-xs-12 no-pad"><input type="text" id="width" class="form-control" placeholder="1" required></div>
    <div class="clear"></div><br>
    
    <p><b>Shipping Cost</b> <i class="fa fa-tags" aria-hidden="true"></i></p>
    <div class="col-xs-12 no-pad"><input type="text" id="width" class="form-control" placeholder="$ 1.00" disabled="true"></div>
    <div class="clear"></div><hr>
    
    <!-- <p class="list-head price">TOTAL</p>
    <div class="col-xs-12 no-pad total-price">$ 1.00</div>
    <div class="clear"></div>     
    <br>-->

    <div class="col-xs-6 col-xs-offset-6 no-pad"><button type="button" class="btn btn-primary" style="width: 100%;">Confirm</button></div>
</div>
<!-- /.Price Calculator -->
@stop