<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <div class="content">
            <h1>Добро пожаловать на наш сайт!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam totam labore sapiente dicta inventore itaque quod, sequi illum vitae iusto!</p>
            <img src="img/nikepro.png" alt="Пример изображения">
        </div>
    </main>
    
    <footer>
        <p>&copy; 2024 Кузнецов В.А Все права защищены.</p>
    </footer>
</body>
</html>
