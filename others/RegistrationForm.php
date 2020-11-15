<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationForm
 *
 * @author h.batatia
 */
class RegistrationForm {
    private  $society;
    private  $contact;
    private  $address;
    private  $zip_code;
    private  $city;
    private  $phone;
    private  $fax;
    private  $max_outstanding;

    public function __construct() {
        $this->society = $_REQUEST["society"];
        $this->contact = $_REQUEST["contact"];
        $this->address = $_REQUEST["address"];
        $this->zip_code = $_REQUEST["zip_code"];
        $this->city = $_REQUEST["city"];
        $this->phone = $_REQUEST["phone"];
        $this->fax = $_REQUEST["fax"];

        $this->max_outstanding = $_REQUEST["max_outstanding"];

    }

    function  getSociety(){
        return $this->society;
    }
    function  getContact(){
        return $this->contact;
    }
    function  getAddress(){
        return $this->address;
    }
    function  getZip_code(){
        return $this->zip_code;
    }
    function  getCity(){
        return $this->city;
    }
    function  getPhone(){
        return $this->phone;
    }
    function  getFax(){
        return $this->fax;
    }
    function  getMax_outstanding(){
        return $this->max_outstanding;
    }
}
?>
