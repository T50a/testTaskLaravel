<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

Route::get('/', function () {
  return view('main');
})->name('main');

Route::get('/author', function () {
  return view('author');
})->name('author');

Route::post('/author/submit', function () {
  return "SUCCESS";
})->name('author-form');

Route::get('/book', function () {
  return view('book');
})->name('book');

Route::post('/book/submit', function () {
  return "SUCCESS";
})->name('book-form');
