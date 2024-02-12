<?php
    include '../model/classes/user.php';

    class UserController
    {
        public function Login($userType, $email, $password)
        {
            $User = new User();
            $User->Login($userType, $email, $password);
        }

        public function Register($cpf, $name, $cep, $birth, $phone, $email, $password, $userType)
        {
            $User = new User();
            $User->Register($cpf, $name, $cep, $birth, $phone, $email, $password, $userType);
        }

        public function EditData($name, $cpf, $cep, $phone, $email, $password, $userType)
        {
            $User = new User();
            $User->EditData($name, $cpf, $cep, $phone, $email, $password, $userType);
        }

        public function Logout()
        {}
    }
?>