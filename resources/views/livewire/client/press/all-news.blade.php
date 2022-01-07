<div>
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9 pull-right flip sm-pull-none">
                    <div class="blog-posts">
                        @if($query)
                            <h3 class="text-center text-green-500">Results for {{$query}}</h3>
                        @endif
                        @if(count($news)< 1 )
                            <h4 class="text-center">{{__('msg.No news found !')}}</h4>
                        @endif
                        <div class="row">
                            @foreach($news as $n)
                            <div class="col-md-6">
                                <article class="post clearfix mb-30 bg-lighter">
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
                                                    <h4 class="entry-title text-white m-0 mt-5"><a href="#">

                                                        @switch(session('locale'))
                                                            @case('ta')
                                                                {{$n->ta_title}}
                                                            @break
                                                            @case('si')
                                                                {{$n->si_title}}
                                                            @break
                                                            @default
                                                                {{$n->title}}
                                                        @endswitch

                                                    </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-10 text-justify">
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
                <div class="col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">{{__('msg.Search box')}}</h5>
                            <div class="search-form">
                                <div class="input-group" wire:ignore>
                                    <input wire:model.lazy="query" type="text" placeholder="Click to Search"
                                        class="form-control search-input" >
                                    <span class="input-group-btn">
                                        <button type="submit" wire:click.prevent="searchQuery" class="btn search-button"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">{{__('msg.Categories')}}</h5>
                            <div class="categories">
                                <ul class="list list-border angle-double-right">
                                    @foreach($cat as $c)
                                    <li><a wire:click.prevent="searchCat({{$c->category_id}})" href="#">{{$c->name}} <span> ({{$c->count}})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget-title line-bottom">{{__('msg.Latest News')}}</h5>
                            <div class="latest-posts">
                                @foreach($latest_news as $n)
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="#" class="post-thumb"><img alt="" src="{{URL::asset('storage/photos/news/thumb_small/'.$n->image)}}"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="{{route('home.news_single', [$n->id,$n->title])}}">
                                            @switch(session('locale'))
                                            @case('ta')
                                                {{$n['ta_title']}}
                                            @break
                                            @case('si')
                                                {{$n['si_title']}}
                                            @break
                                            @default
                                                {{$n['title']}}
                                        @endswitch</a></h5>
                                        <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
