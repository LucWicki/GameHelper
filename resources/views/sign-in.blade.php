<!DOCTYPE html>
<html>

<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="{{ asset('css/sign-in-up.css') }}">
</head>

<body class="background">
    <div class="body-container">
        <div class="form-container">
            <form action="/ " class="form" method="POST">

                <h1 class="title">Sign in</h1>

                <label for="username" class="label">Username or email</label><br>
                <input type="text" id="username" name="username" placeholder="Username or Email" required><br>

                <label for="password" class="label">Password</label><br>
                <input type="password" id="password" name="password" placeholder="Password" required><br>

                <button type="submit" href="/">Sign in</button>
                <!--TODO: redirect to profile view-->

            </form>

            <div class="sign-switch">
                <span class="button-label">Don't have an Account yet?</span>
                <button type="button" onclick="location.href='/sign-up'">Sign up</button>
                <a href="/forgot-password" class="button-label">Forgot password?</a>
            </div>
        </div>
        <div class="image-container">
            <img src="{{ asset('images/sign-in.png') }}">
        </div>
    </div>


</body>

</html>
