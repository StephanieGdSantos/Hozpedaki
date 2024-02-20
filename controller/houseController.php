<?php
    include('../model/classes/house.php');

    class HouseController
    {
        public function GetDetails($id)
        {
            $House = new House();
            return $House->GetDetails($id);
        }
    }
?>