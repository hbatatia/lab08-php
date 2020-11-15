<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientView
 *
 * @author h.batatia
 */
class ClientView {
    function diplay($client){
        include('./header.php');

        echo "<h1>Client registered</h1>";
        echo "<p>Welcome " . $client->getSociety().", ".$client->getContact() . "</p>";
        echo "<p>Your ID is " . $client->getNumber() . "<p>";
        include('./footer.php');
     }
}
?>
