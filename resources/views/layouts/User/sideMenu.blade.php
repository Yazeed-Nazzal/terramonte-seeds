@php
$crops =  App\Models\Product::all();
@endphp
<div class="catagory-sidebar-area">
    <div class="catagory-sidebar-area-inner">
        <div class="catagory-sidebar all-catagory-option">
            <ul class="catagory-submenu">
                    @foreach($crops as $key => $crop)
                        <li><a
                                @switch($crop->type)
                                @case(1)
                                href="/products/{{$crop->id}}"
                                @case(2)
                                href="/branches/{{$crop->id}}"
                                @case(3)
                                href="/branches/{{$crop->id}}"
                                @endswitch
                                role="button" >{{$crop->name}}</a>
                            <ul class="catagory-submenu collapse " id="catagory-widget1">
                                <li><a href="{{url('sub-product')}}">Cherry Tomato</a></li>
                            </ul>
                        </li>
                    @endforeach
            </ul>
        </div>
    </div>
</div>
