@extends('layouts.client.app')

@section('title', 'Berendina Home')

@section('content')
    <!-- Start main-content -->
    <livewire:client.home.slider />
    <!-- Start figure counter -->
    <livewire:client.home.figure-counter />
    <!-- figure counter end -->
    <div class="separator dotted separator-medium-line"> </div>

    <livewire:client.home.what-we-do />

    <livewire:client.home.where-we-work />

    <livewire:client.home.latest-news />
    
    <!-- Footer -->
    <livewire:client.home.footer />

@endsection