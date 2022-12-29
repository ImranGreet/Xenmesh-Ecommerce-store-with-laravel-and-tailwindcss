@props(['products'])

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Product name
                </th>
                
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
@foreach ($products as $product)
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
       {{substr($product->title,0,50)}}....
    </th>
    
    <td class="py-4 px-6">
        {{$product->category}}
    </td>
    <td class="py-4 px-6">
        ${{$product->price}}
    </td>
    <td class="py-4 px-6 gap-x-3 flex">
        <a href="{{route('update_product',$product->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
        <form action="#" >

            @csrf
            <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> <span class="text-red-600"><i class="fa-solid fa-trash"></i></span></button>
        </form>
    </td>
</tr>
@endforeach

        </tbody>
    </table>

</div>

<div class="w-11/12 mx-auto  lg:w-2/5 flex  justify-start items-center lg:items-start my-5">
    <a  href="{{$products->previousPageUrl()}}" class="w-full  text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg  px-5 py-2.5 text-center mr-2 mb-2 tracking-widest text-lg">Previus Page</a>
    <a  href="{{$products->nextPageUrl()}}" class="w-full  text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg  px-5 py-2.5 text-center mr-2 mb-2 tracking-widest text-lg">Next Page</a>
</div>
