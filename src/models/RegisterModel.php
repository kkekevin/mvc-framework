<?php
namespace app\models;

use app\Model;

class RegisterModel extends Model
{
    public string $firsname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $confirmPassword;

    public function register ()
    {
        echo 'creating a new user';
    }


}