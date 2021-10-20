<?php
 try
{
	// $bdd = new PDO('mysql:host=localhost;dbname=jasonDB;charset=utf8','root','root');	
   $bdd = new PDO('mysql:host=remotemysql.com;dbname=X0YQGqfyWN;charset=utf8','X0YQGqfyWN','2rqWi3xf2n');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
