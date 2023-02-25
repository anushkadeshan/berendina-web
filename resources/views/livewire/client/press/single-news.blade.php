<div>
    
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9 pull-right flip sm-pull-none">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb"> <img src="{{URL::asset('storage/photos/news/featured/'.$news['image'])}}" alt=""
                                        class="img-responsive img-fullwidth"> </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                    <div
                                        class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                        <ul>
                                            <li class="font-16 text-white font-weight-600">
                                                @php
                                                $timestamp = strtotime($news['created_at']);
                                                    $day = date('d', $timestamp);
                                                @endphp
                                                {{$day}}
                                            </li>
                                            <li class="font-12 text-white text-uppercase">
                                                @php
                                                $timestamp = strtotime($news['created_at']);
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
                                                    {{$news['ta_title']}}
                                                @break
                                                @case('si')
                                                    {{$news['si_title']}}
                                                @break
                                                @default
                                                    {{$news['title']}}
                                            @endswitch</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-15">
                                    @switch(session('locale'))
                                        @case('ta')
                                            {!! $news['ta_description']  !!}
                                        @break
                                        @case('si')
                                            {!! $news['si_description'] !!}
                                        @break
                                        @default
                                            {!! $news['description'] !!}
                                    @endswitch
                                </p>
                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left mt-10 mr-20 text-theme-colored">Share:</h5>
                                    <ul class="social-icons icon-circled m-0">
                                    <li><a href="https://www.facebook.com/dialog/share?app_id=558575609356125&display=popup&href={{url()->full()}}&redirect_uri={{url()->full()}}" style="background-color: #3A5795"><i
                                                    class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="http://twitter.com/share?text=&url={{url()->full()}}&hashtags=berendina,bmic,bds" style="background-color: #55ACEE" data-bg-color="#55ACEE"><i
                                                    class="fa fa-twitter text-white"></i></a></li>
                                        <li ><a style="padding-top:-10px"><script type="IN/Share" data-url="{{url()->full()}}" data-counter="middle"></script></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">{{__('msg.Search box')}}</h5>
                            <div class="search-form">
                                <form>
                                    @csrf
                                    <div class="input-group">
                                        <input wire:model.lazy="query" type="text" placeholder="Click to Search"
                                            class="form-control search-input" >
                                        <span class="input-group-btn">
                                            <button wire:click.prevent="searchNews" type="submit" class="btn search-button"><i
                                                    class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
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
