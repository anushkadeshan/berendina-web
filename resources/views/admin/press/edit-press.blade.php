@extends('layouts.admin.master')
@section('title', 'BDS Press Releases')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3></h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Press Releases</li>
<li class="breadcrumb-item active">{{$press->id}}</li>
@endsection

@section('content')
<livewire:admin.press.edit-press :press="$press"/>
@endsection
@section('script')
@endsection
