<?php
if ($login === 'admin') {
    exit();
} elseif ($login <> "admin") {
    echo "You are not admin!!!<p>";
    echo '<a href="index.php">Login</a>';
    exit();
} else {
    echo "You are not admin!!!<p>";
    echo '<a href="index.php">Login</a>';
    exit();
}


