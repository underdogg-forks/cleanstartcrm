<?php

Route::get('/404/', function () {
return view('errors.500');
});
Route::get('/500/', function () {
return view('errors.500');
});
