<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Title</title>


</head>
<body class="text-bg-dark">

    @include('admin.partials.header')

    <main>
        <div class="m-auto position-relative text-center">
            <div class="content position-absolute top-0 start-0 bottom-0 end-0">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>

    </main>

</body>
</html>
