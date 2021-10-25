<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        @if(isset(Auth::user()->email))
            <script>window.location="/successlogin";</script>
        @endif

        @if ($message = Session::get('error'))
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        @endif

        @if (count($errors) > 0)
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif

        <form method="post" action="{{ url('/checklogin') }}">
            {{ csrf_field() }}
            <label for="email">Enter Email</label>
            <input type="email" name="email" />
            <label>Enter Password</label>
            <input type="password" name="password" />
            <input type="submit" name="login" value="Login" />
        </form>
    </div>
</body>
</html>