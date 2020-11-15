<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientMysqlDAO
 *
 * @author h.batatia
 */
include_once("entities/Client.php");
include_once("daos/ClientDAO.php");
include_once("daos/MysqlDAOManager.php");
class ClientMysqlDAO extends ClientDAO{

    function insert($c){
        $cx = MysqlDAOManager::getConnection();
        $sql = "insert into sales.client (society,contact,addres,zipcode,city,phone,fax,max_outstanding) ";
        $sql = $sql."values ('".$c->getSociety()."'";
        $sql = $sql.", '".$c->getContact()."'";
        $sql = $sql.", '".$c->getAddress()."'";
        $sql = $sql.", '".$c->getZip_code()."'";
        $sql = $sql.", '".$c->getCity()."'";
        $sql = $sql.", '".$c->getPhone()."'";
        $sql = $sql.", '".$c->getFax()."'";
        $sql = $sql.", ".$c->getMax_outstanding().")";
        $count = $cx->query($sql);
        if(!$count){
            die('Query '.$sql. 'Impossible: ' . mysqli_error($cx));
        }
        $count = mysqli_insert_id();
        MysqlDAOManager::closeConnection($cx);
        return $count;
    }
    
    function select($c) {
        ;
    }
    function selectAll(){
        $cx = MysqlDAOManager::getConnection();
        $sql = "select * from sales.client ";

        $result = $cx->query($sql);
        if(!$result){
            die('query '.$sql. 'Impossible: ' . mysqli_error($cx));
            return ;
        }

        if ($result->num_rows == 0) {
           echo "No client";
           return ;
        }
        $list = array();
        $count = 0;
        while ($row = $result->fetch_assoc()) {
           $client = new Client();
           $client->setNumber($row["num_client"]);
           $client->setSociety($row["society"]);
           $client->setContact($row["contact"]);
           $client->setAddress($row["addres"]);
           $client->setZip_code($row["zipcode"]);
           $client->setCity($row["city"]);
           $client->setPhone($row["phone"]);
           $client->setFax($row["fax"]);
           $client->setMax_outstanding($row["max_outstanding"]);
           $list[$count] = $client;
           $count++;
          }

        mysqli_free_result($result);
        MysqlDAOManager::closeConnection($cx);
        return $list;
    }
}
?>
