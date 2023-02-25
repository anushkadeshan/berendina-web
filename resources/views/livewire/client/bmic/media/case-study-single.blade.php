<div>
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>

    <section>
        <div class="container-fluid mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-12 sm-pull-none">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb"> <img src="{{URL::asset('storage/photos/bds/featured/'.$case_study['image'])}}" alt=""
                                        class="img-responsive img-fullwidth"> </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                    <div
                                        class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                        <ul>
                                            <li class="font-16 text-white font-weight-600">
                                                @php
                                                $timestamp = strtotime($case_study['created_at']);
                                                    $day = date('d', $timestamp);
                                                @endphp
                                                {{$day}}
                                            </li>
                                            <li class="font-12 text-white text-uppercase">
                                                @php
                                                $timestamp = strtotime($case_study['created_at']);
                                                    $m = date('m', $timestamp);
                                                    $monthName = date('M', mktime(0, 0, 0, $m, 10));
                                                @endphp
                                                {{$monthName}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white text-uppercase m-0"><a href="#">
                                            @switch(session('locale'))
                                                @case('ta')
                                                    {{$case_study['ta_title']}}
                                                @break
                                                @case('si')
                                                    {{$case_study['si_title']}}
                                                @break
                                                @default
                                                    {{$case_study['title']}}
                                            @endswitch</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-15">
                                    @switch(session('locale'))
                                        @case('ta')
                                            {!! $case_study['ta_description']  !!}
                                        @break
                                        @case('si')
                                            {!! $case_study['si_description'] !!}
                                        @break
                                        @default
                                            {!! $case_study['description'] !!}
                                    @endswitch
                                </p>
                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left mt-10 mr-20 text-theme-colored">Share:</h5>
                                    <ul class="social-icons icon-circled m-0">
                                        <li><a href="https://www.facebook.com/dialog/share?app_id=558575609356125&display=popup&href={{url()->full()}}&redirect_uri={{url()->full()}}" style="background-color: #3A5795"><i
                                                    class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="http://twitter.com/share?text=&url={{url()->full()}}&hashtags=berendina,bmic" style="background-color: #55ACEE" data-bg-color="#55ACEE"><i
                                                    class="fa fa-twitter text-white"></i></a></li>
                                        <li ><a style="padding-top:-10px"><script type="IN/Share" data-url="{{url()->full()}}" data-counter="middle"></script></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
