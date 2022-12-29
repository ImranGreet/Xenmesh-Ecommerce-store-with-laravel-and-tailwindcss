<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>Xenmesh Store -@yield('admin-title')</title>
</head>
<body class="max-w-full mx-auto font-work">
    {{-- Header --}}
    <x-admin.Header/>
    <div class="max-w-7xl mx-auto">
        @yield('admin_content')
    </div>
    {{-- footer --}}
    <x-Footer.Footer/>
</body>
</html>

