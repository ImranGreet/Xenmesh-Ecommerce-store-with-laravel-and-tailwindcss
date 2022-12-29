@extends('layouts.admin')

@section('admin-title')
    Update Product
@endsection

@section('admin_content')
    <div class="my-8">
      <x-form.edit_product :product="$product"/>
    </div>
@endsection
