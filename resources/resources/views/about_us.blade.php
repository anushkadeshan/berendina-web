@extends('layouts.client.app')

@section('title', 'Berendina - About Us')

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
                            <h3 class="title text-white">{{__('msg.Our Vision')}} </h3>
                            <p class="text-white">
                                CREATE AN EMPOWERED, EQUITABLE SOCIETY WHERE POVERTY DOES NOT EXIST
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container" style="margin-top: 30px;">
        <livewire:client.about.history/>
        {{--
        <livewire:client.about.board/>
        <livewire:client.about.awards/>
        <livewire:client.press.annual-reports/>
        --}}
        <!-- Footer -->
    </div>
    <br>
    <livewire:client.home.footer />
@endsection
