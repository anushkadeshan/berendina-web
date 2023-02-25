@extends('layouts.client.app')

@section('title', 'Berendina - Press')

@section('content')
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.8"
        data-bg-img="{{URL::asset('storage/photos/banner/covid.jpg')}}">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">{{__('msg.Disaster Relief Activities on COVID-19 Pandemic')}} </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div style="margin-top: 0;">

    <livewire:client.covid19.main-page />

    <!-- Footer -->

</div>
<br>
<livewire:client.home.footer />

@endsection
