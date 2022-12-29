@guest('admin')
<div class="w-full lg:w-2/5 mx-auto border rounded-md p-5 shadow lg:shadow-lg shadow-gray-800/60">
    <div class="text-center">
        <h1 class="text-blue-800 text-xl lg:text-2xl tracking-wide">Registration to Xenmesh Admin Panel</h1>
    </div>

    <form action="{{route('admin-reg')}}" method="post" >
        @csrf
        <div class="w-full flex flex-col space-y-2">
          <label for="name" class="text-lg tracking-wider">Name</label>
          <input type="text" name="name"  placeholder="Enter Your Name" value="{{old('name')}}" class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ring-blue-500">
          @error('name')
            <span class="text-red-400 text-sm italic" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

          <div class="w-full flex flex-col space-y-2">
              <label for="username" class="text-lg tracking-wider">Username</label>
              <input type="text" name="username"  placeholder="Username ...."  value="{{old('username')}}"class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ring-blue-500">
              @error('username')
                <span class="text-red-400 text-sm italic" role="alert">
                <strong>{{ $message }}</strong>
                </span>
               @enderror
          </div>

          <div class="w-full flex flex-col space-y-2">
              <label for="email" class="text-lg tracking-wider">Email Address</label>
              <input type="email" name="email"  placeholder="Email address" value="{{old('email')}}" class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ring-blue-500">
              @error('email')
                <span class="text-red-400 text-sm italic" role="alert">
                <strong>{{ $message }}</strong>
                </span>
               @enderror
          </div>

          <div class="w-full flex flex-col space-y-2">
              <label for="password" class="text-lg tracking-wider">passwords</label>
              <input type="password" name="password"  placeholder="********" value="{{old('password')}}" class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ring-blue-500">
              @error('password')
                <span class="text-red-400 text-sm italic" role="alert">
                <strong>{{ $message }}</strong>
                </span>
               @enderror
          </div>

          <div class="w-full flex flex-col space-y-2">
              <label for="password_confirmation" class="text-lg tracking-wider">Confirm passwords</label>
              <input type="password" name="confirm_password"  placeholder="*****" class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 ring-blue-500">
              @error('confirm_password')
                <span class="text-red-400 text-sm italic" role="alert">
                <strong>{{ $message }}</strong>
                </span>
               @enderror
          </div>


         <div class="my-4">
          <button id="message" rows="6" class="w-full px-4 py-2 border border-gray-700 rounded-md focus:outline-none focus:ring-2 bg-blue-800 lg:hover:bg-blue-900 text-xl lg:text-2xl text-white tracking-wide">Submit</button>
         </div>

         <div>
            <p class="w-full lg:hover:bg-gray-900/15 tracking-wider  mt-5 border rounded-md">Already Have an account <span><a href="{{route('adminlogin_path')}}" class="text-red-700 text-center">Login</a></span> </p>
           </div>

      </form>
</div>
@endguest
