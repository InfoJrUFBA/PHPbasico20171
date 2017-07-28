<?php

require_once("../models/User.php");

class UserController {

    public static function getAllUsers() {
        $users = User::getAllUsers();
        return $users;
    }

    public static function getUser($id) {
        $user = User::getUser($id);
        return $user;
    }

    public static function printUserList(){
        $users = self::getAllUsers();
        foreach ($users as $user) {
            echo nl2br("Nome: ".$user->name."\n"."Idade: ".$user->age."\n\n");
        }
    }

}
?>