@extends('template.services')

@section('serv-name') <b>Services</b> | Office Forms  @stop

@section('serv-img') 
    <div id="d-browse" class="design-box">
        <fieldset id="browse-field">
            @for($i=1; $i<=4; $i++)
                <div class="col-sm-6 col-md-4 no-pad-left">
                    <label style="display: block;">
                        <div class="serv-browse" style="background: url('img/office forms/des-{{ $i }}.jpg'); background-position: center center;background-size: cover;">
                        <div><p><input type="radio" id="brw-{{ $i }}" name="design" value="{{ $i }}"
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
        <img id="upload-img" name="file" src="img/serv-15.jpg" width="100%" style="border: 1px solid grey">
        <div class="clear"></div><br>
        <input class="btn btn-primary" type="file" name="pic" accept="image/*">
    </div>
    <div class="clear"></div><hr>
    <p><b>Additional Details</b></p>
        <textarea name="description" class="form-control" rows="8" id="comment" required>Company:&#13;Address:&#13;Contact No:&#13;Extras:</textarea>
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
    <select class="form-control" id="sel1" name="size">
        <option>8.5in x 11in</option>
        <option>8.27in x 11.69in</option>
        <option>8.5in x 13in</option>
    </select>
    <div class="clear"></div><br>
    <p><b>Paper</b></p>
    <select class="form-control" id="sel2" name="paper">
        <option>Book #80</option>
    </select>
    <div class="clear"></div><hr>
    
    <p><b>Quantity</b></p>
    <div class="col-xs-12 no-pad"><input name="quantity" type="text" id="width" class="form-control" placeholder="1" required></div>
    <div class="clear"></div><br>
    
    <p><b>Delivery Address</b></p>
    <div class="col-xs-12 no-pad"><textarea name="address" class="form-control" rows="3" id="delivery-address" required></textarea></div>
    <div class="clear"></div><hr>
    
    <!-- <p class="list-head price">TOTAL</p>
    <div class="col-xs-12 no-pad total-price">$ 1.00</div>
    <div class="clear"></div>     
    <br>-->

    <input type="hidden" value="office forms" name="product">
    <div class="col-xs-6 col-xs-offset-6 no-pad"><input type="submit" class="btn btn-primary" id="submitRequest" name="submit" value='Submit' style="width: 100%;"></div>
<!-- /.Price Calculator -->
@stop