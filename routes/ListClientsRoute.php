<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ListClientsRoute
 *
 * @author h.batatia
 */

class ListClientsRoute {
    function execute(){

        $daoClient = DAOFactory::createClientDAO();
        $list = $daoClient->selectAll();
        

        return $list;
    }
}
?>
