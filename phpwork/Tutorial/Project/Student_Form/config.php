<?php

session_start();

define('DBNAME','form');
define('DBUSER','root');
define('DBPASS','');
define('DBHOST','localhost');

try{
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Your page connected to the database. Succeessfully\n";
}catch(PDOException $e){
 echo "Error:->Connection Failed: " . $e->getMessage();
}

?>