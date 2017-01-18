@extends('template.services')

@section('serv-name') <b>Services</b> | Brochures | Quad-fold  @stop

@section('serv-img') 
    <div id="d-browse" class="design-box">
        <fieldset id="browse-field">
            @for($i=1; $i<=6; $i++)
                <div class="col-sm-6 col-md-4 no-pad-left">
                    <label style="display: block;">
                        <div class="serv-browse" style="background: url('img/brochures-quadfold/des-{{ $i }}.jpg'); background-position: center center;background-size: cover;">
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
        <img src="img/serv-20.jpg" width="100%" style="border: 1px solid grey">
        <a href="#" data-toggle="modal" data-target="#upload-modal">
            <div class="col-xs-2 no-pad"><div class="serv-main-up upload">
                <p><i class="fa fa-upload" aria-hidden="true"></i> Upload<p>
            </div></div>
        </a>
    </div>
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
        <option>17in x 11in; Folded: 8.5in x 11in</option>
        <option>11in x 8.5in; Folded: 5.5in x 8.5in</option>
    </select>
    <div class="clear"></div><br>
    <p><b>Paper Type</b></p>
    <select class="form-control" id="sel1">
        <option>100 gsm, coated paper</option>
        <option>170 gsm, coated paper</option>
    </select>
    <div class="clear"></div><br>
    <p><b>Additional Details</b></p>
        <textarea class="form-control" rows="4" id="comment"></textarea>
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
<!-- /.Price Calculator -->
@stop