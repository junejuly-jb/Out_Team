<?php
    require '../database/Database2.php';

    class Services{
        public $provider_id;
        public $provider_name;
        public $provider_type;
        public $provider_address;
        public $provider_contact;
        public $rate;
        public $transportation_package;
        public $driver;
        public $no_seats;

        public function viewVenue(){
            $db = new Database2;
            $sql = "SELECT * FROM service_provider WHERE provider_type = 'venue'";
            return $db->execute($sql);
        }
        public function viewTransportation(){
            $db = new Database2;
            $sql = "SELECT * FROM service_provider WHERE provider_type = 'transportation'";
            return $db->execute($sql);
        }
        public function viewFood(){
            $db = new Database2;
            $sql = "SELECT * FROM service_provider WHERE provider_type = 'food'";
            return $db->execute($sql);
        }
    }
?>