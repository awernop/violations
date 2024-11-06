@extends('layouts.app')
@section('content')
 <div class='container'>
  <div>
    <form method="POST" action="{{route('reports.store')}}" class='report'>
      @csrf
      <input name="number" type="text" placeholder="Номер авто" required class="input">
      <textarea name="description" placeholder="Описание" class="input"></textarea>
      <button type="submit" class="add">Добавить</button>
    </form>
  </div>
    @foreach($reports as $report)
      <div class='card'>
        <span class='card__number'>{{$report['number']}}</span>
        <p class='card__description'>{{$report['description']}}</p>
        <form method="POST" action="{{route('reports.destroy', $report->id)}}">
          @method('delete')
          @csrf
          <input type="submit" value="Удалить" class="delete">
        </form>
        <a href="{{route('reports.update', $report->id)}}"></a>
      </div>
    @endforeach
 </div>

@endsection()