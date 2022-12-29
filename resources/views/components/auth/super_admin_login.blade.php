@guest('admin')
<section class="w-full h-96 flex flex-col justify-center items-center ">
    <form action="{{route('author_login')}}" method="post" class="border-2 rounded-lg shadow-lg flex flex-col justify-between items-center w-11/12 lg:w-3/5 mx-auto p-3">
        @csrf

        <div class="flex flex-col justify-center items-center w-full">
            <label for="email" class="text-start mb-1 tracking-wider">Email</label>
            <input type="email" name="email" id="" placeholder="Enter Your Email" value="{{old('email')}}" class="w-full px-2 py-1.5 focus:outline-none border rounded-md border-gray-900/75">
            @error('email')
                <span class="text-red-400 text-sm italic" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="flex flex-col justify-center items-center w-full">
            <label for="name" class="text-start mb-1 tracking-wider">Password</label>
            <input type="password" name="password" id="" placeholder="Enter Your Password" value="{{old('password')}}"class="w-full px-2 py-1.5 focus:outline-none border rounded-md border-gray-900/75">
            @error('password')
                <span class="text-red-400 text-sm italic" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="w-full px-2 py-1.5 lg:hover:bg-gray-900/15 tracking-wider text-lg bg-gray-800 text-white mt-5 border rounded-md">Login</button>

       <div>
        <p class="w-full lg:hover:bg-gray-900/15 tracking-wider  mt-5 border rounded-md">Haven,t Registered <span><a href="{{route('author_reg_path')}}" class="text-red-700 text-center">Registration</a></span> </p>
       </div>
    </form>
</section>
@endguest
