<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOFactory
 *
 * @author h.batatia
 */
include('daos/ClientMysqlDAO.php');
include('daos/ArticleMysqlDAO.php');

class DAOFactory {

    static function createClientDAO() {
        $dao = new ClientMysqlDAO();
        return $dao;
    }

    static function createArticleDAO() {
        $dao = new ArticleMysqlDAO();
        return $dao;
    }

}

?>
