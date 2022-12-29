@props(['product_info'])



@foreach ($product_info as $info)
<div
class="z-20 w-full rounded-lg bg-white shadow-none md:w-[250px] md:border md:border-r-gray-800 md:shadow-lg xl:w-[350px]">
<img
    src="https://images.unsplash.com/photo-1661956600684-97d3a4320e45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
    alt=""
    class="animate-wiggle h-72 w-full rounded-t-lg" />

<div class="space-y-4 px-3 py-2">
    <h1 class="text-xl font-bold tracking-wide md:text-2xl lg:text-3xl">
        <span>$</span> {{$info->price}}
    </h1>
    <div class="flex w-full justify-between gap-x-2">
        <button class="w-3/4 bg-purple-800 text-base capitalize text-white md:text-xl">
            add to cart
        </button>
        <button class="w-1/4 bg-slate-200/80 px-1 py-2 text-2xl xl:px-2 xl:py-3">
            <i class="fa-regular fa-heart"></i>
        </button>
    </div>
    <button
        class="w-full bg-stone-800 px-1 py-2 text-xl tracking-wider text-white xl:px-2 xl:py-3">
        Buy now
    </button>
</div>
<!-- description -->
<x-reusable-components.ProductDetails.Description :description="$info->description" :title="$info->title" />
</div>
@endforeach
