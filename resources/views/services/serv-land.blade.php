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
            
            <?php $main = DB::table('main_prod')->get(); ?>
    
            @foreach($main as $m)
                @if($m->is_subcat == 0)
                    <div class="col-md-6">
                        <?php $url = url('/services/main/'.$m->id); ?>
                        <a href="{{ $url }}">
                            <div class="serv-box-sm">

                                <div class="serv-img" @if($m->logo != NULL) style="background: url('{{ url($m->logo) }}'); background-size: cover; background-position: center center;" @endif></div>
                                <div class="serv-heading">
                                    <h4><b>{{ $m->name }}</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @else
                    <?php $sub = DB::table('sub_prod')->where('main_id',$m->id)->get(); ?>
                    <div class="col-md-6">
                        <!-- <a href="/services-calendars"> -->
                            <div class="serv-box-sm">
                                <div class="serv-img" style="background: url('{{ $m->logo }}'); background-size: cover; background-position: center center;"></div>
                                <div class="serv-heading">
                                    <h4><b>{{ $m->name }}</b></h4>
                                </div>
                                <div class="serv-sub">
                                @foreach($sub as $s)
                                    <?php $url = url('/services/sub/'.$s->id); ?>
                                    <a href="{{ $url }}"><div class="serv-sub-item">{{ $s->name }}</div></a>
                                @endforeach
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                </div>
                            </div>
                    </div>
                @endif
            @endforeach
           
            

            
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