<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CatalogRoute
 *
 * @author h.batatia
 */
//include('daos/DAOFactory.php');
class CatalogRoute {
    function execute(){
        $daoArticle = DAOFactory::createArticleDAO();
        $list = $daoArticle->selectAll();
        return $list;
    }
}
?>
