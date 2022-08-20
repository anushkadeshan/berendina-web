<div>
    <!-- Section: blog -->
    <section id="blog">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mt-0 text-uppercase font-28"> {{__('msg.Latest')}} <span
                                class="text-theme-colored font-weight-400">{{__('msg.News')}}</span> <span
                                class="font-30 text-theme-colored">.</span></h2>
                        <div class="icon">
                            <i class="fa fa-file-text-o"></i>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach($news as $n)
                    <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay="0.3s">
                        <article class="post clearfix mb-sm-30 bg-lighter">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="{{URL::asset('storage/photos/news/thumb_medium/'.$n->image)}}" alt="" class="img-responsive img-fullwidth">
                                </div>
                            </div>
                            <div class="entry-content p-20 pr-10">
                                <div class="entry-meta media mt-0 no-bg no-border">
                                    <div
                                        class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                        <ul>
                                            <li class="font-16 text-white font-weight-600">
                                                @php
                                                $timestamp = strtotime($n->created_at);
                                                    $day = date('d', $timestamp);
                                                @endphp
                                                {{$day}}
                                            </li>
                                            <li class="font-12 text-white text-uppercase">
                                                @php
                                                $timestamp = strtotime($n->created_at);
                                                    $m = date('m', $timestamp);
                                                    $monthName = date('M', mktime(0, 0, 0, $m, 10));
                                                @endphp
                                                {{$monthName}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">
                                                @switch(session('locale'))
                                                    @case('ta')
                                                        {{ Str::limit($n->ta_title, 40) }}
                                                    @break
                                                    @case('si')
                                                        {{ Str::limit($n->si_title, 40) }}
                                                    @break
                                                    @default
                                                        {{ Str::limit($n->title, 40) }}
                                                @endswitch
                                            </a></h4>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-10">
                                    @switch(session('locale'))
                                        @case('ta')
                                            @php
                                                $text = strip_tags($n->ta_description);
                                                $text2 = str_replace('&nbsp;', ' ', $text);
                                            @endphp
                                            {{ Str::limit($text2, 250) }}
                                        @break
                                        @case('si')
                                            @php
                                                $text = strip_tags($n->si_description);
                                                $text2 = str_replace('&nbsp;', ' ', $text);
                                            @endphp
                                            {{ Str::limit($text2, 250) }}
                                        @break
                                        @default
                                            @php
                                                $text = strip_tags($n->description);
                                                $text2 = str_replace('&nbsp;', ' ', $text);
                                            @endphp
                                            {{ Str::limit($text2, 250) }}
                                    @endswitch
                                </p>
                                <a href="{{route('home.news_single', [$n->id,$n->title])}}" class="btn-read-more">Read more</a>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
