<?php
// подключаем файлы ядра
require_once 'application/core/model.php';
require_once 'application/core/view.php';
require_once 'application/core/controller.php';
require_once 'application/core/route.php'; 
//echo 'bootstrap-OK!<br>';
Route::start(); // запускаем маршрутизатор