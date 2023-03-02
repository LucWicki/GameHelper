<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="{{ asset('css/sign-up.css') }}">
</head>

<body>
    <form action="submit-form.php" class="decor" method="POST">

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

    <div>
        Already have an Account?
        <button type="button" onclick="location.href='/sign-in'">Sign in</button><br><br>
    </div>

</body>

</html>
