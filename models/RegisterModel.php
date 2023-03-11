<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $name;
    public string $lastname;
    public string $email;
    public string $password;
    public string $confirmPassword;

    public function register()
    {
        echo "Yeni kullanici oluştur"; 
    }

    public function rules(): array
    {
        return [];
    }

}
