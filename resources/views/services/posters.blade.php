@extends('template.services')

@section('serv-name') <b>Services</b> | Posters  @stop

@section('serv-img') 
    <div id="d-browse" class="design-box">
        <fieldset id="browse-field">
            @for($i=1; $i<=9; $i++)
                <div class="col-sm-6 col-md-4 no-pad-left">
                    <label style="display: block;">
                        <div class="serv-browse" style="background: url('img/posters/des-{{ $i }}.jpg'); background-position: center center;background-size: cover;">
                        <div><p><input type="radio" id="brw-{{ $i }}" name="optradio" value=""
                        @if($i==1) checked="true" @endif >
                        Design #{{ $i }}
                        </input></p></div>
                        </div>
                    </label>
                </div>
            @endfor
        </fieldset>
    </div>
    <div id="d-upload" class="design-box" style="display: none;"> 
        <img id="upload-img" src="img/serv-14.png" width="100%" style="border: 1px solid grey">
        <div class="clear"></div><br>
        <input class="btn btn-primary" type="file" name="pic" accept="image/*">
    </div>
    <div class="clear"></div><hr>
    <p><b>Additional Details</b></p>
        <textarea class="form-control" rows="7" id="comment">Title:&#13;Sub Title:&#13;Date:&#13;Time:&#13;Address:&#13;Extras:&#13;</textarea>
    <div class="clear"></div><br>
@stop

@section('pricing') 
<!-- Pricing -->
<!-- <div class="clear"></div><br>
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
</table> -->
<!-- /.Pricing -->

@stop

@section('price-calculator')
<!-- Price Calculator -->
    <p><b>Size</b></p>
    <select class="form-control" id="sel1">
        <option>13in x 19in</option>
    </select>
    <div class="clear"></div><br>
    <p><b>Paper Type</b></p>
    <select class="form-control" id="sel1">
        <option>C2S 100/170 gsm</option>
        <option>Foldcote 12</option>
        <option>Old Mill/Bevania 300 gsm (White or Ivory only)</option>
    </select>
    <div class="clear"></div><br>
    <p><b>Lamination</b></p>
    <select class="form-control" id="sel1">
        <option>No Lamination</option>
        <option>Glossy/Matte Lamination</option>
    </select>
    <div class="clear"></div><hr>
    
    <p><b>Quantity</b></p>
    <div class="col-xs-12 no-pad"><input type="text" id="width" class="form-control" placeholder="1" required></div>
    <div class="clear"></div><br>
    
    <p><b>Delivery Address</b></p>
    <div class="col-xs-12 no-pad"><textarea class="form-control" rows="3" id="delivery-address"></textarea></div>
    <div class="clear"></div><hr>
    
    <!-- <p class="list-head price">TOTAL</p>
    <div class="col-xs-12 no-pad total-price">$ 1.00</div>
    <div class="clear"></div>     
    <br>-->

    <div class="col-xs-6 col-xs-offset-6 no-pad"><button type="button" class="btn btn-primary" style="width: 100%;">Submit</button></div>
<!-- /.Price Calculator -->
@stop