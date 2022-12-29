

@props(['productInfo'])


    <section class="w-full ">

        <div

            class="flex w-full flex-row items-center justify-between gap-x-12 space-x-4 py-2 text-lg lg:text-xl">
            <div class="flex w-full items-center justify-between md:w-3/5 md:gap-x-3">
                <img
                    class="h-12 w-12 rounded-sm lg:h-20 lg:w-20"
                    src="https://images.unsplash.com/photo-1661961111247-e218f67d1cd2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="title" />
                <a href="{{route('product_details',$productInfo->id)}}"
                    class="break-words lg:hover:underline lg:hover:decoration-gray-400/20 lg:hover:decoration-2 lg:hover:underline-offset-2">
                    get details
                </a>
            </div>
            <div
                class="flex w-full flex-col items-center justify-between gap-y-2 text-sm font-semibold md:w-2/5 md:text-xl lg:flex-row lg:gap-x-3">
                <p>
                    4.3
                    <span class="text-yellow-600">
                        <i class="fa-regular fa-star"></i>
                    </span>
                </p>
                <p>
                    <span>
                        <i class="fa-solid fa-users"></i>
                    </span>
                    2155
                </p>
                <p>
                    <span>$</span>
                   {{$productInfo->price}}
                </p>
                <button
                    class="h-10 w-10 rounded-full border border-gray-600 lg:hover:bg-gray-200/40">
                    <span class="text-sm lg:text-lg">
                        <i class="fa-regular fa-heart"></i>
                    </span>
                </button>
            </div>
        </div>
    </section>





