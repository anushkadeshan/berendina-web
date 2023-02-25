<div>

    <section>
        <div class="container-fluid">
            <div class="section-title">

            </div>
            <div class="row multi-row-clearfix">
                <div class="blog-posts">
                    @foreach($cases as $n)
                    <div class="col-md-4">
                        <article class="post clearfix mb-30 bg-lighter">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="{{URL::asset('storage/photos/bds/thumb_medium/'.$n->image)}}" alt="" class="img-responsive img-fullwidth">
                                </div>
                            </div>
                            <div class="entry-content p-20 pr-10">
                                <div class="entry-meta media mt-0 no-bg no-border">

                                    <div class="media-body">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white m-0 mt-5"><a href="{{url('bmic-case-single?title='.$n->title.'&id='.$n->id)}}">

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
                                <a href="{{url('bmic-case-single?title='.$n->title.'&id='.$n->id)}}" class="btn-read-more">Read more</a>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                    @endforeach

                </div>

            </div>
            @if(count($cases)>=3)
            <div class="text-center">
                <a class="btn btn-border btn-theme-colored btn-flat btn-lg" wire:click.prevent="readmore">
                    <span wire:loading.remove wire:target="readmore">
                        {{__('Read More')}}
                    </span>
                    <span wire:loading wire:target="readmore">
                        {{__('Loading')}}
                    </span>
                </a>
            </div>
            @endif
        </div>
    </section>
</div>
