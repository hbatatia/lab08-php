<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author h.batatia
 */


class Client {
    private $number;
    private $society;
    private $contact;
    private $address;
    private $zip_code;
    private $city;
    private $phone;
    private $fax;
    private $max_outstanding;

    function getNumber(){
        return $this->number;
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

    function  setNumber( $n){
        $this->number =  $n;
    }
    function  setSociety( $s){
        $this->society =  $s;
    }
    function  setContact( $s){
        $this->contact = $s;
    }
    function  setAddress( $s){
        $this->address = $s;
    }
    function  setZip_code( $s){
        $this->zip_code = $s;
    }
    function  setCity( $s){
        $this->city = $s;
    }
    function  setPhone( $s){
        $this->phone = $s;
    }
    function  setFax( $s){
        $this->fax = $s;
    }
    function  setMax_outstanding( $s){
        $this->max_outstanding = $s;
    }

}


?>
