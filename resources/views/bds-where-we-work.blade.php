@extends('layouts.client.app')

@section('title', 'BDS - Where we work')

@section('content')
    <div class="main-content">
        <!-- Section: inner-header 
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.8"
            data-bg-img="{{URL::asset('storage/photos/banner/where_we_work.jpg')}}">
            <div class="container pt-100 pb-50">
                
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">{{__('msg.BDS - Where we work')}} </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    -->
    </div>
    <div style="margin-top: 0;">

        <livewire:client.bds.map/>

        <!-- Footer -->

    </div>
    <br>
    <livewire:client.home.footer />
@endsection
