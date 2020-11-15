<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleDAO
 *
 * @author h.batatia
 */
abstract class ArticleDAO {
    abstract function insert($article);
    abstract function select($c) ;
    abstract function selectAll();
}
?>
