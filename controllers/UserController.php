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
        for ($i=0; $i<sizeof($users); $i++) {
            $menor=$i;
            for ($j=0; $j<sizeof($users); $j++) {
                if ($users[$j]->name>$users[$menor]->name) {
                    $menor=$j;
                }
                $aux=$users[$i];
                $users[$i]=$users[$menor];
                $users[$menor]=$aux;
            }
        }
        foreach ($users as $user) {
            echo nl2br("Nome: ".$user->name."\n"."Idade: ".$user->age."\n\n");
        }
    }

}
?>