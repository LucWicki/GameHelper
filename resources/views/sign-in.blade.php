<!DOCTYPE html>
<html>

<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}">
</head>

<body>

    <form action="/" class="decor" method="POST">

        <h1>Sign in</h1>

        <label for="username">Username or email</label><br>
        <input type="text" id="username" name="username" placeholder="Username or Email" required><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>

        <button type="submit" href="/">Sign in</button>
        <!--TODO: redirect to profile view-->

    </form>

    <div>
        Don't have an Account yet?
        <button type="button" onclick="location.href='/sign-up'">Sign up</button><br><br>
    </div>

    <a href="/forgot-password">Forgot password?</a>

</body>

</html>
