<div class="list-group">
    <a href="/services" class="list-group-item list-head">OUR SERVICES</a>
    
    <?php $main = DB::table('main_prod')->get(); ?>
    
    @for($i=0;$i<count($main);$i++)
        @if($main[$i]->is_subcat == 0)
            <?php $url = url('/services/main/'.$main[$i]->id); ?>
            <a href="{{ $url }}" class="list-group-item"><b>{{ $main[$i]->name }}</b></a>
        @else
            <?php $sub = DB::table('sub_prod')->where('main_id',$main[$i]->id)->get(); ?>
             <a class="list-group-item" data-remote="true" href="#sub-2" id="cat-2" data-toggle="collapse" data-parent="#sub-2">
                <span><b>{{ $main[$i]->name }}</b></span>
                <span class="badge"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </a>
            <div class="collapse list-group-submenu" id="sub-2">
            @for($j=0;$j<count($sub);$j++)
                <?php $url = url('/services/sub/'.$sub[$i]->id); ?>
                <a href="{{ $url }}" class="list-group-item sub-item">{{ $sub[$j]->name }}</a>
            @endfor
            </div>
        @endif
    @endfor

</div>

<p class="list-group-item list-head">CONTACT US</p>

<p class="list-group-item">
    <b>Business Hours</b><br>
    8:00AM - 8:15PM
</p>
<p class="list-group-item">
    <b>Main Address</b><br>
    301 Quirino Highway, Brgy. Baesa, Quezon City, Philippines
</p>
<p class="list-group-item">
    <b>Contact Number</b><br>
    0932 547 1020
</p>