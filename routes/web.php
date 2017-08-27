<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apply', function() {
  return view('apply');
});

Route::post('/apply', 'ApplyCtrl@apply');

Route::get('/courses', function() {
  return view('courses');
});

Route::get('/contact', function() {
  return view('contact');
});

Route::get('/blog', function() {
  return view('blog');
});

Route::get('/scholarships', function() {
  return view('scholarship');
});

Route::get('/scheducation', function() {
  return view('scheducation');
});

Route::get('/schbusiness', function() {
  return view('schbusiness');
});

Route::get('/schscience', function() {
  return view('schscience');
});

Route::get('/schoolit', function() {
  return view('schoolit');
});

Route::get('/schagriculture', function() {
  return view('schagriculture');
});

Route::get('/send', function(){
  SMSProvider::createSubscription('+254729543970', '22384', 'lifecode');
});
