<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<p><strong>User Registration</strong></p>
<form method="post" action="register_process.php">
    <table width="400" border="0" cellspacing="5">
        <tr>
            <td><label>Username: </label></td>
            <td><input name="username" type="text" required autofocus /></td>
        </tr>
        <tr>
            <td><label>Password: </label></td>
            <td><input name="password" type="password" required /></td>
        </tr>
        <tr>
            <td>Phone Number: </td>
            <td><input name="tel" type="tel" pattern="[0-9]{8}" placeholder="12345678"/></td>
        </tr>
        <tr>
            <td>Email Address: </td>
            <td><input name="email" type="email" placeholder="you@example.com" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Submit" />
                <input type="reset" name="Reset" value="Reset" /></td>
        </tr>
    </table>
</form>
</body>
</html>
