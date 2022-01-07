@extends('layouts.admin.master')
@section('title', 'BDS Annual Reports')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3></h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Press Release</li>
<li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<livewire:admin.press.add-press />
@endsection
@section('script')
