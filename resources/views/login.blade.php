<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | Dan Aleko</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/login.css">
    @vite('resources/css/app.css')


</head>

<body>
    <div class="wrapper">
        <form method="POST" action="" class="card py-4 px-4">
            @if (Session::get('fail'))
            <div class="text-center">
                {{ Session::get('fail') }}
            </div>
            @endif
            @csrf
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Dont have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>