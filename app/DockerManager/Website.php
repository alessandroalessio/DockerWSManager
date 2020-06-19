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

    public function get_websites(){
        $files = scandir( getenv('APACHE_DOCROOT') );
        unset($files[0]);
        unset($files[1]);
        return $files; 
    }
}
?>