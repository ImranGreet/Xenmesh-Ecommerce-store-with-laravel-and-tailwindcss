<div class="text-gray-900 w-full px-4 py-2.5 shadow-lg">

    <nav class="flex flex-col lg:flex-row justify-between text-lg tracking-wider ">
       {{-- <a href="{{route('index')}}">Home</a> --}}

       @auth('admin')
        <a href="{{route('pro_crud',auth('admin')->id())}}">Operation</a>
        <a href="{{route('show')}}">Insert New Product</a>
       @endauth

       @guest('admin')
        <a href="{{route('adminlogin')}}">Login</a>
        <a href="{{route('admin_registration_path')}}">Registration</a>
       @endguest

       @auth('admin')
        <a href="{{route('admin_profile',1)}}">Imran Hossain</a>
       @endauth

       @auth('admin')
        <form action="{{route('adminlogout')}}" method="post">
            @csrf
            <button type="submit" class="text-blue-800 rounded-md">Logout</button>
        </form>
       @endauth

    </nav>
</div>
