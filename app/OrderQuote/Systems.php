<?php 
namespace OrderQuote;

class Systems{

    public $data_order_path = 'data/orders/';

    public function __construct(){
        date_default_timezone_set('Europe/Rome');
    }

    /**
     * Save Order with Txt
     */
    public function saveOrderTxt($content){
        $oFile = fopen( $this->data_order_path . date('Y_d_m_His', time() ).'.txt', "w") or die("Unable to open file!");
        fwrite($oFile, $content);
        fclose($oFile);
    }

    /**
     * Return Date for cache resources
     */
    public function datecache( $pattern='dmy' ){
        return 'v='.date( $pattern, time() );
    }
    
}
?>