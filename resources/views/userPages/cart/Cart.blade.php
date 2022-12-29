@extends('layouts.user')

@section('title')
    user cart page
@endsection

@section('content')
    <div class="w-full flex flex-col lg:flex-row-reverse gap-x-20">
     <div class="w-full xl:w-1/5">
        <x-cart.TotalPrice/>
     </div>
     <div class="space-y-2 divide-y-2 divide-gray-600/20 w-4/5">
     <x-cart.CartItem/>
     <x-cart.CartItem/>
     <x-cart.CartItem/>
     <x-cart.CartItem/>
     <x-cart.CartItem/>
     </div>
    </div>
@endsection


