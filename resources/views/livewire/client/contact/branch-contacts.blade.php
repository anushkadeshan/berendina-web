<div class="mt-10">
    <style>
        .address-box {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
    <div class="section-title text-center m-0 p-0">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="title-icon">
                    <i class="pe-7s-world"></i>
                </div>
                <h3 class="text-uppercase mt-0">Branch Locations</h3>
            </div>
        </div>
    </div>
    <div class="row mt-10">
        <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30 text-center">BMIC Branches</h3>
            <div>
                <div class="row">
                    @foreach($bmicBranches as $bmic)
                    <div class="col-md-6 mb-20">
                        <h4 class="font-bold text-primary">{{$bmic->branch_name}}</h4>
                        <p>
                            {{$bmic->address}}
                        </p>
                        <p><i class="fa fa-phone text-success" ></i> Tel : {{$bmic->telephone}}</p>
                        <p><i class="fa fa-map text-primary" ></i><a href="https://www.google.com/maps/search/?api=1&query={{$bmic->lat}}%2C{{$bmic->lng}}"> Google Map Direction</a></p>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30 text-center">BDS Branches</h3>
            <div>

                @foreach($bdsBranches as $key => $bds)
                @php
                $moduler = $key % 2;
                @endphp
                <div class="col-md-6 mb-20">
                    <h4 class="font-bold text-primary">{{$bds->branch_name}}</h4>
                    <p>
                        {{$bds->address}}
                    </p>
                    <p><i class="fa fa-phone text-success" ></i> Tel : {{$bds->telephone}}</p>
                    <p><i class="fa fa-map text-primary" ></i><a href="https://www.google.com/maps/search/?api=1&query={{$bds->lat}}%2C{{$bds->lng}}"> Google Map Direction</a></p>

                </div>
                @if ($moduler == 1)
                <div class="clearfix"></div>
                @endif
                @endforeach

            </div>
        </div>
    </div>
</div>
