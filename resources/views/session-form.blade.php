<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/session-form-submit')}}" method="post">
        @csrf 
        Username<input type="text" name="username"/> <br><br>
        Password<input type="password" name="password"/> <br><br>
        <input type="submit" name="s">
    </form>
</body>
</html>