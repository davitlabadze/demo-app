<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];


if (!Validator::email($email)) {
    $errors['email'] = 'Plase provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Plase provide a valid password';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}


$user = $db->query('select * from users where email = :email',[
    'email' => $email,
])->find(); 

if($user){
    if(password_verify($password, $usr['password'])){
        login([
            'email' => $email
        ]);
    
        header('location: /');
        exit();
    }
}



return view('session/create.view.php',[
    'errors' => [
        'email' => 'No Matching account found that email address and password',
    ]
]);


