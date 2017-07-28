<?php

require_once("../models/User.php"); //A função require_once("enderecoDeArquivo") chama o arquivo que está em enderecoDeArquivo. Você agora pode usar tudo que tem lá!

class UserController { //Essa linha define o nome de uma classe (que você vai entender melhor na próxima capacitação). Para utilizar essa classe em outro arquivo, você terá que dar require_once() com o endereço desse arquivo. Para chamar um método dessa classe, basta usar nomeDaClasse::nomeDoMetodo(), no caso do primeiro método dessa classe aqui, seria UserController::getAllUsers(). Lembrando que se você quer usar esses métodos em outra página, precisa dar require_once() lá, pra chamar esse arquivo.

    public static function getAllUsers() { //Esse método retorna um array de objetos do tipo User, que tem id, nome, idade, level, senha, e id da empresa onde trabalha
        $users = User::getAllUsers();
        return $users;
    }

    public static function getUser($id) { //Esse método retorna um User com id = $id
        $user = User::getUser($id);
        return $user;
    }

    public static function printUserList(){ //Pra chamar esse método em outro arquivo dê um UserController::printUserList() lá, depois de dar require_once() com endereço desse arquivo
        $users = UserController::getAllUsers(); //Aqui ele salva um array de usuarios em $users

        /*
            seu código da primeira atividade aqui
            você precisa ordenar os objetos no array $users em ordem alfabética
            dica: ($stringA < $stringB) é verdade se $stringA vem antes de $stringB alfabeticamente
        */

        foreach ($users as $user) { //aqui ele vai navegar o array $users e imprimir nome e idade em cada iteração
            echo nl2br("Nome: ".$user->name."\n"."Idade: ".$user->age."\n\n");
        }
    }

}
?>