<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors  = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Plase provide a valid email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Plase provide a password of at least seaven characters.';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('location: /');
    exit();
} else {
    $db->query('INSERT INTO users (email,password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

   
    login($user);

    header('location: /');
    exit();
}
