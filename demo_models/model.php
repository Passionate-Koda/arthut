<?php
     define("DBNAME", 'arthutco_blog');
     define("DBUSER", 'arthutco_admin');
     define("DBPASS", 'Arthut@.02.com');

         try{

           $conn = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);

           $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         }
         catch(PDOException $e) {
                  die("Could Not Connect");
       }

 ?>
