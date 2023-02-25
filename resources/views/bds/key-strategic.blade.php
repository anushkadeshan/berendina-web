@extends('layouts.client.app')

@section('title', 'BDS - Key Strategic components')

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
                            <h3 class="title text-white">BDS Key Strategic components </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container" style="margin-top: 10px;">

        <livewire:client.bds.key-strategies />

        <!-- Footer -->

    </div>
    <br>
    <livewire:client.home.footer />
@endsection
