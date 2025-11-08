<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
</head>

<body>
    <div class="app">
    <header class="header">
        <h1 class="header__heading">FashionablyLate</h1>
    </header>
    <div class="content">
    </div>
    </div>

    <div class="login-form">
    <h2 class="login-form__heading content__heading">Login</h2>
    <div class="login-form__inner">
    <form class="form" action="/logout" method="post">
        @csrf
        ログアウト完了
    </form>
    </div>
</div>
</body>

</html>