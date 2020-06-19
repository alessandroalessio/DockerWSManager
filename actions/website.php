<?php 
require '../app/init.php';
use DockerManager\Website AS Website;

if ( !isset($_GET['mode']) ) die('Unable to load action');

$Website = New Website();

switch ( $_GET['mode'] ){
    case 'add':
        if ( !$Website->check_exist($_GET['website_address']) ){
            $o = shell_exec('cd '.getenv('APACHE_DOCROOT').'; mkdir '.$_GET['website_address'].'; cd '.getenv('APACHE_DOCROOT').$_GET['website_address'].'; mkdir public_html;');
        }
        header('location: /?success=Website succesfully created');
        die();
    break;
}

?>