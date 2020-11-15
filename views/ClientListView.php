<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientListView
 *
 * @author h.batatia
 */
class ClientListView {
    function diplay($list){
        include('./header.php');

        echo "<h1>List of clients</h1>";
        echo "<table id='clients'>";
        echo "<p>List <b>" . count($list) . "</b> clients</p>";
        for($i=1;$i < count($list);$i=$i+1){
            $client = $list[$i];
            echo "<tr>";
            echo "<td><a href='controller.php?action=3&id=". $client->getNumber() . "'>" . $client->getNumber() . "</a></td>";
            echo "<td>" . $client->getSociety() . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        include('./footer.php');
     }
}
?>
