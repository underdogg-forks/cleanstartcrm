<?php

Route::get('/notifications/alerts/', function () {
return view('notifications.alerts');
});
Route::get('/notifications/badge/', function () {
return view('notifications.badge');
});
Route::get('/notifications/modals/', function () {
return view('notifications.modals');
});
