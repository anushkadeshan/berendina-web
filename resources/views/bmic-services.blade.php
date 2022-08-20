@extends('layouts.client.app')

@section('title', 'BMIC - Services')

@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.1"
            data-bg-img="{{URL::asset('storage/photos/banner/who_we_are.png')}}">
            <div class="container pt-100 pb-50">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">Our Services</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div style="margin-top: 0;">
        <livewire:client.bmic.services.services/>
        <!-- Footer -->
    </div>
    <br>
    <livewire:client.home.footer />
@endsection
