
@props(['product'])



@foreach ($product as $pro)
<div class="w-full lg:w-4/5 mx-auto border rounded-md p-5 shadow lg:shadow-lg shadow-gray-800/60">
  <div class="text-center">
      <h1 class="text-blue-800 text-xl lg:text-3xl tracking-wide">Update Product</h1>
  </div>

  <form action="{{route('edit_product')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="w-full flex flex-col space-y-2">
        <label for="title" class="text-lg tracking-wider">Title</label>
        <input type="text" name="title" value="{{$pro->title}}"   class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ring-blue-500">
        @error('title')
          <span class="text-red-400 text-sm italic" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

     <div class="flex-col flex xl:flex-row lg:space-x-3">
        <div class="w-full flex flex-col space-y-2">
            <label for="price" class="text-lg tracking-wider">Price</label>
            <input type="text" name="price"  placeholder="$12.50" value="{{$pro->price}}" class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ring-blue-500">
            @error('price')
              <span class="text-red-400 text-sm italic" role="alert">
              <strong>{{ $message }}</strong>
              </span>
             @enderror
        </div>

          <div class="w-full flex flex-col space-y-2">
            <label for="category" class="text-lg tracking-wider">Category</label>
            <select name="category"  class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ">
                <option type="text"  value="electronics">electronics</option>
                <option type="text"  value="jewelery">jewelery</option>
                <option type="text"  value="men's clothing">men's clothing</option>
                <option type="text"  value="women's clothing" >women's clothing</option>
                <option type="text"  value="books">Books</option>
            </select>
          </div>
     </div>

     <div class="w-full flex flex-col space-y-2">
        <label for="title" class="text-lg tracking-wider">Image</label>
        <input type="file" name="image"  placeholder="Enter Your Product Title" class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ring-blue-500 cursor-pointer ">
        @error('image')
          <span class="text-red-400 text-sm italic" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      </div>

      <div class="w-full flex flex-col space-y-2">
        <label for="description" class="text-lg tracking-wider">Description</label>
        <textarea id="message" rows="6" name="description" value="{{$pro->description}}" class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ring-blue-500" placeholder="Write your description here...">{{$pro->description}}</textarea>
        @error('description')
          <span class="text-red-400 text-sm italic" role="alert">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

       <div class="my-4">
        <button id="message" rows="6" class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 bg-blue-800 lg:hover:bg-blue-900 text-xl lg:text-2xl text-white tracking-wide">Submit</button>
       </div>
    </form>
</div>
@endforeach