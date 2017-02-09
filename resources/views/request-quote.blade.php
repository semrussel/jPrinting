@extends('template.main')

@section('title') Jimbes Printing @stop

@section('content') 

<div class="inner-pad"></div>

<!-- Page Content -->
<div class="container">

    <!-- Services -->
    <div class="row">
        <div class="col-md-3">
            @include('inc/sidebar')
        </div>
        <h3 class="serv-main-title col-md-offset-3"><b>Request a Quote</b></h3>
        <div class="col-md-9 serv-main-box">
        <form id="requestForm" method="POST" action="{{ url('/create-request') }}">
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header serv">Customer Information</h2>
                <div class="clear"></div>
                <?php $user = Auth::user();?>
                @if (Auth::check())
                <div class="col-md-12">
                    <b class="col-xs-12 col-sm-6 col-md-3">Full Name:</b>
                    <div class="col-xs-12 col-sm-6 col-md-9"><input type="text" id="fullname" name="fullname" class="form-control" required value="{{$user->firstName}} {{$user->lastName}}"></div>
                    <br><br>
                </div>
                <div class="col-md-12">
                    <b class="col-xs-12 col-sm-6 col-md-3">Email Address:</b>
                    <div class="col-xs-12 col-sm-6 col-md-9"><input type="text" id="email" disabled name="email" class="form-control" required value="{{$user->email}}"></div>
                    <br><br>
                </div>
                <div class="col-md-12">
                    <b class="col-xs-12 col-sm-6 col-md-3">Cell Phone Number:</b>
                    <div class="col-xs-12 col-sm-6 col-md-9"><input type="text" value="{{$user->cpNum}}" id="street" class="form-control" required disabled></div>
                </div>
                @else
                <div class="col-md-12">
                    <b class="col-xs-12 col-sm-6 col-md-3">Full Name:</b>
                    <div class="col-xs-12 col-sm-6 col-md-9"><input type="text" id="fullname" name="fullname" class="form-control" required></div>
                    <br><br>
                </div>
                <div class="col-md-12">
                    <b class="col-xs-12 col-sm-6 col-md-3">Email Address:</b>
                    <div class="col-xs-12 col-sm-6 col-md-9"><input type="text" id="email" name="email" class="form-control" required></div>
                    <br><br>
                </div>
                <div class="col-md-12">
                    <b class="col-xs-12 col-sm-6 col-md-3">Cell Phone Number:</b>
                    <div class="col-xs-12 col-sm-6 col-md-9"><input class="form-control contact-first" value="63" disabled=""><input type="text" id="cpNum" name="cpNum" class="form-control contact-next" required></div>
                </div>
                @endif
            </div>
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header serv">Quote Details</h2>
                <div class="clear"></div>

                <div class="col-md-12">
                    <b class="col-xs-12 col-sm-6 col-md-3">Quote Title:</b>
                    <div class="col-xs-12 col-sm-6 col-md-9"><input type="text" id="title" name="title" class="form-control" required></div>
                    <br><br>
                    
                    <b class="col-xs-4 col-sm-3">Quote Type:</b>
                    <label class="col-xs-4 col-sm-3"><input type="radio" id="existing" name="optradio" value="existing"> Existing Product</label>
                    <label class="col-xs-4 col-sm-3"><input type="radio" id="custom" name="optradio" value="custom"> Custom Product</label>
                </div>

                <div class="col-md-6">
                    <br>
                    <div id="customProDiv">
                        <input type="text" id="custom" name="product1" class="form-control" placeholder="Custom Product Name">
                        <br>
                    </div>
                    <div id="existProDiv">
                        <select name="product2" id="existing_products_title" class="form-control">
                            <option value="">Select Product</option>
                            <optgroup label="Exhibit Display">
                                <option value="Potable Booth">Potable Booth</option>
                            </optgroup>
                            <optgroup label="Business Cards">
                                <option value="Business Cards, 1-side">Business Cards, 1-side</option>
                                <option value="Business Cards, 2-sides">Business Cards, 2-sides</option>
                                <option value="Transparent Cards">Transparent Cards</option>
                                <option value="Foil Business Cards">Foil Business Cards</option>
                                <option value="Spot UV Cards">Spot UV Cards</option>
                                <option value="Embossed Spot UV Cards">Embossed Spot UV Cards</option>
                                <option value="Plastic Business Cards">Plastic Business Cards</option>
                                <option value="White Ink Business Cards">White Ink Business Cards</option>
                            </optgroup>
                            <optgroup label="Marketing Materials">
                                <option value="Flyers, 1-side">Flyers, 1-side</option>
                                <option value="Flyers, 2-sides">Flyers, 2-sides</option>
                                <option value="Brochures, Bi-Fold">Brochures, Bi-Fold</option>
                                <option value="Brochures, Tri-Fold">Brochures, Tri-Fold</option>
                                <option value="Brochures, Quad-Fold">Brochures, Quad-Fold</option>
                                <option value="Posters">Posters</option>
                                <option value="Postcards/Invites, 1-side Print">Postcards/Invites, 1-side Print</option>
                                <option value="Postcards/Invites, 2-sides Print">Postcards/Invites, 2-sides Print</option>
                                <option value="Booklet">Booklet</option>
                                <option value="Catalog/Souvenir Program">Catalog/Souvenir Program</option>
                                <option value="Door Hanger, 1-side Print">Door Hanger, 1-side Print</option>
                                <option value="144">Door Hanger, 2-sides Print</option>
                                <option value="151">Table Tent Cards</option>
                                <option value="152">Bookmark</option>
                                <option value="165">Custom Notebook Printing</option>
                                <option value="166">Ticket Printing</option>
                                <option value="168">Gift Certificates / Voucher</option>
                                <option value="169">Banner Printing Services</option>
                                <option value="170">Placemat Printing</option>
                                <option value="171">Hang Tag</option>
                                <option value="172">Bunting Printing</option>
                            </optgroup>
                            <optgroup label="Business Stationery">
                                <option value="112">Letterhead</option>
                                <option value="113">Letter Envelope</option>
                                <option value="142">Document Envelope</option>
                                <option value="167">Baronial Envelope</option>
                                <option value="164">Corporate Folder</option>
                                <option value="133">Note Pad / Memo Pad</option>
                                <option value="150">Certificates</option>
                            </optgroup>
                            <optgroup label="Business Forms">
                                <option value="138">Loose Business Forms</option>
                                <option value="139">Carbon Forms</option>
                                <option value="140">Carbonless Forms</option>
                            </optgroup>
                            <optgroup label="Signs &amp; Displays">
                                <option value="98">Tarpaulin</option>
                                <option value="114">Tarp with X-Stand</option>
                                <option value="115">Tarp with Pull-Up Banner</option>
                                <option value="117">Large Poster</option>
                                <option value="175">Sticker on Sintra Board Printing</option>
                                <option value="176">Custom Standee Printing</option>
                            </optgroup>
                            <optgroup label="Stickers">
                                <option value="100">Vinyl Round Stickers</option>
                                <option value="106">Vinyl Square Stickers&nbsp;</option>
                                <option value="107">Vinyl Rectangle Stickers</option>
                                <option value="153">Custom Size, Vinyl Stickers</option>
                                <option value="154">Custom Size, Frosted Stickers</option>
                                <option value="155">Custom Size, PP Stickers</option>
                                <option value="161">Custom Size, One-Way Perforated Stickers</option>
                                <option value="162">Custom Size, Static Cling Stickers</option>
                                <option value="163">Custom Size, Reflectorized Stickers</option>
                            </optgroup>
                            <optgroup label="Calendars">
                                <option value="128">Poster Calendar</option>
                                <option value="129">Monthly Wall Calendar</option>
                                <option value="130">Monthly Desk Calendar</option>
                                <option value="132">Table Tent Calendar</option>
                            </optgroup>
                            <optgroup label="Promotional Items">
                                <option value="78">Mug</option>
                                <option value="156">Regular Button Pins</option>
                                <option value="157">2.25" Keychain Mirror Button Pins</option>
                                <option value="158">2.25" Keychain Bottle Opener</option>
                                <option value="159">2.25" Magnetic Bottle Opener</option>
                            </optgroup>
                            <optgroup label="Photo Products">
                                <option value="160">Photo Printing</option>
                                <option value="174">Large Photo Printing</option>
                            </optgroup>
                        </select>
                        <br>
                    </div>
                    <b class="col-xs-12">Quantity:</b><br>
                    <input type="text" id="quantity" name="quantity" class="form-control" required><br>
                    <b class="col-xs-12">Size:</b><br>
                    <input type="text" id="size" name="size" class="form-control"><br>
                    <b class="col-xs-12">Paper / Stock:</b><br>
                    <input type="text" id="pns" name="pns" class="form-control"><br>
                    <b class="col-xs-12">Sides / Pages:</b><br>
                    <input type="text" id="snp" name="snp" class="form-control"><br>
                    <b class="col-xs-12">Lamination:</b><br>
                    <select name="lamination" id="lamination" class="form-control">
                        <option value="none">Select Lamination</option>
                        <option value="matte">Matte</option>
                        <option value="gloss">Gloss</option>
                    </select>
                    <br>
                    <b class="col-xs-12">Additional Details:</b><br>
                    <textarea class="form-control" rows="5" id="details" name="details"></textarea><br>
                    <input type="file" name="attachment" class="form-control" required><br>
                    <input type="submit" class="btn btn-primary" id="submitRequest" name="submit" value='Submit'>
                    <div class="clear"></div><br>
                </div>
            </div>
        </form>
        </div>
    </div>
    <!-- /.row -->

</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>

function createRequest(){
    var form = document.querySelector('#requestForm');
    var formdata = new FormData(form)
    var ajaxUrl = $('#requestForm').attr('action');
    $.ajax({
        type : 'POST',
        url : ajaxUrl,
        cache: false,
        contentType: false,
        processData: false,
        data : formdata,
        success : function(data){
            alert(data);
            window.location = "{{ url('/profile') }}";
        }
    })
}

$('#requestForm').on('submit',function(){
    event.preventDefault();
    createRequest();
});

$(document).ready(function() {
    $('input[type=radio][name=optradio]').change(function() {
        if (this.value == 'existing') {
            $('#existProDiv').show();
            $('#customProDiv').hide();
        }
        else if (this.value == 'custom') {
            $('#customProDiv').show();
            $('#existProDiv').hide();
        }
    });
});
</script>
<!-- container -->
@stop