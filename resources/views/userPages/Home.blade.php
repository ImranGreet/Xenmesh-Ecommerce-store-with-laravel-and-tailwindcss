@extends('layouts.user')

@section('title')
    user home page
@endsection

    @section('content')
    <x-Omnipresent>
        @foreach ($products as $product)
        <x-reusable-components.product-info :productInfo="$product"/>
        @endforeach
    </x-Omnipresent>
    @endsection





