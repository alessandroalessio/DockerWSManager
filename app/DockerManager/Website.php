<?php 
namespace DockerManager;

class Website{
    public function __construct(){}

    /**
     * Check Existance of Website
     */
    public function check_exist($domain){
        $website_path = getenv('APACHE_DOCROOT').$domain.'/';
        if ( file_exists( $website_path ) ){
            return true;
        } else {
            return false;
        }
    }

    /**
     * Check Existance of Wordpress
     */
    public function check_wp_exist($domain){
        $wp_index = getenv('APACHE_DOCROOT').$domain.'/public_html/index.php';
        if ( file_exists( $wp_index ) ){
            return true;
        } else {
            return false;
        }
    }

    /**
     * get Websites
     */
    public function get_websites(){
        $files = scandir( getenv('APACHE_DOCROOT') );
        unset($files[0]);
        unset($files[1]);
        return $files; 
    }

    /**
     * Create Virtual Host
     */
    public function create_virtual_host($domain){

    }
}
?>