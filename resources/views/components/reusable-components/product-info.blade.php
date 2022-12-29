
    <div class="flex h-72 w-full animate-wiggle flex-col items-start justify-start rounded-sm">
        <div class="group relative h-1/2 w-full">
            <img
                src="https://images.unsplash.com/photo-1661956602139-ec64991b8b16?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=365&q=80"
                alt="title"
                loading="lazy"
                class="z-20 h-full w-full rounded-sm " />

            <div
                class="absolute inset-x-0 top-[100px] flex justify-between rounded-md bg-pink-800/70 p-1 px-2 text-white md:rounded-none md:bg-gray-800 lg:hover:delay-150 lg:hover:duration-200 lg:group-hover:flex xl:top-[108px] xl:hidden">
                <button
                    class="text-lg uppercase tracking-wide">
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                </button>
                <button
                    class="text-lg uppercase tracking-wide">
                    <span><i class="fa-solid fa-heart"></i></span>
                </button>
            </div>
        </div>

        <div class="flex flex-col items-start justify-between gap-y-[2px] text-start">
            <a
                href="{{route('product_details',$productInfo->id)}}"
                class="break-words text-left text-sm font-semibold leading-5 tracking-wide md:text-base lg:hover:underline lg:hover:decoration-slate-800/40 lg:hover:decoration-1 lg:hover:underline-offset-4">
                {{$productInfo->title}}
        </a>
            <p class="text-sm font-semibold capitalize tracking-wider text-stone-600">
                {{$productInfo->category}}
            </p>

            <div
                class="flex justify-evenly gap-x-[1.5px] text-sm tracking-wider text-yellow-600/75">
                <span>4.8</span>
                <span
                <i class="fa-regular fa-star"></i>
                </span>
                <span>(572)</span>
            </div>

            <h4 class="text-lg font-bold tracking-wider text-gray-800">$ {{$productInfo->price}}</h4>

        </div>
    </div>



