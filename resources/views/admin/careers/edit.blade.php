@extends('layouts.admin.master')
@section('title', 'Create Careers')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3></h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Careers</li>
<li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">

        <livewire:admin.careers.edit :career="$career"/>

       </div>
    </div>
 </div>
@endsection
@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
