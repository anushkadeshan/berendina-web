@extends('layouts.client.app')

@section('title', 'Berendina - Press')

@section('content')
<livewire:client.press.latest-news/>
<livewire:client.press.in-media/>
<livewire:client.press.videos/>
<livewire:client.press.photos/>
<livewire:client.press.annual-reports/>
@endsection