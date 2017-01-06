@extends('template.main')

@section('title') Jimbes Printing @stop

@section('content') 
    <!-- Header -->
    <!-- <div id="scroll-header" class="bg-header">
        <div id="jb-header" class="container">
            <p class="header-title"><b>JIMBES</b> PRINTING</p>
            <p class="header-sub">Simply the Best</p>
        </div>
    </div> -->

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div id="scroll-header" class="bg-header">
                    <div id="jb-header" class="container">
                        <p class="header-title-top"><b>JIM</b>ING</p>
                        <p class="header-title-bot"><b>BES</b>PRINT</p>
                        <p class="header-sub">SIMPLY THE <b>BEST</b></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <a id="scroller-content" href="#scroll-content"><div class="down-butt"><i class="fa fa-arrow-down" aria-hidden="true"></i></div></a>

    <!-- Page Content -->
    <div class="container">

        <!-- Services -->
        <div id="scroll-content" class="row">
            <div class="col-md-4">
                <div class="content-title-box">
                    <p class="content-title">Our <b>SERVICES</b></p>
                </div>
            </div>

            <div class="col-md-4">
                <a href="/services-tshirt">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-01.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><i class="fa fa-calendar" aria-hidden="true"></i><br><b>Calendars</b></h4>
                        </div>
                    </div>
                </a>
                <a href="/services-tshirt">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-02.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Sticker & Labels</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <a href="/services-tshirt">
                <div class="col-md-4">
                    <div class="serv-box">
                        <div class="serv-img" style="background: url('img/serv-03.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><i class="fa fa-male" aria-hidden="true"></i><b>T-shirt Printing</b><i class="fa fa-female" aria-hidden="true"></i></h4>
                        </div>
                    </div>
                </div>
            </a>

            <div class="col-md-4">
                <a href="/services-tshirt">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-04.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>News Letters</b></h4>
                        </div>
                    </div>
                </a>
                <a href="/services-tshirt">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-05.jpeg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><i class="fa fa-book" aria-hidden="true"></i><br><b>Books</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <a href="/services-tshirt">
                <div class="col-md-4">
                    <div class="serv-box">
                        <div class="serv-img" style="background: url('img/serv-06.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><i class="fa fa-group" aria-hidden="true"></i><b>Yearbooks</b><i class="fa fa-mortar-board" aria-hidden="true"></i></h4>
                        </div>
                    </div>
                </div>
            </a>

            <div class="col-md-4">
                <a href="/services-tshirt">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-07.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Business Cards</b></h4>
                        </div>
                    </div>
                </a>
                <a href="/services-tshirt">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-08.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Gift Wrappers</b></h4>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
        <!-- /.row -->

        <div id="scroll-clients" class="row">
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header">Our Clients</h2>
            </div>
            <!-- <div class="col-sm-2 col-xs-4 client">
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
            </div> -->

            <div class="col-md-3 col-sm-6">
                <div class="client-box">
                    <p class="client-head">Maritime Agencies</p>
                    <ul>
                        <li>Bernhard Schulte Shipmanagement, Inc.</li>
                        <li>PB Maritime Personnel, Inc.</li>
                        <li>Crossworld Marine Services, Inc.</li>
                        <li>Maine Marine Philippines, Inc.</li>
                        <li>Rickmers Marine Agency Philippines</li>
                        <li>Hammer Maritime, Inc.</li>
                        <li>SOLPIA Marine, Inc.</li>
                        <li>Sharpesea Personnel, Inc.</li>
                        <li>Philippine Standard Shipmanagement, Inc.</li>
                        <li>EZ Maritime Services</li>
                        <li>Great Seas Maritime</li>
                        <li>Cardiff Crewing Filipinas, Inc.</li>
                        <li>SAV Shipmanagement & Marine Services, Inc.</li>
                        <li>SSM Maritime Services, Inc.</li>
                    </ul>
                </div>
                <div class="client-box">
                    <p class="client-head">Maritime Training Centers and Organizations</p>
                    <ul>
                        <li>Meridian International Maritime Training Center</li>
                        <li>Seatech Maritime Training Center</li>
                        <li>New Simulator Center of the Philippines, Inc.</li>
                        <li>Protect Marine Deck and Engine Officers of the Philippines, Inc.</li>
                        <li>Institute of Electronics Engineers of the Philippines, Inc.</li>
                        <li>Experts ECE Review Center</li>
                        <li>Masters and Mates Association of the Philippines, Inc.</li>
                        <li>Seaman’s Christian Friend Society</li>
                        <li>Shore Access</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="client-box">
                    <p class="client-head">Restaurants and Food-related Businesses</p>
                    <ul>
                        <li>Banana Leaf</li>
                        <li>Zensho</li>
                        <li>Clawdaddy</li>
                        <li>Crustasia</li>
                        <li>Blackbeards Seafood Island</li>
                        <li>Kirin</li>
                        <li>Qoola</li>
                        <li>PHO24 The Red Crab</li>
                        <li>Happy Haus Food Corporation</li>
                        <li>Aling Dading’s Bibingka</li>
                        <li>A Gantea</li>
                        <li>Lamesa Grill</li>
                        <li>Chicken Deli</li>
                        <li>Miyagi</li>
                        <li>Leonida’s</li>
                        <li>Mesa Filipino Moderne</li>
                        <li>Chops Steakhouse</li>
                        <li>Papa John’s Pizza</li>
                    </ul>
                </div>
                <div class="client-box">
                    <p class="client-head">Petroleum Companies</p>
                    <ul>
                        <li>Pilipinas Shell Petroleum Corporation</li>
                    </ul>
                </div>
                <div class="client-box">
                    <p class="client-head">Food Supplement and Drugs</p>
                    <ul>
                        <li>Noble Life Inc.</li>
                        <li>D’ Rheeckko, Inc.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="client-box">
                    <p class="client-head">Publications</p>
                    <ul>
                        <li>Harborscope</li>
                        <li>Marino World</li>
                        <li>Navigator</li>
                        <li>Network 101</li>
                        <li>Galing Balangueno</li>
                    </ul>
                </div>
                <div class="client-box">
                    <p class="client-head">Manufacturing Companies</p>
                    <ul>
                        <li>Newey Industries Corp.</li>
                        <li>Uni-Dravo Group of Companies</li>
                        <li>Bio-Pharma Industry Corporation</li>
                        <li>Pro-Vision Systems and Business Solutions, Inc.</li>
                        <li>Qualite Marketing, Inc.</li>
                        <li>TOYOTA Balintawak and North EDSA</li>
                    </ul>
                </div>
                <div class="client-box">
                    <p class="client-head">Schools</p>
                    <ul>
                        <li>Ultima Entrepinoy Forum Center of the Philippines</li>
                        <li>Immanuel Hope Christian Academy</li>
                        <li>L.R. Pascual Baesa Elementary School</li>
                        <li>Bonifacio Memorial Elementary School</li>
                        <li>SKILLS Gifted Children’s School International</li>
                        <li>ABC Learning Center</li>
                        <li>College of St. Catherine Quezon City</li>
                        <li>ABC Learning Center</li>
                        <li>Mt. Sinai Learning Center</li>
                        <li>Smile Learning Instititute</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="client-box">
                    <p class="client-head">Cooperatives</p>
                    <ul>
                        <li>United Christian Multi-Purpose Cooperative</li>
                        <li>Welcome Rotonda UDMC Employees Development Cooperative</li>
                        <li>Bagbag Multi-Purpose Cooperative</li>
                        <li>Stardolls</li>
                        <li>Dr. Jose N. Rodriguez Development Cooperative</li>
                        <li>Regional Cooperative Development Council (National Capital Region)</li>
                    </ul>
                </div>
                <div class="client-box">
                    <p class="client-head">Churches</p>
                    <ul>
                        <li>Immaculate Concepcion Parish Church</li>
                        <li>Our Lady of Annunciation Parish Church</li>
                    </ul>
                </div>
                <div class="client-box">
                    <p class="client-head">Others</p>
                    <ul>
                        <li>Freezing Point Corporation</li>
                        <li>The Wonderlube</li>
                        <li>Powerking Energy Management Systems, Inc.</li>
                        <li>Lake Construction Supply</li>
                        <li>Alfox</li>
                        <li>Ever Clean</li>
                        <li>Genesis Care @ Home</li>
                        <li>Gables and Porch Lights</li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.row --> 

        <!-- Features Section -->
        <div id="scroll-about" class="row">
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header">Our Company</h2>
            </div>
            <div class="col-md-6">
                <p>Jimbes Printing was founded to provide high quality and cost-effective printing services. Our team has created numerous superior printing needs for both multinational and local companies for more than nine years now. These include printing of annual reports, books, calendars, brochures, newsletters, magazines, flyers, corporate folders, manuals, paper placemats, greeting cards and invitations, souvenir programs, stickers, posters, tags, tickets, business cards, receipts, letterhead, paper bags and the like.</p>
                <p>As a company our commitment has always been to provide excellent service and utmost satisfaction to our clients. Our commitment to quality is matched by our commitment to fast turnaround and competitive pricing. Hence, the superior quality and great service has earned us many satisfied repeat clients.</p>
                <p>Creativity is our Passion. We seek your satisfaction. Your meticulous taste is our motivation. We print beyond your imagination.</p>

                <div class="clear"></div><br>
                <p class="list-head price" style="background-color: grey; margin: 0;">Plant Equipments</p>
                <table class="tg">
                    <tr>
                        <th class="tg-yw4l">Equipment</th>
                        <th class="tg-yw4l">Brand</th>
                        <th class="tg-yw4l">Model</th>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Offset Printing Machine</td>
                        <td class="tg-yw4l"> Heidelberg - 2 Colors</td>
                        <td class="tg-yw4l"> SORZ (24x32.25")</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Offset Printing Machine</td>
                        <td class="tg-yw4l"> Heidelberg</td>
                        <td class="tg-yw4l"> Kors (20x28")</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Offset Printing Machine</td>
                        <td class="tg-yw4l"> Heidelberg</td>
                        <td class="tg-yw4l"> Kord 64 (18x25")</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Offset Printing Machine</td>
                        <td class="tg-yw4l"> Komori</td>
                        <td class="tg-yw4l"> Uni Komori (19x28")</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Offset Printing Machine</td>
                        <td class="tg-yw4l"> Aurelia - 2 Colors</td>
                        <td class="tg-yw4l"> Aurelia 248</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Offset Printing Machine w/ Numbering and Perforation</td>
                        <td class="tg-yw4l"> Hamada Press</td>
                        <td class="tg-yw4l"> E47 (3005) 14x18"</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> UV Laminating Machine</td>
                        <td class="tg-yw4l"> Fuji Express</td>
                        <td class="tg-yw4l"> 26"</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Plastic Laminating Machine</td>
                        <td class="tg-yw4l"> Fuji Express</td>
                        <td class="tg-yw4l"> 30.7"</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Die Cutting Machine</td>
                        <td class="tg-yw4l"> Itoh</td>
                        <td class="tg-yw4l"> 36x26"</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Digital Printing Machine</td>
                        <td class="tg-yw4l"> Fuji Xerox</td>
                        <td class="tg-yw4l"> DocuCentre-VC5580</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Plate Making Machine</td>
                        <td class="tg-yw4l"> Agfa</td>
                        <td class="tg-yw4l"> L1250</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Numbering Machine</td>
                        <td class="tg-yw4l"> Minerva</td>
                        <td class="tg-yw4l"> Minerva 12x18"</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Cutter</td>
                        <td class="tg-yw4l"> Como</td>
                        <td class="tg-yw4l"> 44"</td>
                    </tr>
                    <tr>
                        <td class="tg-yw4l"> Cutter</td>
                        <td class="tg-yw4l"> Polar</td>
                        <td class="tg-yw4l"> 31.5"</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/pexels-photo-07.jpg" alt="">
                <!-- <br>
                <img class="img-responsive" src="img/pexels-photo-09.jpeg" alt=""> -->
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@stop