<?php 
require '../app/init.php';
use DockerManager\Website AS Website;

if ( !isset($_GET['mode']) ) die('Unable to load action');

$Website = New Website();

switch ( $_GET['mode'] ){
    case 'add':
        // Create Directories
        if ( !$Website->check_exist($_GET['website_address']) ){
            $o = shell_exec('cd '.getenv('APACHE_DOCROOT').'; mkdir '.$_GET['website_address'].'; cd '.getenv('APACHE_DOCROOT').$_GET['website_address'].'; mkdir public_html;');
        }

        echo 'NON FUNZIONA LA CREAZIONE DEI VIRTUAL HOST';

        die();

        // Create Virtual Hosts
        if ( !file_exists( getenv('APACHE_VHROOT').$_GET['website_address'].'.conf' ) ){
            // Replace data in Virtual Host
            $virtual_host_data = file_get_contents(getenv('APACHE_VHROOT').'default.conf');
            $virtual_host_data = str_replace(
                [ 'var/www/html', 'ServerName localhost' ],
                [ 'var/www/html/'.$_GET['website_address'], 'ServerName '.$_GET['website_address'] ],
                $virtual_host_data
            );
            // Write new wp-config.php
            $virtual_host_file = fopen(getenv('APACHE_VHROOT').$_GET['website_address'].'.conf', "w") or die("Unable to open file!");
            fwrite($virtual_host_file, $virtual_host_data);
            fclose($virtual_host_file);
        }

        if ( isset($_GET['is_wordpress']) && $_GET['is_wordpress']=='on' ){
            // Download WP from Git (if not exists)
            if ( isset($_GET['download_wordpress']) && $_GET['download_wordpress']=='on' && !$Website->check_wp_exist($_GET['website_address']) ) {
                $o1 = shell_exec('cd '.getenv('APACHE_DOCROOT').$_GET['website_address'].'/public_html; git clone https://github.com/WordPress/WordPress.git .; ls -l;');
            }

            // Remove unused files (readme and license)
            $o1 = shell_exec('cd '.getenv('APACHE_DOCROOT').$_GET['website_address'].'/public_html; rm license.txt;');
            $o1 = shell_exec('cd '.getenv('APACHE_DOCROOT').$_GET['website_address'].'/public_html; rm readme.html;');
            
            // Enable WP Config
            if ( isset($_GET['db_name']) ){
                $wp_config_path = getenv('APACHE_DOCROOT').$_GET['website_address'].'/public_html/wp-config-sample.php';
                $wp_config_data = file_get_contents($wp_config_path);
                // Replace data in WP Config
                $wp_config_data = str_replace(
                    [ 'database_name_here', 'username_here', 'password_here', 'localhost' ],
                    [ $_GET['db_name'], getenv('DB_USER'), getenv('DB_PASS'), getenv('DB_HOST') ],
                    $wp_config_data
                );
                // Write new wp-config.php
                $wp_config_file = fopen(getenv('APACHE_DOCROOT').$_GET['website_address']."/public_html/wp-config.php", "w") or die("Unable to open file!");
                fwrite($wp_config_file, $wp_config_data);
                fclose($wp_config_file);
            }

        }
        // header('location: /?success=Website succesfully created');
        die();
    break;
}

?>