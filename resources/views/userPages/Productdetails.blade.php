@extends('layouts.user')

@section('title')
Product Details
@endsection

 @section('content')
   <x-reusable-components.Product_details
   :product_details="$product"
   :related_products="$related_products" />
 @endsection





