<?php

class User {

    public $id;
    public $name;
    public $age;
    public $level;
    public $password;
    public $employer;

    public static function firstNames() {
        return array("Jürgen", "JP", "Luan", "Fernanda", "Ingrid", "Adeilson", "Barbosa", "Mateus com C", "Rafael", "Ana Carolina", "Gabriele", "Iago", "Vinicius", "Isys", "Jeff", "Davi", "Ian", "FormigTeen", "Marino", "Hofstede");
    }

    public static function lastNames() {
        return array("Mussolini", "Gandhi", "Caesar", "Charlemagne", "Potter", "Hitler", "Luthor", "Skywalker", "Zuero", "Vader", "Lula", "do Balacubaco", "Stark", "a Rainha do Sambódromo", "Lannister", "Parker", "Barril", "Pobre", "the Hun", "McCain", "Rousseff");
    }

     function __construct($attributes = array()) {
        if (!empty($attributes)) {
            $this->id = array_key_exists('id', $attributes) ? $attributes['id'] : '';
            $this->name = array_key_exists('name', $attributes) ? $attributes['name'] : '';
            $this->age = array_key_exists('age', $attributes) ? $attributes['age'] : '';
            $this->level = array_key_exists('level', $attributes) ? $attributes['level'] : '';
            $this->password = array_key_exists('password', $attributes) ? $attributes['password'] : '';
        }
    }

    public static function fillUsers($max) {
        $firstNames = self::firstNames();
        $lastNames = self::lastNames();
        $users = array();
        $arr = array();
        $max = rand($max/2, $max);
        for($i=0; $i<$max; $i++){
            $arr['id'] = $i;
            $arr['name'] = $firstNames[array_rand($firstNames)]." ".$lastNames[array_rand($lastNames)];
            $arr['age'] = rand(16, 80);
            $arr['level'] = rand(1, 3);
            $arr['password'] = password_hash($arr['name'], PASSWORD_DEFAULT);
            $arr['employer'] = rand(0, 10);
            $users[$i] = new User($arr);
        }
        return $users;
    }
    
    public static function getAllUsers() {
        return self::fillUsers(40);
    }

    public static function getUser($id) {
        $firstNames = self::firstNames();
        $lastNames = self::lastNames();
        $arr = array();
        $arr['id'] = $id;
        $arr['name'] = $firstNames[array_rand($firstNames)]." ".$lastNames[array_rand($lastNames)];
        $arr['age'] = rand(16, 80);
        $arr['level'] = rand(1, 3);
        $arr['password'] = password_hash($arr['name'], PASSWORD_DEFAULT);
        $arr['employer'] = rand(0, 10);
        $user = new User($arr);
        return $user;
    }
}

$c = 'B';
var_dump($c >= 'A' && $c <= 'Z');
var_dump($c >= 'a' && $c <= 'z');
echo $c+32;
?>