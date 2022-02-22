<div>
    <section>
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mt-0 text-uppercase font-28">{{__('msg.Berendina in the')}}  <span
                                class="text-theme-colored font-weight-400">{{__('msg.Media')}}</span> <span
                                class="font-30 text-theme-colored">.</span></h2>
                        <div class="icon">
                            <i class="fa fa-tv"></i>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix">
                <div class="blog-posts">
                    @foreach($media as $n)
                    <a class="hover-link" data-lightbox="image" href="{{URL::asset('storage/photos/media/featured/'.$n->image)}}">
                    <div class="col-md-4">
                        <article class="post clearfix mb-30 bg-lighter">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="{{URL::asset('storage/photos/media/thumb_medium/'.$n->image)}}" alt="" class="img-responsive img-fullwidth">
                                </div>
                            </div>
                            <div class="">
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
                                <div class="clearfix"></div>
                            </div>

                        </article>
                    </div>
                    </a>
                    @endforeach
                </div>

            </div>
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
        </div>
    </section>
</div>
