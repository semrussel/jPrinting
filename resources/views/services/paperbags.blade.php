@extends('template.services')

@section('serv-name') <b>Services</b> | Paper Bagss  @stop

@section('serv-img') 
    <img src="img/serv-10.jpg" width="100%" style="border: 1px solid grey">
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
<div class="col-md-4">
    <p class="list-head price">Options</p>
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