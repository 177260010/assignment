<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['userid']);
unset($_SESSION['user']);
unset($_SESSION['pass']);

if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
}

if (isset($_COOKIE['login'])){
    setcookie('login', 'true', time() - (86400 * 7), "/");
    setcookie('id', $userid['id'], time() - (86400 * 7), "/");
    setcookie('user', $username, time() - (86400 * 7), "/");
    setcookie('pass', $password, time() - (86400 * 7), "/");

}

session_destroy();

header('Location: index.php')

?>