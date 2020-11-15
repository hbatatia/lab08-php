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
include_once("entities/Article.php");
include_once("daos/ArticleDAO.php");
include_once("daos/MysqlDAOManager.php");
class ArticleMysqlDAO extends ArticleDAO{

    function insert($article){
        $cx = MysqlDAOManager::getConnection();
        $sql = "insert into sales.article (reference,name,category,price,vat,stock, critical_stock,supplier) ";
        $sql = $sql."values ('".$article->getReference()."'";
        $sql = $sql.", '".$article->getName()."'";
        $sql = $sql.", '".$article->getCategory()."'";
        $sql = $sql.", '".$article->getPrice()."'";
        $sql = $sql.", '".$article->getVat()."'";
        $sql = $sql.", '".$article->getStock()."'";
        $sql = $sql.", '".$article->getCritical_stock()."'";
        $sql = $sql.", ".$article->getSupplier().")";
        $count = $cx->query($sql);
        if(!$count){
            die('query '.$sql. 'Impossible: ' . mysqli_error($cx));
        }
        $count = mysqli_insert_id($cx);
        MysqlDAOManager::closeConnection($cx);
        return $count;
    }
 
    
    function select($c) {
        ;
    }

    function selectAll(){
        $cx = MysqlDAOManager::getConnection();
        $sql = "select * from sales.article ";

        $result = $cx->query($sql);
        if(!$result){
            die('query '.$sql. 'Impossible: ' . mysql_error($cx));
            return ;
        }

        if ($result->num_rows == 0) {
           echo "No article";
           return ;
        }
        $list = array();
        $count = 0; 
        while ($row = $result->fetch_assoc()) {
           $article = new Article();
           $article->setReference($row["reference"]);
           $article->setName($row["name"]);
           $article->setCategory($row["category"]);
           $article->setPrice($row["price"]);
           $article->setVat($row["vat"]);
           $article->setStock($row["stock"]);
           $article->setCritical_stock($row["critical_stock"]);
           $article->setSupplier($row["supplier"]);
           $list[$count] = $article;
           $count++;
          }

        mysqli_free_result($result);
        MysqlDAOManager::closeConnection($cx);
        return $list;
    }
}
?>
