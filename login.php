<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'admin') {
    header('Location: dashboard.html');
} else {
    echo 'Неверное имя пользователя или пароль';
}
?>