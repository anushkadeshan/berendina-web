<div class="container mt-10">
    @push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/photoswipe.css')}}">
    @endpush
    <div class="gallery my-gallery card-body row" itemscope="">
        @foreach($photos as $p)
        <figure class="col-xl-3 col-md-4 col-6" itemprop="associatedMedia" itemscope="">
            <a href="{{URL::asset('storage/photos/image-gallery/featured/'.$p->file_name)}}" itemprop="contentUrl" data-size="1600x950"><img
                    class="img-thumbnail" src="{{URL::asset('storage/photos/image-gallery/thumb/'.$p->file_name)}}" itemprop="thumbnail"
                    alt="Image description"></a>
                    @php $no = 1 @endphp
            <figcaption itemprop="caption description">Image  {{$no++}}</figcaption>
        </figure>
        @endforeach
    </div>
    <!-- Root element of PhotoSwipe. Must have class pswp.-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="{{asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/js/photoswipe/photoswipe.js')}}"></script>
    @endpush
</div>
