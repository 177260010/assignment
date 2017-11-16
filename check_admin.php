<?php

if (isset($_SESSION['login'])) {
    if (isset($_SESSION['login']) <> "admin") {
        echo "You are not admin!!!<p>";
        echo '<a href="login.html">Login</a>';
        exit();
    }
} else {
    echo "You are not admin!!!<p>";
    echo '<a href="login.html">Login</a>';
    exit();
}


