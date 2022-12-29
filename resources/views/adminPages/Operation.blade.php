@extends('layouts.admin')

@section('admin-title')
    Operation Table
@endsection

@section('admin_content')
    <x-admin.product_crud :products="$products"/>
@endsection
