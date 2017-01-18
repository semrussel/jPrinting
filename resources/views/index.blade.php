@extends('template.main')

@section('title') Jimbes Printing @stop

@section('content') 
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

        <!-- SERVICES -->
        <div id="scroll-content" class="row">
            <div class="col-md-4">
                <div class="content-title-box">
                    <p class="content-title">Our <b>SERVICES</b></p>
                </div>
            </div>

            <div class="col-md-4">
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

            <a href="/services-invitations">
                <div class="col-md-4">
                    <div class="serv-box">
                        <div class="serv-img" style="background: url('img/serv-03.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Invitations</b></h4>
                        </div>
                    </div>
                </div>
            </a>

            <div class="col-md-4">
                <!-- <a href="/services-newsletters"> -->
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
                <a href="/services-books">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-05.jpeg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Books</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <a href="/services-posters">
                <div class="col-md-4">
                    <div class="serv-box">
                        <div class="serv-img" style="background: url('img/serv-14.png'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Posters</b></h4>
                        </div>
                    </div>
                </div>
            </a>

            <div class="col-md-4">
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
                <a href="/services-office-forms">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-15.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Office Forms</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <a href="/services"><div class="col-xs-12 view-all">
                View All Services <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            </div></a>
            
        </div><!-- /.row -->

    </div><!-- /.container -->

    <!-- MISSION VISION -->
    <div id="scroll-mv" class="row">

        <div class="col-md-6 mv mi">
            <h1>Our<br><b>MISSION</b></h1>
            <p><b>Jimbes Printing is committed to providing excellent service and total satisfaction to every customer by giving them the highest level of quality printing at a cost effective rate and on-time delivery commitment.</b></p>
            <p>It is also the humble objective of Jimbes Printing to provide job opportunities and trainings to qualified enthusiasts by giving them actual trainings on the operations of printing machinery. Trainees are being handled properly by seasoned production managers and highly-experienced operators.</p>
            <p>In our modest capacity, it is has been our mission to help reduce the unemployment rate of our country and contribute to the growth of our economy by creating productive skilled citizens.</p>
        </div>

        <div class="col-md-6 mv vi">
            <h1>Our<br><b>VISION</b></h1>
            <p><b>Jimbes Printing envisions itself to become the printer of choice if not the best alternative service bureau of all companies and corporations of various industries.</b></p>
            <p>From our humble beginning, we see ourselves as the commercial printer that shows compassion and concern to every client as we treat each of them as business partners – we support them by giving cost effective and quality services.</p>
            <p>We seek long term business partnership. For this reason, we create, innovate, and maintain a channel of improvement to further and sustain enhancement of our products and services. We aim to be recognized in the printing industry and immerse ourselves successfully not only in the local market but in the global arena as well.</p>
        </div>

    </div><!-- /.row -->    

    <div class="container">

        <!-- ABOUT -->
        <div id="scroll-about" class="row">
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header">Our Company</h2>
            </div>
            <div class="col-md-6">
                <p>Jimbes Printing is a commercial printer that offers quality and cost-effective printing services to companies that value every cost of production without compromise to quality and time element.</p>

                <p>Registered at the Department of Trade and Industry dated February 21, 2007 valid until February 21, 2012 with certificate no. 00062760, Jimbes Printing is a legitimate business establishment that provides excellent service, peace of mind, and full satisfaction to every clientele.</p>

                <p>Licensed to operate by the City Mayor of Caloocan with permit no. 07-018673 issued on March 12, 2007, Jimbes printing is an honest taxpayer with registration and permit no. OCN 4RC000312608 issued by the Bureau of Internal Revenue on March 22, 2007.</p>

                <p>It is the noble intention of Jimbes Printing to be the best alternative service bureau of practical companies, which are very particular with production cost, quality, and excellence – a constructive challenge that brings out the best in our staff from the management down to our tank and files.</p>

                <p>Jimbes Printing is presently enjoying positive feedbacks from clientele of various industries and it gives utmost attribution and credit to its quality control, production managers, and operators, among other plant crew for their voluntary concern to every customers. All our staff gives every customer a good run for their money and trust for each and every one of them is committed to excellence.</p>
                
                <p>Moreover, Jimbes Printing is always happy to serve the meticulous taste of its clientele to promote long term business partnership and warrants their utmost satisfaction.</p>

                <p>Creativity is our Passion. We seek your satisfaction. Your meticulous taste is our motivation. We print beyond your imagination.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/pexels-photo-07.jpg" alt="">
                <h3>Corporate Virtues</h3>
                <p>We Believe that in striving for <b>EXCELLENCE</b>, it must be seasoned with <b>HONESTY</b>, <b>POSITIVE ATTITUDE</b>, <b>LOVE FOR WORK</b>, <b>PUNCTUALITY</b>, and <b>COMMITMENT</b> in order to meet the meticulous taste of every clientele. We believe that these are the ingredients to success.</p>
            </div>

        </div><!-- /.row -->

        <!-- CLIENTS -->
        <div id="scroll-clients" class="row">
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header">Our Clients</h2>
            </div>

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

        </div><!-- /.row --> 

        <!-- PLANTS? -->
        <div id="scroll-about" class="row">
            <div class="col-lg-12">
                <div class="page-header-border"></div>
                <h2 class="page-header">Plant Equipments</h2>
            </div>
            <div class="col-md-6">
                <!-- <p class="list-head price" style="background-color: grey; margin: 0;">Plant Equipments</p> -->
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
                <h3>Quality Services</h3>
                <p>Jimbes Printing is capable of printing high quality brochures, corporate folders, books, instruction manuals, greeting cards and invitations, souvenir programs, flyers, stickers, leaflets, catalogues, posters, post cards, tags, tickets, business cards, receipts, letterhead and other office forms. We print newspaper, magazine, and corporate newsletters. We also offer services on fabrication of paper bags, boxes and the like.</p>
                <h3>Suppliers</h3>
                <p>Star Paper Corporation, EMBU Integrated & Trading Corporation, NAPPCO, ADAO, PAPPCO, Polyprogress Business Corporation, Prestige Paper Products, Emerald, Grafika, Diamond Printers Supply, ScanXpress Digital Systems Enterprises, Laser Scanner Center, Inc., CGI Design And Enterprise, and PLP Graphics And Designs.</p>
                <h3>Affiliates</h3>
                <ul>
                    <li>FDB Printing</li>
                    <li>Andy and Vita Printing Enterprises</li>
                </ul>
            </div>

        </div><!-- /.row -->

    </div><!-- /.container -->
@stop