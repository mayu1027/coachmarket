<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // ここでトークンを用意しておく
    $token = csrf_token();

    // HEREDOCの中には $token だけを埋め込む（?? を使わない）
    return <<<HTML
<!doctype html>
<html><head><meta charset="utf-8"><title>HOME</title></head>
<body>
  <h1>ログインできました！</h1>
  <form method="POST" action="/logout">
    <input type="hidden" name="_token" value="$token">
    <button type="submit">ログアウト</button>
  </form>
</body>
</html>
HTML;
})->middleware('auth');

// 念のため /home に来ても / へ
Route::redirect('/home', '/');

// （任意）保険で /login GET を明示
Route::get('/login', function () {
    return view('login'); // resources/views/login.blade.php を表示
})->name('login');
