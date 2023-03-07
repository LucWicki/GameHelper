<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="{{ asset('css/sign-up.css') }}">
</head>

<body class="background">
    <form action="submit-form.php" class="form" method="POST">

        <h1 class="title">Sign up</h1>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="password" required>

        <label for="passwordrepeat">Repeat password</label>
        <input type="password" id="passwordrepeat" name="passwordrepeat" placeholder="password" required>
        <button type="button" onclick="location.href='/sign-up'">Sign up</button>
    </form>
    <div class="image-container">
        <img src="{{ asset('images/sign-up.png') }}">
    </div>
    <div class="sign-switch">
        <span class="button-label">Already have an Account?</span>
        <button type="button" onclick="location.href='/sign-in'">Sign in</button><br><br>
    </div>

</body>

</html>
