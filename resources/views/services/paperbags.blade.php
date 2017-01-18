@extends('template.services')

@section('serv-name') <b>Services</b> | Paper Bags  @stop

@section('serv-img') 
    <div id="d-browse" class="design-box">
        <fieldset id="browse-field">
            @for($i=1; $i<=7; $i++)
                <div class="col-sm-6 col-md-4 no-pad-left">
                    <label style="display: block;">
                        <div class="serv-browse" style="background: url('img/paperbags/des-{{ $i }}.jpg'); background-position: center center;background-size: cover;">
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
        <img src="img/serv-10.jpg" width="100%" style="border: 1px solid grey">
        <a href="#" data-toggle="modal" data-target="#upload-modal">
            <div class="col-xs-2 no-pad"><div class="serv-main-up upload">
                <p><i class="fa fa-upload" aria-hidden="true"></i> Upload<p>
            </div></div>
        </a>
    </div>
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
    <select class="form-control" id="sel1">
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