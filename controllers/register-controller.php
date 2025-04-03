<?php

function createUser($email, $password)
{
    $conn = dbConnect();

    $query = "INSERT INTO users (email, password) VALUES (?, ?)";

    try {
        $stmt = $conn->prepare($query);
        $stmt->execute([$email, $password]);
    } catch (PDOException $e) {
        throw new PDOException('Er is iets fout gegaan bij het uitvoeren van de database query', 0, $e);
    }
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $conn = dbConnect();

    $query = "SELECT * FROM users";

        $stmt = $conn->query($query);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            if ($user['email'] === $_POST['email']) {
                $_SESSION['error'] = 1;
            }
        }

    
    if (empty(trim($_POST["email"]))) {
        $error = '<p class="text-red-600 bg-transparent">Vul email in.</p>';
    } else if (empty(trim($_POST["password"]))) {
        $error = '<p class="text-red-600 bg-transparent">Vul wachtwoord in.</p>';
    } else if (isset($_SESSION['error'])) {
        $error = '<p class="text-red-600 bg-transparent">Email bestaat al.</p>';
        unset($_SESSION['error']);
    } else {
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        createUser(
            $_POST['email'],
            $hashedPassword
        );

        header('Location: index.php?page=login');
        exit();
    }
}
