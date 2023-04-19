<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <!-- include header content here -->
    </header>

    <nav>
        <!-- include navigation content here -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- include footer content here -->
    </footer>
</body>
</html>
