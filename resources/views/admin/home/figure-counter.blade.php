@extends('layouts.admin.master')
@section('title', 'Careers')

@section('css')
<script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3></h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Home</li>
<li class="breadcrumb-item active">Figure Counter</li>
@endsection

@section('content')
<livewire:admin.home.figure-counter />
@endsection
@section('script')
<script>
   window.addEventListener('openModel', event => {
      $("#exampleModalXl").modal('show');
  })

  window.addEventListener('closeModel', event => {
      $("#exampleModalXl").modal('hide');
  })
</script>
@endsection
