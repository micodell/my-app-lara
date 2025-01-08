<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-[#00337C] to-blue-400 w-screen min-h-screen overflow-x-hidden">
    @include('includes.header')

    <div class="flex items-center justify-center text-slate-300">
        <div class="row mt-10">
            @yield('form_register')
            @yield('form_table')
            @yield('form_edit')
        </div>
    </div>
</body>
</html>