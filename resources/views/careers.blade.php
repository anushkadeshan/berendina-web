@extends('layouts.client.app')

@section('title', 'Berendina - BMIC')

@section('content')
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5"
        data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-90 pb-30">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-8 text-left xs-text-center">
                        <h3 class="text-white font-30">{{__('msg.Careers')}}</h3>
                    </div>
                    <div class="col-md-4">
                        <ol class="breadcrumb text-center mt-10 white">
                            <li><a href="{{url('/')}}" style="color: white;">{{__('msg.Home')}}</a></li>
                            <li class="active">{{__('msg.Careers')}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container" style="margin-top: 30px;">
    <livewire:client.careers.careers-list />
    <!-- Footer -->

</div>
<br>
<!-- Footer -->
<livewire:client.home.footer />

@endsection