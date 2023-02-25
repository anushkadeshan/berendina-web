@extends('layouts.client.app')

@section('title', 'BMIC - Case Studies')

@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.1"
            data-bg-img="{{URL::asset('storage/photos/banner/bmic_case_studies.jpg')}}">
            <div class="container pt-100 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">BMIC Case Studies</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container" style="margin-top: 10px;">

        <livewire:client.bmic.media.case-studies />

        <!-- Footer -->

    </div>
    <br>
    <livewire:client.home.footer />
@endsection
