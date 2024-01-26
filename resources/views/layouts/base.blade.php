<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>
            @yield('page.title', __(config('app.name')))
        </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        {{-- Trix editor - ./components/forms/inputs/trix.blade.php --}}
        @stack('css')

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>

        <div class="d-flex flex-column min-vh-100">

            @include('includes.header')

            <main class="flex-grow-1 py-3">
                @yield('content')
            </main>

            @include('includes.footer')

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        {{-- Trix editor - ./components/forms/inputs/trix.blade.php --}}
        @stack('js')
    </body>
</html>
