<div>

    <section>
        <div class="container-fluid">
            <div class="section-title">

            </div>
            <div class="row multi-row-clearfix">
                <div class="blog-posts">
                    @foreach($press_releases as $n)
                    <a class="hover-link" data-lightbox="image" href="{{URL::asset('storage/photos/press-releases/featured/'.$n->photo)}}">
                        <div class="col-md-4">
                            <article class="post clearfix mb-30 bg-lighter">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <img src="{{URL::asset('storage/photos/press-releases/thumb/'.$n->photo)}}" alt="" class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content p-20 pr-10">
                                    <div class="entry-meta media mt-0 no-bg no-border">

                                        <div class="media-body">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white m-0 mt-5"><a href="#">

                                                    @switch(session('locale'))
                                                        @case('ta')
                                                            {{$n->ta_title}}
                                                        @break
                                                        @case('si')
                                                            {{$n->sn_title}}
                                                        @break
                                                        @default
                                                            {{$n->title}}
                                                    @endswitch

                                                </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>
            @if(count($press_releases)>3)
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
