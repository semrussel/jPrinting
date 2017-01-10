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
                <a href="/services-calendars">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-01.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Calendars</b></h4>
                        </div>
                    </div>
                </a>
                <a href="/services-stickers">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-02.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Sticker & Labels</b></h4>
                        </div>
                    </div>
                </a>
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
                <a href="/services-newsletters">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-04.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>News Letters</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="/services-books">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-05.jpeg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Books</b></h4>
                        </div>
                    </div>
                </a>
                <a href="/services-yearbooks">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-06.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Yearbooks</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="/services-business-cards">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-07.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Business Cards</b></h4>
                        </div>
                    </div>
                </a>
                <a href="/services-gift-wrappers">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-08.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Gift Wrappers</b></h4>
                        </div>
                    </div>
                </a>
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
                <a href="/services-paper-bags">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-10.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Paper Bags</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
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
            </div>

            <div class="col-md-6">
                <a href="/services-tickets">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-13.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Tickets</b></h4>
                        </div>
                    </div>
                </a>
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
                <a href="/services-boxes">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-17.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Boxes</b></h4>
                        </div>
                    </div>
                </a>
                <a href="/services-receipts">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-18.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Receipts</b></h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="/services-notebooks">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-19.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Notebooks</b></h4>
                        </div>
                    </div>
                </a>
                <a href="/services-flyers-brochures">
                    <div class="serv-box-sm">
                        <div class="serv-img" style="background: url('img/serv-20.jpg'); background-size: cover; background-position: center center;"></div>
                        <div class="serv-heading">
                            <h4><b>Flyers / Brochures</b></h4>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- container -->

@stop