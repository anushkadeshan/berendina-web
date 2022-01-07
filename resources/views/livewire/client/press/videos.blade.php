<div>
    <section>
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mt-0 text-uppercase font-28">{{__('msg.Berendina')}}  <span
                                class="text-theme-colored font-weight-400">{{__('msg.videos')}}</span> <span
                                class="font-30 text-theme-colored">.</span></h2>
                        <div class="icon">
                            <i class="fa fa-play"></i>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row multi-row-clearfix">
                <div class="blog-posts">
                    @foreach($videos as $v)
                    <div class="col-md-4">
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
                @if(count($videos)>2)
                <div class="text-center">
                    <a href="#" class="btn btn-border btn-theme-colored btn-flat btn-lg">{{__('Read More')}}</a>
                </div>
                @endif
            </div>
        </div>
    </section>
</div>

