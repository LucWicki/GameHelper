<!DOCTYPE html>
<html>

<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="{{ asset('css/sign-in-sign-up.css') }}">
</head>

<body class="background">

    <form action="/" class="form" method="POST">

        <h1 class="title">Sign in</h1>

        <label for="username" class="label">Username or email</label><br>
        <input type="text" id="username" name="username" placeholder="Username or Email" required><br>

        <label for="password" class="label">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>

        <button type="submit" href="/">Sign in</button>
        <!--TODO: redirect to profile view-->

    </form>
    <div class="image-container">
        <img
            src="https://64.media.tumblr.com/2e3c84f45ba7443dd9bfa213ee4204d4/ceba2e2eded6cae7-b4/s1280x1920/dd985d2e8b8ef8eebd881376829f461a464c9ec4.png">
    </div>

    <div class="sign-switch">
        Don't have an Account yet?<br>
        <button type="button" onclick="location.href='/sign-up'">Sign up</button>
        <a href="/forgot-password">Forgot password?</a>
    </div>

</body>

</html>
