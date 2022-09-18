@extends('layouts.app')

@section('title','Author')

@section('content')
<h1>Авторы </h1><br>

<form action="{{ route('author-form') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Введите имя автора</label> <br>
    <input type="text" name="name" placeholder="Джордж Оруэлл" id="name" class="form-control">
    <br><button type="submit" class="btn btn-success">Найти</button>
  </div>
</form>
@endsection