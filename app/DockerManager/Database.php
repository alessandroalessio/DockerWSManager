<?php 
namespace DockerManager;

class Database{

    public $link = false;

    /**
     * Open Connection
     */
    public function __construct(){
        $this->link = mysqli_connect( getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS') );

        if (!$this->link) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        
    }

    /**
     * Create Database
     */
    public function create($db_name){
        $result = mysqli_query($this->link, 'CREATE DATABASE '.$db_name.' CHARACTER SET utf8 COLLATE utf8_general_ci;');
        if ( $result ) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get Databases
     */
    public function get_databases(){
        $i = 1;
        $output = [];
        $system_db = ['information_schema', 'mysql', 'sys', 'performance_schema'];
        $result = mysqli_query($this->link, 'SHOW DATABASES;');
        if ( $result && mysqli_num_rows($result)>0 ) {
            while ( $rs = mysqli_fetch_array($result) ){
                if ( !in_array($rs['Database'], $system_db) ) {
                    $output[$i] = $rs;
                    $i++;
                }
            }
        }
        return $output;
    }

    /**
     * Close Connection
     */
    public function close(){
        mysqli_close($this->link);
    }

}
?>