<?php
class Sample {
    
    private $db = 'database';
    
    
    
    public function say(){
        /**
         * will echo out "Say something"
         * 
         * $return null
         */
        
        echo 'say something';
    }
    
    function getDb() {
        return $this->db;
    }

    function setDb($db) {
        $this->db = $db;
    }


    
}
