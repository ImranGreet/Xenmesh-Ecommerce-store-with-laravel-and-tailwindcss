<div class="w-full flex flex-col justify-between items-center px-3 py-3 shadow-lg ">
    <div class="w-full grid grid-cols-12 justify-items-center content-center">

       <div class="w-full flex justify-between items-center col-span-12 lg:col-span-7 gap-x-4">
       <a href="{{route('home')}}" class="flex-none">Xenmesh</a>
       <button class="flex-none">Categories</button>
       <form action="" method="post" class="inline-block relative grow w-full">
        <input type="text" name="" id="" class=" border rounded-3xl py-2 w-full focus:outline-none text-gray-800 px-5">
        <button class="absolute right-5 text-gray-900 top-3"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
       </form>
       </div>

       <div class="w-full col-span-5 xl:block hidden">
        <nav class="w-full flex justify-between items-center px-4">
            <a href="#">Xenmesh Business</a>
            <a href="#">Create store </a>
            <a href="{{route('wish')}}"><span><i class="fa-regular fa-heart"></i></span></a>
            <a href="{{route('cart')}}"><span><i class="fa-solid fa-cart-shopping"></i></span></a>
            @auth
            <form action="{{route('user_logout')}}" method="post">
            @csrf
            <button type="submit">Logout</button>
            </form>
            @endauth
             @guest
             <a href="{{route('user_login_page')}}">Login</a>
             <a href="{{route('user_reg_page')}}">Sign Up</a>
             @endguest
            <a href="{{route('user_contact')}}">Contact Us</a>
            <a href="#"><span><i class="fa-solid fa-globe"></i></span></a>
        </nav>
       </div>
    </div>
</div>

{{-- <div class="w-full flex justify-between items-center lg:hidden px-3 py-3.5 space-x-3">
  <button><span><i class="fa-solid fa-bars"></i></span></button>
  <form action="#" class="w-3/5 mx-auto relative">
    @csrf
    <input type="text" class="w-full mx-auto rounded-md px-3 py-2 focus:outline-none focus:ring-2">
    <button class="absolute right-5 text-gray-900 top-2"><span><i class="fa-solid fa-magnifying-glass"></i></span></button>
  </form>
  <a href="{{route('home')}}">xenmesh</a>
</div> --}}
