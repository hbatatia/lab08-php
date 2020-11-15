<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientDAO
 *
 * @author h.batatia
 */
abstract class ClientDAO {
    abstract function insert($client);
    abstract function select($c) ;
    abstract function selectAll();

    
}
?>
