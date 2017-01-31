@extends('template.services')

@section('serv-name') <b>Services</b> | {{ $service->name }} @stop

@section('serv-img') 
    <div id="d-browse" class="design-box">
        <fieldset id="browse-field">
            @for($i=1; $i<=8; $i++)
                <div class="col-sm-6 col-md-4 no-pad-left">
                    <label style="display: block;">
                        <div class="serv-browse" style="background: url('img/business cards 2-side/des-{{ $i }}.jpg'); background-position: center center;background-size: cover;">
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
        <img id="upload-img" name="file" src="img/serv-07.jpg" width="100%" style="border: 1px solid grey">
        <div class="clear"></div><br>
        <input class="btn btn-primary" type="file" name="pic" accept="image/*">
    </div>
    <div class="clear"></div><hr>
    <p><b>Additional Details</b></p>
        <textarea name="description" class="form-control" rows="6" id="comment" required>{{ $service->description }}</textarea>
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
        @foreach($sizes as $size)
        <option value="{{ $size->name }}">{{ $size->name }}</option>
        @endforeach
    </select>
    <div class="clear"></div><br>
    

    @if($service->is_paperType != 0)
    <p><b>Paper Type</b></p>
    <select class="form-control" id="sel2" name="paper">
        @foreach($paperTypes as $paperType)
        <option value="{{ $paperType->name }}">{{ $paperType->name }}</option>
        @endforeach
    </select>
    <div class="clear"></div><br>
    @endif

    @if($service->is_lam != 0)
    <p><b>Lamination</b></p>
    <select class="form-control" id="sel3" name="lamination">
        <option>No lamination</option>
        <option>Matte lamination</option>
        <option>Glossy lamination</option>
    </select>
    <div class="clear"></div><br>
    @endif

    @if($service->is_corner != 0)
    <p><b>Rounded Corners</b></p>
    <select class="form-control" id="sel4" name="corner">
        <option>No rounded</option>
        <option>1-Corner</option>
        <option>2-Corner</option>
        <option>3-Corner</option>
        <option>4-Corner</option>
    </select>
    <div class="clear"></div><br>
    @endif

    @if($service->is_substrate != 0)
    <p><b>Substrate</b></p>
    <select class="form-control" id="sel5" name="substrate">
        <option>White Vinyl Sticker</option>
        <option>Transparent Vinyl Sticker</option>
    </select>
    <div class="clear"></div><br>
    @endif

    @if($service->is_color != 0)
    <p><b>Color</b></p>
    <select class="form-control" id="sel6" name="color">
        <option>B & W</option>
        <option>Colored</option>
        <option>15 % Area-Colored</option>
    </select>
    <div class="clear"></div><br>
    @endif

    @if($service->is_colorFly != 0)
    <p><b>Color of Ply</b></p>
    <select class="form-control" id="sel7" name="colorPly">
        @foreach($colorPlys as $colorPly)
        <option value="{{ $colorPly->name }}">{{ $colorPly->name }}</option>
        @endforeach
    </select>
    <div class="clear"></div><br>
    @endif

    @if($service->is_per != 0)
    <p><b>Perforation</b></p>
    <select class="form-control" id="sel8" name="perforation">
        <option>None</option>
        <option>Basic perforation</option>
        <option>Micro perforation</option>
        <option>Triangle perforation</option>
    </select>
    <div class="clear"></div><br>
    @endif

    <hr>

    <p><b>Quantity</b></p>
    <div class="col-xs-12 no-pad"><input name="quantity" type="number" id="width" class="form-control" placeholder="1" required></div>
    <div class="clear"></div><br>
    
    <p><b>Delivery Address</b></p>
    <div class="col-xs-12 no-pad"><textarea name="address" class="form-control" rows="3" id="delivery-address" required></textarea></div>
    <div class="clear"></div><hr>
    
    <!-- <p class="list-head price">TOTAL</p>
    <div class="col-xs-12 no-pad total-price">$ 1.00</div>
    <div class="clear"></div>     
    <br>-->

    <input type="hidden" value="business cards 2-side" name="product">
    <div class="col-xs-6 col-xs-offset-6 no-pad"><input type="submit" class="btn btn-primary" id="submitRequest" name="submit" value='Submit' style="width: 100%;"></div>
<!-- /.Price Calculator -->
@stop