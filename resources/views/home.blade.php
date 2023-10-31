@if(session()->has('user_session'))
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <Center> <h1> Welcome!! 
    You are logged in..</h1> </Center>
    <Center> <h1>This is my home page</h1> </Center>
    <a href="{{url('/logout-user')}}">Logout</a>
</body>
</html>

    
@else
    <script>window.location="{{url('session-form')}}"</script>
@endif