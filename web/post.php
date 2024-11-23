<?php
// post.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');

    if ($username !== '') {
        $_SESSION['username'] = $username;
    }
}

header('Location: index.php');
exit;
