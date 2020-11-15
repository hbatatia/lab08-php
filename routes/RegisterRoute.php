<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author h.batatia
 */
include('daos/DAOFactory.php');

class RegisterRoute {

    function execute($form){
        $client = new Client();
        $client->setSociety($form->getSociety());
        $client->setContact($form->getContact());
        $client->setAddress($form->getAddress());
        $client->setZip_code($form->getZip_code());
        $client->setCity($form->getCity());
        $client->setPhone($form->getPhone());
        $client->setFax($form->getFax());
        $client->setMax_outstanding($form->getMax_outstanding());

        $daoClient = DAOFactory::createClientDAO();
        $n = $daoClient->insert($client);

        $client->setNumber($n);
        return $client;
    }
}
?>
