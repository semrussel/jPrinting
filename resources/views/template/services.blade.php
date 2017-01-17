@extends('template.main')

@section('title') Jimbes Printing @stop

@section('content') 

<div class="inner-pad"></div>

<!-- Page Content -->
<div class="container">

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

                <!-- UPLOAD MODAL -->
                <div class="modal fade" id="upload-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Upload</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-xs-6">
                                    <img src="img/pexels-photo-08.jpg" width="100%" style="border: 1px solid grey">
                                </div>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="Image Url" required>
                                    <br>
                                    <button type="button" class="btn btn-primary">Select File <i class="fa fa-upload" aria-hidden="true"></i></button>
                                </div>
                                <div class="clear"></div><br>
                                <div class="col-xs-12">
                                    <p>Please upload jpg, jpeg, gif, png, eps, ai, pdf, zip, tar, rar,cdr,psd images only</p>
                                    <p>File should not be larger than 50MB in size and Images should be at least 300dpi.</p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.UPLOAD MODAL -->

                @yield('pricing')
        
            </div>

            <div class="col-md-4">
                <p class="list-head price">Options</p>
                <p><b>Design</b></p>
                <form>
                    <fieldset id="design-option">
                        <label class="col-xs-12 col-sm-6"><input type="radio" id="btn-dbrowse" name="optradio" value="" checked="true"> Browse</label>
                        <label class="col-xs-12 col-sm-6"><input type="radio" id="btn-dupload" name="optradio" value=""> Upload</label>
                    </fieldset>
                </form>
                <div class="clear"></div><hr>
                @yield('price-calculator')
            </div>

        </div>
    </div>
    <!-- /.row -->

</div>
<!-- container -->
@stop