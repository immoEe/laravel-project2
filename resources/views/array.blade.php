<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/array.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li><a href="{{ route('array') }}">Товары</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
    <h1>Наши Товары</h1>
        <div class="product-grid">
            @foreach ($array as $product)
                <div class="product-card">
                    <img src="{{ asset($product['imgPath']) }}" alt="{{ $product['title'] }}">
                    <h2>{{ $product['title'] }}</h2>
                    <p>Цена: {{ $product['price'] }} руб.</p>
                </div>
            @endforeach
        </div>
    </main>
    
    <footer>
        <p>&copy; 2024 Кузнецов В.А Все права защищены.</p>
    </footer>
</body>
</html>
