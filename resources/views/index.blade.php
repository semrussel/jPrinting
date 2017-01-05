@extends('template.main')

@section('title') Jimbes Printing @stop

@section('content') 
    <!-- Header -->
    <div id="scroll-header" class="bg-header">
        <div id="jb-header" class="container">
            <p class="header-title"><b>JIMBES</b> PRINTING</p>
            <p class="header-sub">Simply the Best</p>
        </div>
        <!-- <div id="header-overlay"></div> -->
    </div>

    <a id="scroller-services" href="#scroll-services"><div class="down-butt"><i class="fa fa-arrow-down" aria-hidden="true"></i></div></a>

    <!-- Page Content -->
    <div class="container">

        <!-- Services -->
        <div id="scroll-services" class="row">
            <div class="col-md-4">
                <div class="content-title-box">
                    <p class="content-title">Our <b>SERVICES</b></p>
                </div>
            </div>
            <a href="/services-tshirt">
                <div class="col-md-4">
                    <div class="serv-box">
                        <div class="serv-img">
                            <img src="img/pexels-photo-02.jpeg" width="100%">
                        </div>
                        <div class="serv-heading">
                            <h4><b>Acrylic & Panaflex Signages</b></h4>
                        </div>
                        <div class="serv-body">
                            <p>Build-up letters lighted/ non-lighted indoor/ outdoor</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/services-tshirt">
                <div class="col-md-4">
                    <div class="serv-box">
                        <div class="serv-img">
                            <img src="img/pexels-photo-03.jpg" width="100%">
                        </div>
                        <div class="serv-heading">
                            <h4><b>T-Shirt & Silkscreen Printing</b></h4>
                        </div>
                        <div class="serv-body">
                            <p>High quality rubberized silkscreen printing</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/services-tshirt">
                <div class="col-md-4">
                    <div class="serv-box">
                        <div class="serv-img">
                            <img src="img/pexels-photo-04.jpg" width="100%">
                        </div>
                        <div class="serv-heading">
                            <h4><b>Digital Offset Printing</b></h4>
                        </div>
                        <div class="serv-body">
                            <p>Suitable for short run prints like business cards, flyers, label stickers and magazines. Low minimum order requirement.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/services-tshirt">
                <div class="col-md-4">
                    <div class="serv-box">
                        <div class="serv-img">
                            <img src="img/pexels-photo-05.jpeg" width="100%">
                        </div>
                        <div class="serv-heading">
                            <h4><b>Offset Printing</b></h4>
                        </div>
                        <div class="serv-body">
                            <p>WE PRINT EVERYTHING ON PAPER (for volume orders) Flyers, brochures, labels/stickers, calendars, packaging boxes, souvenir program/ magazines</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/services-tshirt">
                <div class="col-md-4">
                    <div class="serv-box">
                        <div class="serv-img">
                            <img src="img/pexels-photo-06.jpeg" width="100%">
                        </div>
                        <div class="serv-heading">
                            <h4><b>Largeformat Printing</b></h4>
                        </div>
                        <div class="serv-body">
                            <p>Tarpaulin + stickers + sintraboard + wall/glass mural + frosted stickers + life-size standees</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- /.row -->

        <div id="scroll-clients" class="row">
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header">Our Clients</h2>
            </div>
            <div class="col-lg-12">
                <div class="col-sm-2 col-xs-4 client">
                    <img src="img/logo-bsm.png">
                </div>
                <div class="col-sm-2 col-xs-4 client">
                    <img src="img/logo-bananaleaf.png">
                </div>
                <div class="col-sm-2 col-xs-4 client">
                    <img src="img/logo-mazda.png">
                </div>
                <div class="col-sm-2 col-xs-4 client">
                    <img src="img/logo-toyota.png">
                </div>
                <div class="col-sm-2 col-xs-4 client">
                    <img src="img/logo-petron.png">
                </div>
                <div class="col-sm-2 col-xs-4 client">
                    <img src="img/logo-magicmelt.png">
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div id="scroll-about" class="row">
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header">About Jimbes Printing</h2>
            </div>
            <div class="col-md-6">
                <p>Jimbes Printing was founded to provide high quality and cost-effective printing services. Our team has created numerous superior printing needs for both multinational and local companies for more than nine years now. These include printing of annual reports, books, calendars, brochures, newsletters, magazines, flyers, corporate folders, manuals, paper placemats, greeting cards and invitations, souvenir programs, stickers, posters, tags, tickets, business cards, receipts, letterhead, paper bags and the like.</p>
                <p>As a company our commitment has always been to provide excellent service and utmost satisfaction to our clients. Our commitment to quality is matched by our commitment to fast turnaround and competitive pricing. Hence, the superior quality and great service has earned us many satisfied repeat clients.</p>
                <p>Creativity is our Passion. We seek your satisfaction. Your meticulous taste is our motivation. We print beyond your imagination.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/pexels-photo-07.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@stop