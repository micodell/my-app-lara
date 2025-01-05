<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 bg-blue-200 sticky-top">
                <h1 class="mx-3">Welcome</h1>
            </div>
            <div class="row">
                <div class="col-md-10 border border-dark mx-3">
                    @yield('form_table')
                </div>
                @yield('form_register')
            </div>
        </div>
    </div>
</body>
</html>