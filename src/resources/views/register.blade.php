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
    <h2 class="login-form__heading content__heading">register</h2>
    <div class="login-form__inner">
    <form class="login-form__form" action="/register" method="post">
        @csrf
        <div class="login-form__group">
        <label class="login-form__label" for="email">名前</label>
        <input class="login-form__input" type="text" name="name" id="name" placeholder="例: 太郎">
        <p class="register-form__error-message">
            @error('name')
            {{ $message }}
            @enderror
        </p>
        </div>
        <div class="login-form__group">
        <label class="login-form__label" for="email">メールアドレス</label>
        <input class="login-form__input" type="mail" name="email" id="email" placeholder="例: test@example.com">
        <p class="register-form__error-message">
            @error('email')
            {{ $message }}
            @enderror
        </p>
        </div>
        <div class="login-form__group">
        <label class="login-form__label" for="password">パスワード</label>
        <input class="login-form__input" type="password" name="password" id="password" placeholder="例: coachtech1106">
        <p>
            @error('password')
            {{ $message }}
            @enderror
        </p>
        </div>
        <input class="login-form__btn btn" type="submit" value="ログイン">
    </form>
    </div>
</div>
</body>

</html>