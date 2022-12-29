
    @props(['product_details','related_products'])

    <section class="flex w-full flex-col items-center justify-between md:block relative">
        <div>

            @foreach ($product_details as $description)
            <x-reusable-components.ProductDetails.Showcase  :description="$description"/>
            @endforeach
        </div>
        <div class="lg:absolute lg:top-4 lg:right-0">
            <x-reusable-components.ProductDetails.Thumbnail :product_info="$product_details"/>
        </div>
        <div class="w-full lg:w-3/5 lg:ml-20">
            <h1 class="my-2 block text-xl font-semibold tracking-wider">Related Products</h1>

             <div class="space-y-2 divide-y-2 divide-gray-600/20">
                @foreach ($related_products as $product)
                <x-reusable-components.ProductDetails.RelatedProducts :productInfo="$product" />
                @endforeach
             </div>
        </div>
    </section>



