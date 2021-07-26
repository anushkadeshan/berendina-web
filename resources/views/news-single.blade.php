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
                            <h5 class="title text-white">News Title</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container" style="margin-top: 30px;">
        <livewire:client.press.single-news />
        <!-- Footer -->
    </div>
    <br>
    <livewire:client.home.footer />
@endsection