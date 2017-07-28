<?php

require_once("../models/Business.php"); //A função require_once("enderecoDeArquivo") chama o arquivo que está em enderecoDeArquivo. Você agora pode usar tudo que tem lá!

class BusinessController { //Essa linha define o nome de uma classe (que você vai entender melhor na próxima capacitação). Para utilizar essa classe em outro arquivo, você terá que dar require_once() com o endereço desse arquivo. Para chamar um método dessa classe, basta usar nomeDaClasse::nomeDoMetodo(), no caso do primeiro método dessa classe aqui, seria BusinessController::getAllBusinesses(). Lembrando que se você quer usar esses métodos em outra página, precisa dar require_once() lá, pra chamar esse arquivo.


    public static function getAllBusinesses() { //Esse método retorna um array de objetos do tipo Business, que tem id, nome e endereço da logo, que estão na pasta assets/images
        $businesss = Business::getAllBusinesses();
        return $businesss;
    }

    public static function getBusiness($id) { //Esse método retorna uma Business com id = $id
        $business = Business::getBusiness($id);
        return $business;
    }

    public static function printBusinessList() {
        $businesss = BusinessController::getAllBusinesses();

        foreach ($businesss as $business) {
            /*
                Você terá que utilizar um método de UserController e alterar esse echo a seguir pra resolver a segunda atividade.
                Dica: Cada $business contém o id do dono em $business->owners_id. A controller de usuários tem um método que, dado um id, descobre qual usuário tem aquele id. Você pode utilizar métodos em outros arquivos dando require_once, mas lembre que precisa usar o nome correto da classe de lá quando chamar um método. Ex.: UserController::getUser($id)
            */
            echo nl2br('<img src="'.$business->logo.'" alt="" height="100" width="auto" />'."\n".$business->name."\n\n\n\n");
        }
    }

}
?>