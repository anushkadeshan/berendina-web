@extends('layouts.client.app')

@section('title', 'Berendina Image Gallery')

@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.8"
            data-bg-img="http://placehold.it/1920x1280">
            <div class="container pt-100 pb-50">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">
                                @switch(session('locale'))
                                    @case('ta')
                                        {{$album->ta_title}}
                                    @break
                                    @case('si')
                                        {{$album->si_title}}
                                    @break
                                    @default
                                        {{$album->title}}
                                @endswitch
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container" style="margin-top: 30px;">
        <livewire:client.media.photo-gallery-single :photos="$photos"/>

    </div>
    <br>
    <!-- Footer -->
    <livewire:client.home.footer />
@endsection
