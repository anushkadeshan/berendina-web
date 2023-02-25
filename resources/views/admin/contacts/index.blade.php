@extends('layouts.admin.master')
@section('title', 'Contact Details')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3></h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Contacts</li>
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
                       <h5>Contact Details</h5>
                    </div>
                    <div class="col-md-6">
                       <a style="float: right;" href="{{route('contacts.create')}}"><button class="btn btn-primary" type="button">Add New</button></a>
                   </div>
                </div>
             </div>
             <div class="card-body">
                <livewire:admin.contacts.index />
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
@section('script')
@endsection
