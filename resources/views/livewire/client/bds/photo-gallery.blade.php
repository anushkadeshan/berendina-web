<div>
    <style>
        .loading-overlay {
            display: none;
            background: rgba(255, 255, 255, 0.7);
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            z-index: 9998;
            align-items: center;
            justify-content: center;
          }

          .loading-overlay.is-active {
            display: flex;
          }

    </style>
    @if(count($albums)==0)

    <div class="m-50 text-center">
        <h4>No Albums found</h4>
    </div>
    @else
        @foreach($albums as $al)
        <a href="{{ url('berendina-image-single?title='.$al->title.'&id='.$al->id) }}">
        <div class="col-xs-12 col-sm-6 col-md-4 mt-20" style="cursor: pointer;">
            <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                    <div class="post-thumb thumb">
                        <img src="{{URL::asset('storage/photos/image-gallery/thumb/'.$al->thumb)}}" alt="" class="img-responsive img-fullwidth">
                    </div>
                </div>
                <div class="entry-content p-5">
                    <div class="entry-meta media mt-0 no-bg no-border">
                        <div class="media-body">
                            <div class="event-content pull-left flip">
                                <p class="entry-title m-0 mt-5">
                                    @switch(session('locale'))
                                        @case('ta')
                                            {{$al->ta_title}}
                                        @break
                                        @case('si')
                                            {{$al->si_title}}
                                        @break
                                        @default
                                            {{$al->title}}
                                    @endswitch
                                </p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
            </article>
        </div>
        </a>
        @endforeach
    @endif
    <div class="loading-overlay" wire:loading.class="is-active">
        <span class="fa fa-spinner fa-3x fa-spin"></span>
    </div>

</div>
