<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control Panel: Login</title>
</head>
<body>
    <form action="/dashboard" method="post">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="pwd">
    </form>
</body>
</html>