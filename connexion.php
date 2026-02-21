<?php
session_start();
require 'BD_connect.php'; 

if (isset($_POST['login'])) {
    $email = ($_POST['email']);
    $password = $_POST['password'];

    // Préparation requête
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['id_users'] = $user['id_users'];
        $_SESSION['type'] = $user['type'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Identifiants incorrects";
    }
}
?>



