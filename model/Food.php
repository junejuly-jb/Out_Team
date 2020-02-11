<?php  
    require '../database/Database3.php';

    class Food{
        public $food_id;
        public $food_name;
        public $food_details;
        public $food_price;
        public $food_size;
        public $food_type;
        public $food_status;

        public function viewFoodID($provider_id){
            $db = new Database3();
            $sql = "SELECT * FROM food WHERE provider_id =".$provider_id;
            return $db->execute($sql);
        }
    }
?>