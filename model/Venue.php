<?php
    include '../database/Database5.php';

    class Venue{
        public $venue_id;
        public $venue_name;
        public $venue_details;
        public $venue_rate;
        public $venue_size;
        public $provider_id;

        public function view($provider_id){
            $db = new Database5();
            $sql = "SELECT * FROM venue WHERE provider_id = ".$provider_id;
            return $db->execute($sql);
        }
    }
?>