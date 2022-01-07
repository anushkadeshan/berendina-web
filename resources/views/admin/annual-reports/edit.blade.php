@extends('layouts.admin.master')
@section('title', 'BDS Annual Reports')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3></h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Berendina</li>
<li class="breadcrumb-item active">{{$report->title}}</li>
@endsection

@section('content')
<livewire:admin.common.edit-ar :report="$report" />
@endsection
@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
