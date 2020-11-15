<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CatalogView
 *
 * @author h.batatia
 */
class CatalogView {
    function diplay($catalog){
        include('./header.php');

        echo "<h1>Catalog</h1>";
        echo "<p>Catalog <b>" . count($catalog) . "</b> products</p>";
        echo "<table id='catalog'>";
        for($i=1;$i < count($catalog);$i=$i+1){
            echo "<tr>";
            $product = $catalog[$i];
            echo "<td><a href='controller.php?action=4&id=". $product->getReference() . "'>" . $product->getReference() . "</a></td>";
            echo "<td>" . $product->getName() . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        include('./footer.php');
     }
}
?>
