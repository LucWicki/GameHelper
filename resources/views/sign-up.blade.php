<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="{{ asset('css/sign-in-up.css') }}">
</head>

<body class="background">
    <div class="body-container">
        <div class="form-container">
            <form action="/" class="form" method="POST">

                <h1 class="title">Sign up</h1>

                <label for="username" class="label">Username</label><br>
                <input type="text" id="username" name="username" placeholder="Username" required><br>

                <label for="email" class="label">Email</label><br>
                <input type="text" id="email" name="email" placeholder="Email" required><br>


                <label for="password" class="label">Password</label><br>
                <input type="password" id="password" name="password" placeholder="Password" required><br>

                <button type="submit" href="/">Sign up</button>
                <!--TODO: redirect to profile view-->

            </form>

            <div class="sign-switch">
                <span class="button-label">Already have an account?</span>
                <button type="button" onclick="location.href='/sign-in'">Sign in</button>
            </div>
        </div>
        <div class="image-container">
            <img src="{{ asset('images/sign-up.png') }}">
        </div>
    </div>


</body>

</html>
