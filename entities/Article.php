<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author Hadj
 */
class Article {
    private $reference;
    private $name;
    private $category;
    private $price;
    private $vat;
    private $stock;
    private $critical_stock;
    private $supplier;
   
    
    function getReference(){
        return $this->reference;
    }
    function  getName(){
        return $this->name;
    }
    function  getCategory(){
        return $this->category;
    }
    function  getPrice(){
        return $this->price;
    }
    function  getVat(){
        return $this->vat;
    }
    function  getStock(){
        return $this->stock;
    }
    function  getCritical_stock(){
        return $this->critical_stock;
    }
    function  getSupplier(){
        return $this->supplier;
    }
  

    function  setReference( $_ref){
        $this->reference =  $_ref;
    }
    function  setName( $_name){
        $this->name =  $_name;
    }
    function  setCategory( $_cat){
        $this->category = $_cat;
    }
    function  setPrice( $_price){
        $this->price = $_price;
    }
    function  setVat( $_vat){
        $this->vat = $_vat;
    }
     function  setStock( $_stock){
        $this->stock = $_stock;
    }
    function  setCritical_stock( $_seuil){
        $this->critical_stock = $_seuil;
    }
    function  setSupplier( $_supplier){
        $this->supplier = $_supplier;
    }
   
}
?>
