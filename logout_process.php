<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['userid']);
unset($_SESSION['user']);
unset($_SESSION['pass']);
if (isset($_SESSION['admin'])){
    unset($_SESSION['admin']);
}
session_destroy();

?>
You have logout.
<p>
    <a href="index.html">Login</a><p>