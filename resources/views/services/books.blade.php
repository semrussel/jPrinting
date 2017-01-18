@extends('template.services')

@section('serv-name') <b>Services</b> | Books  @stop

@section('serv-img') 
    <div id="d-browse" class="design-box">
        <fieldset id="browse-field">
            @for($i=1; $i<=8; $i++)
                <div class="col-sm-6 col-md-4 no-pad-left">
                    <label style="display: block;">
                        <div class="serv-browse" style="background: url('img/books/des-{{ $i }}.jpg'); background-position: center center;background-size: cover;">
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
        <img id="upload-img" src="img/serv-05.jpeg" width="100%" style="border: 1px solid grey">
        <div class="clear"></div><br>
        <input class="btn btn-primary" type="file" name="pic" accept="image/*">
    </div>
    <div class="clear"></div><hr>
    <p class="col-xs-12"><b>Additional Details</b></p>
    <textarea class="form-control" rows="5" id="comment">Title&#13;Sub Title:&#13;Extras:&#13;Delivery Address:</textarea>
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
        <option>Small</option>
        <option>Medium</option>
        <option>Large</option>
    </select>
    <div class="clear"></div><br>
    <p><b>Color</b></p>
    <select class="form-control" id="sel1">
        <option>Black</option>
        <option>White</option>
        <option>Blue</option>
        <option>Red</option>
    </select>
    <div class="clear"></div><br>

    <p><b>Text</b> | Front</p>
    <div class="col-xs-12 no-pad"><input type="text" id="width" class="form-control" placeholder="Front Text" required></div>
    <div class="clear"></div><br>
    <p><b>Text</b> | Back</p>
    <div class="col-xs-12 no-pad"><input type="text" id="width" class="form-control" placeholder="Back Text" required></div>
    <div class="clear"></div><hr>
    
    <p><b>Quantity</b></p>
    <div class="col-xs-12 no-pad"><input type="text" id="width" class="form-control" placeholder="1" required></div>
    <div class="clear"></div><br>
    
    <!-- <p class="list-head price">TOTAL</p>
    <div class="col-xs-12 no-pad total-price">$ 1.00</div>
    <div class="clear"></div>     
    <br>-->

    <div class="col-xs-6 col-xs-offset-6 no-pad"><button type="button" class="btn btn-primary" style="width: 100%;">Confirm</button></div>
<!-- /.Price Calculator -->
@stop