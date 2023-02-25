@extends('layouts.admin.master')
@section('title', 'Contact Details')

@section('css')

@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3></h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Contacts</li>
<li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                       <h5>Add Contact Details</h5>
                    </div>
                </div>
             </div>
             <div class="card-body">
                <livewire:admin.contacts.create />
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
@section('script')
@endsection
