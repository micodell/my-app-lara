<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <!-- @vite(['public/css/layout.css', 'public/js/layout.js']) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- <link rel="stylesheet" href="css/layout.css">
    <script src="js/layout.js"></script> -->
</head>
<body class="bg-gradient-to-b from-[#00337C] to-blue-400 w-screen min-h-screen overscroll-y-none">
    @include('includes.header')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="flex items-center justify-center text-slate-300">
        <div class="row mt-2">
            @yield('form_table')
            @yield('form_register')
            @yield('form_edit')
        </div>
    </div>
</body>
</html>