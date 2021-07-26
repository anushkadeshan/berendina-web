<div>
    <section>
        <div class="container">
            <div class="section-content ">
                <div class="row equal-height-inner home-boxes gallery-isotope grid-4 gutter clearfix">
                    @foreach($figures as $figure)
                    <div
                        class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInTop animation-delay1 mt-12">
                        <div class="sm-height-auto bg-theme-colored">
                            <div class="p-30">
                                <div class="funfact">
                                    <i class="pe-7s-smile text-white mt-20 font-48 pull-left flip"></i>
                                    <div class="ml-60">
                                        <h2 class="animate-number text-white mt-0 font-48 line-bottom" data-value="{{$figure->amount}}"
                                            data-animation-duration="4000">0</h2>
                                        <div class="clearfix"></div>
                                        <h4 class="font-14 text-white">{{$figure->name}}</h4>
                                    </div>
                                </div>
                            </div>
                            <i class="flaticon-charity-shaking-hands-inside-a-heart bg-icon"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>