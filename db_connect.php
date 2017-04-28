<?php
 $dsn = 'mysql:host=sql1.njit.edu;dbname=sp2254';
 $username = 'sp2254';
 $password = 'U4Y9emUe6';
 try{
   $db = new PDO($dsn,$username,$password);
 }catch(PDOException $e){
   $error_message= $e->getMessage();
   echo $error_message;
   exit();
 }  
 ?>
