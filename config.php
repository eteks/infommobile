<?php
// define("DB_SERVER","localhost");
// define("DB_SERVER_USERNAME",'atomickauser');
// define("DB_SERVER_PASSWORD",'Atm^123a');
// define("DB_DATABASE",'atomicka');

define("DB_SERVER","localhost");
define("DB_SERVER_USERNAME",'root');
define("DB_SERVER_PASSWORD",'');
define("DB_DATABASE",'atomicka');
$con =  mysql_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD)or die(mysql_error());
mysql_select_db(DB_DATABASE,$con) or die(mysql_error("Database is not Connected"));
?>
