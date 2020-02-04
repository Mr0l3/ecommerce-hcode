<?php

namespace Hcode\Model;

use Hcode\DB\Sql;
use Hcode\Model\Model;

class User extends Model{
    const SESSION = "User";

    public static function login(string $username, string $pass)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(":LOGIN"=>$username));

        if(count($results) == 0){
            throw new \Exception("Usuário e/ou senha inválidos");
        }

        $result = $results[0];
        if(!password_verify($pass, $result["despassword"])){
            throw new \Exception("Usuário e/ou senha inválidos");
        }else{
            $user = new User();
            $user->setData($results);
            $_SESSION[User::SESSION] = $user->getData();
            return $user;
        }
    }


    public static function verifyLogin(bool $inAdmin = false)
    {
        if(!isset($_SESSION[User::SESSION]) || !$_SESSION[User::SESSION] || (int)$_SESSION[User::SESSION] < 1 || (bool)$_SESSION[User::SESSION][0]["inadmin"] !== $inAdmin){
            header("Location: /admin/login");
            exit;
        }
    }


    public static function logout()
    {
        $_SESSION[User::SESSION] = NULL;
    }
}