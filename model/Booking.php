<?php
    include '../database/Database6.php';

    class Booking{
        public $book_id;
        public $book_start;
        public $book_end;
        public $organizer_id;
        public $venue_id;
        public $transportation_id;
        public $food_id;
        public $booking_code;
        public $booking_status;

        public function Count(){
            $db = new Database6();
            $query = "SELECT COUNT(book_id) FROM booking";
            $result = $db->execute($query);
            return $count = mysqli_num_rows($result);
        }
    }
?>