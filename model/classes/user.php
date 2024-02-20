<?php
    class User
    {
        public function Login($userType, $email, $password)
        {
            require_once('dataBase.php');
            $conn = DataBase::getConnection(); 

            $query = "SELECT * FROM ";
            $query .= ($userType == 'host') ? 'host' : 'guest';
            $query .= " WHERE email = :email AND password = :password";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $response = array('success' => true, 'message' => 'Login bem-sucedido.');
            } else {
                $response = array('success' => false, 'message' => 'Credenciais inválidas.');
            }

            echo json_encode($response);
        }

        public function Register($cpf, $name, $cep, $birth, $phone, $email, $password, $userType)
        {
            require_once('dataBase.php');
            $conn = DataBase::getConnection();
            
            $query = "INSERT INTO " . $userType;
            $query .= " (
                            `cpf`, 
                            `name`, 
                            `cep`, 
                            `birth`, 
                            `phone`, 
                            `email`, 
                            `password`
                        ) 
                        VALUES 
                        (
                            :cpf, 
                            :name, 
                            :cep, 
                            :birth, 
                            :phone, 
                            :email, 
                            :password
                        )";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':birth', $birth);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            if ($stmt->execute()) {
                $response = array('success' => true, 'message' => 'Usuário inserido com sucesso.');
            } else {
                $response = array('success' => false, 'message' => 'Erro ao inserir usuário.');
            }
            
            echo json_encode($response);
        }

        public function EditData($name, $cpf, $cep, $phone, $email, $password, $userType)
        {
            require_once('dataBase.php');
            $conn = DataBase::getConnection();

            $query = "UPDATE " . $userType . " SET name=:name, cep=:cep, phone=:phone, email=:email, password=:password
             WHERE cpf=:cpf";
            
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':cpf', $cpf);

            if ($stmt->execute()) {
                $response = array('success' => true, 'message' => 'Usuário inserido com sucesso.');
            } else {
                $response = array('success' => false, 'message' => 'Erro ao inserir usuário.');
            }
            
            echo json_encode($response);
        }

        public function GetPersonalData($id, $userType)
        {
            include('dataBase.php');
            $conn = DataBase::getConnection();

            $query = "SELECT * FROM " . $userType . " WHERE id=:id";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($data)
            {
                $personalData = [
                    "cpf" => $data['cpf'],
                    "name" => $data['name'],
                    "cep" => $data['cep'],
                    "birth" => $data['birth'],
                    "phone" => $data['phone'],
                    "email" => $data['email'],
                    "password" => $data['password'],
                    "userType" => $userType
                ];
                return json_encode($personalData);
            }
                return json_encode(['error' => 'Casa não encontrada']);
        }


        public function Logout()
        {}
    }
?>