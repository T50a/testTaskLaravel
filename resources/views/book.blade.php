@extends('layouts.app')

@section('title','Book')

@section('content')
<h1>Книги</h1><br>
<form action="{{ route('book-form') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Введите название книги </label> <br>
    <input type="text" name="name" placeholder="1984" id="name" class="form-control">
    <br><button type="submit" class="btn btn-success">Найти</button>

  </div>
</form>


@endsection