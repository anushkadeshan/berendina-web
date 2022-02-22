@extends('layouts.client.app')

@section('title', 'BDS - What We Do')

@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.8"
            data-bg-img="{{URL::asset('storage/photos/banner/what_we_do.jpg')}}">
            <div class="container pt-100 pb-50">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">{{__('msg.BDS - What We Do')}} </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div style="margin-top: 0;">

        <livewire:client.bds.what-we-do/>

        <!-- Footer -->

    </div>
    <br>
    <livewire:client.home.footer />
@endsection
