@extends('template.services')

@section('serv-name') <b>Services</b> | Paper Bags  @stop

@section('serv-img') 
    <div id="d-browse" class="design-box">
        <fieldset id="browse-field">
            @for($i=1; $i<=7; $i++)
                <div class="col-sm-6 col-md-4 no-pad-left">
                    <label style="display: block;">
                        <div class="serv-browse" style="background: url('img/paperbags/des-{{ $i }}.jpg'); background-position: center center;background-size: cover;">
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
        <img id="upload-img" name="file" src="img/serv-10.jpg" width="100%" style="border: 1px solid grey">
        <div class="clear"></div><br>
        <input class="btn btn-primary" type="file" name="pic" accept="image/*">
    </div>
    <div class="clear"></div><hr>
    <p><b>Additional Details</b></p>
        <textarea name="description" class="form-control" rows="8" id="comment" required>Extras:</textarea>
    <div class="clear"></div><br>
@stop

@section('pricing') 
<!-- Pricing -->
<div class="clear"></div><br>
<p class="list-head price" style="background-color: grey; margin: 0;">Pricing</p>
<table class="tg">
    <tr>
        <th class="tg-yw4l">Size</th>
        <th class="tg-yw4l">Basis Weight</th>
        <th class="tg-yw4l">Width</th>
        <th class="tg-yw4l">Gusset</th>
        <th class="tg-yw4l">Height</th>
        <th class="tg-yw4l">Package Quantity</th>  
    </tr>
    <tr>
        <td class="tg-yw4l"> #1</td>
        <td class="tg-yw4l"> 30 lbs</td>
        <td class="tg-yw4l"> 3 1/2”</td>
        <td class="tg-yw4l"> 2”</td>
        <td class="tg-yw4l"> 6 1/2”</td>
        <td class="tg-yw4l"> 100</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> #2</td>
        <td class="tg-yw4l"> 30 lbs</td>
        <td class="tg-yw4l"> 4 1/4”</td>
        <td class="tg-yw4l"> 2 3/8”</td>
        <td class="tg-yw4l"> 8 3/16”</td>
        <td class="tg-yw4l"> 500</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> #4</td>
        <td class="tg-yw4l"> 30 lbs</td>
        <td class="tg-yw4l"> 5”</td>
        <td class="tg-yw4l"> 3 1/8”</td>
        <td class="tg-yw4l"> 9 3/4”</td>
        <td class="tg-yw4l"> 500</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> #6</td>
        <td class="tg-yw4l"> 35 lbs</td>
        <td class="tg-yw4l"> 6”</td>
        <td class="tg-yw4l"> 3 5/8”</td>
        <td class="tg-yw4l"> 11”</td>
        <td class="tg-yw4l"> 500</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> #8</td>
        <td class="tg-yw4l"> 35 lbs</td>
        <td class="tg-yw4l"> 6 1/8”</td>
        <td class="tg-yw4l"> 4”</td>
        <td class="tg-yw4l"> 12 3/8”</td>
        <td class="tg-yw4l"> 500</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> #10</td>
        <td class="tg-yw4l"> 35 lbs</td>
        <td class="tg-yw4l"> 6 9/16”</td>
        <td class="tg-yw4l"> 4 1/6”</td>
        <td class="tg-yw4l"> 13 3/16”</td>
        <td class="tg-yw4l"> 500</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> #12</td>
        <td class="tg-yw4l"> 40 lbs</td>
        <td class="tg-yw4l"> 7”</td>
        <td class="tg-yw4l"> 4 1/2”</td>
        <td class="tg-yw4l"> 13 3/4”</td>
        <td class="tg-yw4l"> 500</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> #16</td>
        <td class="tg-yw4l"> 40 lbs</td>
        <td class="tg-yw4l"> 7 3/4”</td>
        <td class="tg-yw4l"> 4 7/8”</td>
        <td class="tg-yw4l"> 15 3/4”</td>
        <td class="tg-yw4l"> 500</td>
    </tr>
    <tr>
        <td class="tg-yw4l"> #25</td>
        <td class="tg-yw4l"> 40 lbs</td>
        <td class="tg-yw4l"> 8 3/8”</td>
        <td class="tg-yw4l"> 5 1/4”</td>
        <td class="tg-yw4l"> 18”</td>
        <td class="tg-yw4l"> 500</td>
    </tr>

</table>
<!-- /.Pricing -->

@stop

@section('price-calculator')
<!-- Price Calculator -->
    <p><b>Size</b></p>
    <select class="form-control" id="sel1" name="size">
        <option>#1</option>
        <option>#2</option>
        <option>#4</option>
        <option>#6</option>
        <option>#8</option>
        <option>#10</option>
        <option>#12</option>
        <option>#16</option>
        <option>#25</option> 
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

    <input type="hidden" value="paper bags" name="product">
    <div class="col-xs-6 col-xs-offset-6 no-pad"><input type="submit" class="btn btn-primary" id="submitRequest" name="submit" value='Submit' style="width: 100%;"></div>
<!-- /.Price Calculator -->
@stop