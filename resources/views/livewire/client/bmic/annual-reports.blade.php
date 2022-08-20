<div class="container mt-20">
    @foreach($annual_reports as $ar)
    <div class="col-xs-12 col-sm-6 col-md-2">
        <article class="post clearfix mb-30 bg-lighter">
            <div class="entry-header">
                <div class="post-thumb thumb">
                    <img src="{{URL::asset('storage/photos/annual-reports/'.$ar->thumb_url)}}" alt="" class="img-responsive img-fullwidth">
                </div>
            </div>
            <div class="entry-content p-5">
                <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="media-body">
                        <div class="event-content pull-left flip">
                            <p class="entry-title text-white m-0 mt-5"><a href="{{URL::asset('storage/documents/annual-reports/'.$ar->file_url)}}">{{$ar->title}}</a></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
        </article>
    </div>
    @endforeach

</div>
