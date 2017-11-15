<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
session_start();

echo "<nav class='navbar navbar-inverse'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <a class='navbar-brand' href=''#'>Vehicle Booking</a>
    </div>
    <ul class='nav navbar-nav'>
      <li class='active'><a href=index.php>Home</a></li>
      <li class='dropdown'>
        <a class='dropdown-toggle' data-toggle='dropdown' href=''#'>Page 1
<span class='caret'></span></a>
        <ul class='dropdown-menu'>
          <li><a href=''#'>Page 1-1</a></li>
          <li><a href=''#'>Page 1-2</a></li>
          <li><a href=''#'>Page 1-3</a></li>
        </ul>
      </li>
      <li><a href=''#'>Page 2</a></li>
      <li><a href=''#'>Page 3</a></li>
    </ul>";
include "check_login.php";
$login = check_login();
if ($login === "true" && isset($_SESSION['login'])) {
    $username = $_SESSION['user'];
    echo "<ul class=\"nav navbar-nav navbar-right\">
      <li class='dropdown'>
        <a class='dropdown-toggle' data-toggle='dropdown' href=''#'><span class=\"glyphicon glyphicon-user\"></span>$username
<span class='caret'></span></a>
        <ul class='dropdown-menu'>
          <li><a href=user_edit.php>Edit User Profle</a></li>
        </ul>
      </li>
      <li><a href='logout_process.php'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>
    </ul>";
} else echo "
       <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=register.php><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
      <li><a href=login.php><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
    </ul>";
echo "</div>
</nav>";
?>