@extends('template.main')

@section('title') Jimbes Printing @stop

@section('content') 

<div class="inner-pad"></div>

<!-- Page Content -->
<div class="container">
<form name="createOrder" action="{{ url('/create-order') }}" method="POST" enctype="multipart/form-data">
    <!-- Services -->
    <div class="row">
        <div class="col-md-3">
            @include('inc/services-nav')
        </div>
        <h3 class="serv-main-title col-md-offset-3">@yield('serv-name')</h3>
        <div class="col-md-9 serv-main-box">
            <div class="col-md-8 no-pad">

                @yield('serv-img')

                <!-- <a href="#" data-toggle="modal" data-target="#browse-modal">
                    <div class="col-xs-2 no-pad"><div class="serv-main-up browse">
                        <p><i class="fa fa-external-link" aria-hidden="true"></i> Browse<p>
                    </div></div>
                </a> -->

                @yield('browse-modal')

                <!-- <a href="#">
                    <div class="col-xs-2 no-pad"><div class="serv-main-up create">
                        <p><i class="fa fa-image" aria-hidden="true"></i> Create<p>
                    </div></div>
                </a> -->

                <!-- <a href="#" data-toggle="modal" data-target="#upload-modal">
                    <div class="col-xs-2 no-pad"><div class="serv-main-up upload">
                        <p><i class="fa fa-upload" aria-hidden="true"></i> Upload<p>
                    </div></div>
                </a> -->

                @yield('pricing')
        
            </div>

            <div class="col-md-4">
                <p class="list-head price">Options</p>
                <p><b>Design</b></p>
                
                    <fieldset id="design-option">
                        <label class="col-xs-12 col-sm-6"><input value="Browse" type="radio" id="btn-dbrowse" name="designType" value="" checked="true"> Browse</label>
                        <label class="col-xs-12 col-sm-6"><input value="Upload" type="radio" id="btn-dupload" name="designType" value=""> Upload</label>
                    </fieldset>
                
                <div class="clear"></div><hr>
                @yield('price-calculator')
            </div>

        </div>
    </div>
    <!-- /.row -->
</form>
</div>
<!-- container -->
@stop