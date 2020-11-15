<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MysqlDAOManager
 *
 * @author h.batatia
 */
class MysqlDAOManager {


    static function getConnection(){
          $hostname = "localhost:3306";
	  $user     = "root";
	  $password = "root";
	  $dbname = "sales";
        // Connexion permanente au serveur MySQL : mysql_Pconnect

        $conn = new mysqli($hostname, $user, $password, $dbname);

       
        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            die('Impossible to connect : ' . mysqli_connect_error() . PHP_EOL);
        }

        return $conn;
    }

    static function closeConnection($link){
        mysqli_close($link);
    }
}
?>
