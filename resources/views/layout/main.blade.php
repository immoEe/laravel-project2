<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])    
    <title>Array</title>
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('array') }}">Товары</a></li>
                <li><a href="{{ route('report.index')}}">Жалобы</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <footer>
        <p>&copy; 2024 Кузнецов В.А Все права защищены.</p>
    </footer>
</body>
</html>
