@extends('layouts.app')
@section('content')
<div id="modal" class="window">
 <div>
  <button onClick="closeModal()" class="add">Х</button>
    <form method="POST" action="{{route('report.update', $report->id)}}" class='report'>
    @method('put')  
    @csrf
      <input name="number" type="text" placeholder="Номер авто" required class="input">
      <textarea name="description" placeholder="Описание" class="input"></textarea>
      <button type="submit" class="add">Обновить</button>
    </form>
  </div>
 </div>
@endsection()