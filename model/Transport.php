<?php
    require '../database/Database1.php';

    class Transport{
        public $transportation_id;
        public $transportation_package;
        public $transportation_details;
        public $transportation_type;
        public $transportation_rate;
        public $driver;
        public $no_seats;
        public $provider_id;

        public function view($provider_id){
            $db = new Database1();
            $sql = "SELECT * FROM transportation WHERE provider_id=".$provider_id;
            return $db->execute($sql);
        }
    }

?>