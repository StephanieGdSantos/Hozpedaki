<?php
    include('../model/classes/house.php');

    class HouseController
    {
        public function ShowDetails($id)
        {
            $House = new House();
            return $House->ShowDetails($id);
        }
    }
?>