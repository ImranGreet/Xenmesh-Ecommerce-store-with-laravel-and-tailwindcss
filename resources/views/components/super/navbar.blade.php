<div class="text-gray-900 w-full px-4 py-2.5 shadow-lg">

    <nav class="flex flex-col lg:flex-row justify-between text-lg tracking-wider ">
       {{-- <a href="{{route('index')}}">Home</a> --}}

        <a href="#">Operation</a>
        <a href="#">Insert New Product</a>

        <a href="#">Login</a>
        <a href="#">Registration</a>

        <a href="#">Imran Hossain</a>

       <form action="#" method="post">
        @csrf
        <button type="submit" class="text-blue-800 rounded-md">Logout</button>
       </form>


    </nav>
</div>
