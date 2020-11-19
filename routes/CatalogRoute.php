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

class CatalogRoute {
    function execute(){
        $daoArticle = DAOFactory::createArticleDAO();
        $list = $daoArticle->selectAll();
        return $list;
    }
}
?>
