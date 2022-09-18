<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('main');
});

Route::get('/author', function () {
  return view('author');
});

Route::get('/book', function () {
  return view('book');
});
