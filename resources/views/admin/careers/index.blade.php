@extends('layouts.admin.master')
@section('title', 'Careers')

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
<li class="breadcrumb-item active">All</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                       <h5>Careers</h5>
                    </div>
                    <div class="col-md-6">
                       <a style="float: right;" href="{{route('careers.create')}}"><button class="btn btn-primary" type="button">Add New</button></a>
                   </div>
                </div>
             </div>
             <div class="card-body">
                 <livewire:admin.careers.table />
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
