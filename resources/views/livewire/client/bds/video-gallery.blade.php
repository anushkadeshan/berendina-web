<div class="container-fluid">
    <div class="row multi-row-clearfix">
        <div class="blog-posts">
            @foreach($videos as $v)
            <div class="col-md-6">
                <article class="post clearfix mb-30 bg-lighter">
                    <div class="entry-header">
                        <div class="fluid-video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$v->link}}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="">
                        <p class="mt-10">

                            @switch(session('locale'))
                            @case('ta')
                                {{$v->ta_description}}
                            @break
                            @case('si')
                                {{$v->si_description}}
                            @break
                            @default
                                {{$v->description}}
                        @endswitch
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        @if(count($videos)>5)
        <div class="text-center">
            <a href="#" wire:click.prevent="readmore" class="btn btn-border btn-theme-colored btn-flat btn-lg">{{__('Read More')}}</a>
        </div>
        @endif
    </div>
</div>
