<?php

$error = '';

function login()
{
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $conn = dbConnect();

    if (isset($email) || isset($password)) {

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $query = $conn->prepare($sql);
        $query->execute();
        $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
        if (isset($fetch) && $fetch != null && password_verify($password, $fetch[0]['password'])) {
            $_SESSION['user'] = $fetch;
            header('location: index.php?page=home');
            exit();
        } else {
            return false;
        }
    }

    return false;
}
