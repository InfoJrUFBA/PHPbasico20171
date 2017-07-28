<?php

require_once("../models/Business.php");

class BusinessController {

    public static function getAllBusinesses() {
        $businesss = Business::getAllBusinesses();
        return $businesss;
    }

    public static function getBusiness($id) {
        $business = Business::getBusiness($id);
        return $business;
    }

    public static function printBusinessList() {
        $businesss = self::getAllBusinesses();
        foreach ($businesss as $business) {
            echo nl2br('<img src="'.$business->logo.'" alt="" height="100" width="auto" />'."\n".$business->name."\n\n\n\n");
        }
    }

}
?>