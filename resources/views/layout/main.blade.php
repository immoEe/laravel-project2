<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])    
    <title>Reviews</title>
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('form/home.css') }}">   

    <style>
        <style>
    .new-query {
    max-width: 500px;
    padding: 1.5rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.new-query-label {
    font-weight: bold;
    margin-bottom: 0.5rem;
    display: block;
    color: #333;
}

.new-query-input[type="text"],
.new-query-textarea {
    width: 100%;
    padding: 0.8rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    resize: vertical;
    background-color: #fff;
    box-sizing: border-box;
    transition: border-color 0.3s;
}

.new-query-input[type="text"]:focus,
.new-query-textarea:focus {
    border-color: #007bff;
    outline: none;
}

.new-query-button[type="submit"] {
    width: 100%;
    padding: 0.8rem;
    font-size: 1.1rem;
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.new-query-button[type="submit"]:hover {
    background-color: #0056b3;
}  

h2 {
    margin-bottom: 20px;
    font-size: 26px;
}
</style>
    </style>
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
            <form class="new-query" method="POST" action="{{ route('reports.store') }}">
                <strong><h2>Добавить отчет</h2></strong>
                    @csrf
                <label class="new-query-label" for="number">Номер авто:</label>
                <input class="new-query-input" type="text" id="number" name="number" required>

                <label class="new-query-label" for="description">Описание:</label>
                <textarea class="new-query-textarea" id="description" name="description" rows="4" required></textarea>

                <button class="new-query-button" type="submit">Создать</button>
            </form>
            <form class="new-query" method="POST" action="{{ route('report.update', $report->id) }}">
            <strong><h2>Обновить отчет</h2></strong>
                @csrf
                @method('PUT')
    
                <label class="new-query-label" for="number">Номер авто:</label>
                <input class="new-query-input" type="text" id="number" name="number" value="{{ $report->number }}" required>

                <label class="new-query-label" for="description">Описание:</label>
                <textarea class="new-query-textarea" id="description" name="description" rows="4" required>{{ $report->description }}</textarea>

                <button class="new-query-button" type="submit">Обновить</button>
            </form>
        </main>
    
    <footer>
        <p>&copy; 2024 Кузнецов В.А Все права защищены.</p>
    </footer>
</body>
</html>
