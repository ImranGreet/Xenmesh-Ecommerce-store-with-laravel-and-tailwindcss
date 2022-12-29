@extends('layouts.admin')

@section('admin-title')
    Add New Product
@endsection

@section('admin_content')
    <div class="my-8">
      <x-form.add-product/>
    </div>
@endsection
