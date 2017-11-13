<?php

if (isset($_SESSION['admin'])) {
    if (isset($_SESSION['admin']) <> "TRUE") {
        echo "You are not admin!!!<p>";
        echo '<a href="login.html">Login</a>';
        exit();
    }
} else {
    echo "You are not admin!!!<p>";
    echo '<a href="login.html">Login</a>';
    exit();
}


