<?php
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>
<form method="post" action="login_process.php">
    <div class="container">
        <table>
            <tr>
                <td><label>Username: </label></td>
                <td><input type="text" placeholder="Username" name="username" required></td>
            </tr>
            <tr>
                <td><label>Password: </label></td>
                <td><input type="password" placeholder="Password" name="password" required></td>
            </tr>
        </table>
        <input type="checkbox" value="checked">Remind Me
        <input type="submit" value="Login">
    </div>
</form>
<a href="register.html">Register</a>
</body>
</html>

