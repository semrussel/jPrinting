@extends('template.main')

@section('content')

<div class="inner-pad"></div>

<!-- Page Content -->
<div class="container">

    <!-- Services -->
    <div class="row">
        <div class="col-md-3">
            @include('inc/services-nav')
        </div>
        <h3 class="serv-main-title col-md-offset-3"><b>Services</b></h3>
        <div class="col-md-9 serv-main-box" style="padding: 20px 10px;">
            
            <div class="col-md-6">
                <!-- <a href="/services-calendars"> -->
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-01.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Calendars</b></h4>
                        </div>
                        <div class="serv-sub">
                            <a href="/services-calendars-poster"><div class="serv-sub-item">Poster Calendar</div></a>
                            <a href="/services-calendars-monthly"><div class="serv-sub-item">Monthly Wall Calendar</div></a>
                            <a href="/services-calendars-table"><div class="serv-sub-item">Table Tent Calendar</div></a>
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                <!-- </a> -->
                <!-- <a href="/services-stickers"> -->
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-02.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Sticker & Labels</b></h4>
                        </div>
                        <div class="serv-sub">
                            <a href="/services-stickers-round"><div class="serv-sub-item">Vinyl Round Sticker</div></a>
                            <a href="/services-stickers-square"><div class="serv-sub-item">Vinyl Square Sticker</div></a>
                            <a href="/services-stickers-rectangle"><div class="serv-sub-item">Vinyl Rectangle Sticker</div></a>
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                        </div>
                    </div>
                <!-- </a> -->
            </div>

            <div class="col-md-6">
                <a href="/services-invitations">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-03.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Invitations</b></h4>
                        </div>
                    </div>
                </a>
                <!-- <a href="/services-newsletters">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-04.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>News Letters</b></h4>
                        </div>
                    </div>
                </a> -->
            </div>

            <!-- <div class="col-md-6"> -->
                <!-- <a href="/services-books">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-05.jpeg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Books</b></h4>
                        </div>
                    </div>
                </a> -->
                <!-- <a href="/services-yearbooks">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-06.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Yearbooks</b></h4>
                        </div>
                    </div>
                </a> -->
            <!-- </div> -->

            <div class="col-md-6">
                <!-- <a href="/services-business-cards"> -->
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-07.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Business Cards</b></h4>
                        </div>
                        <div class="serv-sub">
                            <a href="/services-business-cards-1side"><div class="serv-sub-item">Business Cards, 1-side</div></a>
                            <a href="/services-business-cards-2side"><div class="serv-sub-item">Business Cards, 2-side</div></a>
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                        </div>
                    </div>
                <!-- </a> -->
                <!-- <a href="/services-gift-wrappers">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-08.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Gift Wrappers</b></h4>
                        </div>
                    </div>
                </a> -->
            </div>

            <div class="col-md-6">
                <a href="/services-souvenir-programs">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-09.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Souvenir Program</b></h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="/services-paper-bags">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-10.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Paper Bags</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <!-- <div class="col-md-6">
                <a href="/services-bag-tags">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-11.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>PCV ID / Bag Tags</b></h4>
                        </div>
                    </div>
                </a>
                <a href="/services-corporate-folders">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-12.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Corporate Folders</b></h4>
                        </div>
                    </div>
                </a>
            </div> -->

            <div class="col-md-6">
                <!-- <a href="/services-tickets"> -->
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-13.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Tickets</b></h4>
                        </div>
                        <div class="serv-sub">
                            <a href="/services-tickets-1side"><div class="serv-sub-item">Tickets, 1-side</div></a>
                            <a href="/services-tickets-2side"><div class="serv-sub-item">Tickets, 2-side</div></a>
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                        </div>
                    </div>
                <!-- </a> -->
            </div>
            <div class="col-md-6">
                <a href="/services-posters">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-14.png'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Posters</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="/services-office-forms">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-15.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Office Forms</b></h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="/services-certificates">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-16.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Certificates</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <!-- <a href="/services-boxes">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-17.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Boxes</b></h4>
                        </div>
                    </div>
                </a> -->
                <!-- <a href="/services-receipts"> -->
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-18.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Receipts</b></h4>
                        </div>
                        <div class="serv-sub">
                            <a href="/services-receipts-carbon"><div class="serv-sub-item">Carbon Form</div></a>
                            <a href="/services-receipts-carbonless"><div class="serv-sub-item">Carbonless Form</div></a>
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                        </div>
                    </div>
                <!-- </a> -->
            </div>

            <div class="col-md-6">
                <!-- <a href="/services-notebooks"> -->
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-19.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Notebooks</b></h4>
                        </div>
                        <div class="serv-sub">
                            <a href="/services-notebooks-wire-soft"><div class="serv-sub-item">Wire Bound, Soft Cover</div></a>
                            <a href="/services-notebooks-wire-hard"><div class="serv-sub-item">Wire Bound, Hard Cover</div></a>
                            <a href="/services-notebooks-perfect-soft"><div class="serv-sub-item">Perfect Bound, Soft Cover</div></a>
                            <a href="/services-notebooks-perfect-hard"><div class="serv-sub-item">Perfect Bound, Hard Cover</div></a>
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                        </div>
                    </div>
                <!-- </a> -->
            </div>
            <div class="col-md-6">
                <!-- <a href="/services-flyers-brochures"> -->
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-20.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Flyers / Brochures</b></h4>
                        </div>
                        <div class="serv-sub">
                            <a href="/services-flyers-1side"><div class="serv-sub-item">Flyers, 1-side</div></a>
                            <a href="/services-flyers-2side"><div class="serv-sub-item">Flyers, 2-side</div></a>
                            <a href="/services-brochures-bifold"><div class="serv-sub-item">Brochures, Bi-fold</div></a>
                            <a href="/services-brochures-trifold"><div class="serv-sub-item">Brochures, Tri-fold</div></a>
                            <a href="/services-brochures-quadfold"><div class="serv-sub-item">Brochures, Quad-fold</div></a>
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                        </div>
                    </div>
                <!-- </a> -->
            </div>
            
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- container -->

<!-- success modal -->
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Order</h4>
            </div>
            <div class="modal-body">
                
                <div class="center">
                    <i class="fa fa-check-circle" aria-hidden="true" style="color: #8BC34A; font-size: 120px;"></i>
                    <h2>Order Completed!</h2>
                </div>

                <div class="clear"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Continue</button>
                <!-- <button type="button" class="btn btn-primary">Confirm</button> -->
            </div>
        </div>
    </div>
</div>

@if(isset($_GET['check']))
<script type="text/javascript">
    $(document).ready(function () {
        $("#success-modal").modal("show")
    });
</script>
@endif

@stop