<?php

require_once(__DIR__."/../models/User.php");

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

        //Guarda o tamanho da array $users na variável $tam
        $tam = sizeof($users);

        //Aplica um selection sort que ordena de acordo com o nome
        for ($i=0; $i <($tam-1) ; $i++) { 
            $min = $i;
            
            for($j=($i+1); $j<$tam; $j++) {
                if($users[$j]->name < $users[$min]->name){
                    $min = $j;
                }
            }

            if($users[$i] != $users[$min]){
                $aux = $users[$i];
                $users[$i] = $users[$min];
                $users[$min] = $aux;
            }
        }

        foreach ($users as $user) {
            echo nl2br("Nome: ".$user->name."\n"."Idade: ".$user->age."\n\n");
        }      
    }

}

?>