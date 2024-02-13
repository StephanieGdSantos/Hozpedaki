<?php
    include '../model/classes/host.php';

    class HostController
    {
        public function RegisterHouse($host, $title, $cep, $state, $city, $street, $neighborhood, 
        $number, $size, $availability, $bedrooms, $livingRoom, $kitchen, $bathroom, $guests, $pool, 
        $lunch, $refundable, $description, $img1, $img2, $img3)
        {
            $Host = new Host();
            $Host->RegisterHouse($host, $title, $cep, $state, $city, $street, $neighborhood, 
            $number, $size, $availability, $bedrooms, $livingRoom, $kitchen, $bathroom, $guests, $pool, 
            $lunch, $refundable, $description, $img1, $img2, $img3);
        }

        public function EditHouse($id, $title, $cep, $state, $city, $street, $neighborhood, 
        $number, $size, $availability, $bedrooms, $livingRoom, $kitchen, $bathroom, $guests, $pool, 
        $lunch, $refundable, $description, $img1, $img2, $img3)
        {
            $Host = new Host();
            $Host->EditHouse($id, $title, $cep, $state, $city, $street, $neighborhood, 
            $number, $size, $availability, $bedrooms, $livingRoom, $kitchen, $bathroom, $guests, $pool, 
            $lunch, $refundable, $description, $img1, $img2, $img3);
        }
    }
?>