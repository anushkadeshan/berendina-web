<div class="mt-20 wow fadeInLeft" data-wow-duration="1s"
data-wow-delay="0.3s">
    <div class="section-title text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="title-icon">
                    <i class="pe-7s-world"></i>
                </div>
                <h3 class="text-uppercase mt-0">{{__('msg.Where we work')}} </h3>
            </div>
        </div>
    </div>

    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">

                <!-- Google Map HTML Codes -->
                <div id="map-canvas-multipointer" data-mapstyle="default" data-height="600" data-zoom="8"
                    data-marker="images/map-marker.png">
                </div>
                <!-- Google Map Javascript Codes -->
                <script src="https://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                <script src="{{asset('js/google-map-init-multilocation.js')}}"></script>

            </div>
        </div>
    </section>
</div>