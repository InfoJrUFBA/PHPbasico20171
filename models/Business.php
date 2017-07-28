<?php

class Business {

    public $id;
    public $name;
    public $logo;
    public $owners_id;

    public static function firstNames() {
        return array("Apple", "Microsoft", "Coca-Cola", "Pepsi", "ASUS", "Sony", "Nintendo", "Padaria do Zé", "Zeca's Bar", "Nestle");
    }

    public static function lastNames() {
        return array("Corporations", "Incorporate", "Corp.", "Inc.", "Org.", "Entertainment", "Industries", "Ind.", "Associated", "Conglomerate");
    }

     function __construct($attributes = array()) {
        if (!empty($attributes)) {
            $this->id = array_key_exists('id', $attributes) ? $attributes['id'] : '';
            $this->name = array_key_exists('name', $attributes) ? $attributes['name'] : '';
            $this->logo = array_key_exists('logo', $attributes) ? $attributes['logo'] : '';
        }
    }

    public static function fillBusinesses($max) {
        $firstNames = self::firstNames();
        $lastNames = self::lastNames();
        $businesses = array();
        $arr = array();
        $max = rand($max/2, $max);
        for($i=0; $i<$max; $i++){
            $arr['id'] = $i;
            $arr['name'] = $firstNames[array_rand($firstNames)]." ".$lastNames[array_rand($lastNames)];
            $arr['owners_id'] = rand(0, 20);
            $logos = scandir("../assets/images");
            while(true) {
                $logo = $logos[array_rand($logos)];
                if($logo != "." && $logo != "..") {
                    break;
                }
            }
            $arr['logo'] = "../assets/images/".$logo;
            $businesses[$i] = new Business($arr);
        }
        return $businesses;
    }
    
    public static function getAllBusinesses() {
        return self::fillBusinesses(20);
    }

    public static function getBusiness($id) {
        $firstNames = self::firstNames();
        $lastNames = self::lastNames();
        $arr = array();
        $arr['id'] = $id;
        $arr['name'] = $firstNames[array_rand($firstNames)]." ".$lastNames[array_rand($lastNames)];
        $arr['owners_id'] = rand(0, 20);
        $logos = scandir("../assets/images");
        while(true) {
            $logo = $logos[array_rand($logos)];
            if($logo != "." && $logo != "..") {
                break;
            }
        }
        $arr['logo'] = "../assets/images/".$logo;
        $business = new Business($arr);
        return $business;
    }
}
?>