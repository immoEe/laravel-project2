
@extends('layout.main')
@section('content')
    <div>
        <h1>Список заявок</h1>
    </div>
    <div class="reports-grid">
        @foreach ($reports as $report)
            <div class="report-card">
                <h1>Заявка №{{ $report->number }}</h1>
                <p><strong>Описание:</strong> {{ $report->description }}</p>
                <p><strong>Дата создания:</strong> {{ $report->created_at ? $report->created_at->format('d.m.Y H:i') : 'Не указано' }}</p>
                <form method="POST" action="{{ route('report.destroy', $report->id) }}">
                    @method('delete')
                    @csrf
                <input style="color: red" type="submit" value="Удалить">
                </form>

            </div>
        @endforeach
    </div>

@endsection
