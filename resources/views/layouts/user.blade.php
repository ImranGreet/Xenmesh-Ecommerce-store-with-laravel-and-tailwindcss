<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>Xenmesh Store -@yield('title')</title>
</head>
<body class="max-w-full mx-auto font-work">
    <div class="w-full bg-gray-900 text-white px-5">
        <x-Header/>
    </div>
       @php
           $isActive = false;
           if (url()->current() === route('product_details',1)) {
            $isActive =true;
           }
       @endphp

    <div @class([
        'mx-auto',
        'mx-auto' ,
        'max-w-full'=>$isActive,
        'max-w-7xl'=>!$isActive,
        'lg:mt-10'=>!$isActive,
        'border-t'=>$isActive,
        'border-slate-200'=>$isActive,
    ])>
        @yield('content')
    </div>
    {{-- footer --}}
    <footer class="mt-20">
        <x-Footer.Footer />
    </footer>
</body>
</html>
