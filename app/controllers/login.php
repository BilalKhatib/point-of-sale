<?php

ini_set('display_errors', 1);

$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    
    // same as $arr = ['email'=>$_POST['email']] same as $arr['email'] = $_POST['email']
    if($row =  where(['email'=>$_POST['email']], 'users'))
    {
        
        if(password_verify($_POST['password'] , $row[0]['password']))
        {
            authenticate($row[0]);
            redirect('home');
        }else{
            $errors['password'] = "wrong password";
        }
    }else{
        $errors['email'] = "wrong email";
    }

}

views_path("auth/login");