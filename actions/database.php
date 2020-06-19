<?php 
require '../app/init.php';
use DockerManager\Database AS Database;

if ( !isset($_GET['mode']) ) die('Unable to load action');

$Database = New Database();

switch ( $_GET['mode'] ){
    case 'add':
        $Database->create($_GET['db_name']);
    break;
}

header('location: /');
die();
?>