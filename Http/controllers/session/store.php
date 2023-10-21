<?php


use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();
if($form ->validate($email,$password)){
    $auth = new Authenticator();

    if((new Authenticator)->attempt($email,$password)){
        redirect("/");
    }
    
    $form->error('email', 'No Matching account found that email address and password');

}


return view('session/create.view.php', [
    'errors' => $form->errors()
]);







