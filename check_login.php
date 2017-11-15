<?php
function check_login()
{
    if (!isset($_COOKIE['login'])) {
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login'] <> "TRUE") {
                $login = 'false';
                return $login;
                exit();
            } elseif ($_SESSION['login'] = "TRUE") {
                $login = 'true';
                return $login;
                exit();
            }

        } else {
            $login = 'false';
            return $login;
            exit();
        }
    } else {
        $_SESSION['login'] = "TRUE";
        $_SESSION['userid'] = $_COOKIE['id'];
        $_SESSION['user'] = $_COOKIE['user'];
        $_SESSION['pass'] = $_COOKIE['pass'];
        $login = 'true';
        return $login;
        exit();
    }
}