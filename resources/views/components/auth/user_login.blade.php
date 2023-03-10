<div class="flex min-h-full md:h-screen  items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <img class="mx-auto h-8 w-auto" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="Your Company">
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>

      </div>

      <form  action="{{route('user_login')}}" method="POST" class="mt-8 space-y-6 rounded-md border p-4 shadow-xl shadow-blue-200">
        @csrf

        <div class="space-y-3 rounded-md shadow-sm">
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="email"  class="relative block w-full appearance-none rounded-none rounded-t-md border  px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('email') border-red-500 @enderror" placeholder="Email address" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-red-400 text-sm italic" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password"   required class="relative block w-full appearance-none rounded-none rounded-b-md border  px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('password') border-red-500 @enderror" placeholder="Password">
            @error('password')
            <span class="text-red-400 text-sm italic" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
          </div>

          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
          </div>
        </div>

        <div>
          <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <!-- Heroicon name: mini/lock-closed -->
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
              </svg>
            </span>
            Sign in
          </button>
        </div>
        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
           Haven't Account <a href="{{route('user_reg_page')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Registration here</a>
        </p>
      </form>
    </div>
  </div>
