<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('style/adm-login.css')}}">
    <title>Control Panel: Login</title>
</head>
<body>
    <h1>Control Panel</h1>
    <div class="container">
        <form action="{{ route('login-c') }}" method="post">
            @csrf
            <label for="name">Name:</label><br>
            <input class="text" type="text" name="name" id="name" placeholder="your name..."><br>
            @if ($errors->has('name'))
                <span class="error">{{ $errors->first('name') }}</span>
            @endif
            <br>
            <label for="password">Password:</label><br>
            <input class="text" type="password" name="password" id="password" placeholder="your password..."><br>
            @if ($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
            @endif
            <br><br>
            <div class="submit">
                <input type="submit" value="Log In">
            </div>
        </form>
    </div>
</body>
</html>