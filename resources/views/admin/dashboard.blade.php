@extends('layouts.admin.master')
@section('title', 'Sample Page')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <livewire:admin.dashboard.page-views>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12">
         <livewire:admin.dashboard.most-visited-pages>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-6">
         <livewire:admin.dashboard.top-referrers>
      </div>
      <div class="col-sm-6">
         <livewire:admin.dashboard.user-types>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-6">
         <livewire:admin.dashboard.top-browsers>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>

@endsection