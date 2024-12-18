<?php

$servername = 'localhost';
$dbport = '3307';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'memsite';

try{
$db = new PDO("mysql:host={$servername};port={$dbport};dbname={$dbname}",$dbuser,$dbpassword);

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "";
}catch(PDOException $e){
    echo $e->getMessage();
}

?>

