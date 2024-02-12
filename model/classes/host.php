<?php
    require_once 'user.php';

    class Host extends User
    {
        public function RegisterHouse($host, $title, $cep, $state, $city, $street, $neighborhood, 
        $number, $size, $availability, $bedrooms, $livingRoom, $kitchen, $bathroom, $guests, $pool, 
        $lunch, $refundable, $description, $img1, $img2, $img3)
        {
            function GetPhoto($img)
            {
                $inicialName = $img['name'];
                $newName = uniqid();
                $extension = strtolower(pathinfo($inicialName, PATHINFO_EXTENSION));
                $folder = '../../images/';
                $pathUpload = '../images/' . $newName . "." . $extension;
                $path = $folder . $newName . "." . $extension;
    
                move_uploaded_file($img['tmp_name'], $pathUpload);
    
                return $path;
            }

            include_once 'dataBase.php';
            $conn = DataBase::getConnection(); 

            $query = "INSERT INTO address ";
            $query .= "(
                cep,
                state,
                city,
                street,
                neighborhood,
                number
                ) VALUES (
                    :cep,
                    :state,
                    :city,
                    :street,
                    :neighborhood,
                    :number
                );";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':state', $state);
            $stmt->bindParam(':city', $city);
            $stmt->bindParam(':street', $street);
            $stmt->bindParam(':neighborhood', $neighborhood);
            $stmt->bindParam(':number', $number);
            $stmt->execute();

            $idAddress = $conn->lastInsertId();

            $query = "INSERT INTO rooms ";
            $query .= "(
                bedrooms,
                livingRoom, 
                kitchen,
                bathroom
                ) VALUES (
                    :bedrooms,
                    :livingRoom,
                    :kitchen,
                    :bathroom
                );";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':bedrooms', $bedrooms);
            $stmt->bindParam(':livingRoom', $livingRoom);
            $stmt->bindParam(':kitchen', $kitchen);
            $stmt->bindParam(':bathroom', $bathroom);
            $stmt->execute();

            $idRooms = $conn->lastInsertId();

            $query = "INSERT INTO images ";
            $query .= "(
                path
                ) VALUES (
                    :path1
                );";

            $path1 = GetPhoto($img1);
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':path1', $path1);
            $stmt->execute();

            $idImg1 = $conn->lastInsertId();

            $query = "INSERT INTO images ";
            $query .= "(
                path
                ) VALUES (
                    :path2
                );";

            $path2 = GetPhoto($img2);
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':path2', $path2);
            $stmt->execute();

            $idImg2 = $conn->lastInsertId();

            $query = "INSERT INTO images ";
            $query .= "(
                path
                ) VALUES (
                    :path3
                );";

            $path3 = GetPhoto($img3);
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':path3', $path3);
            $stmt->execute();

            $idImg3 = $conn->lastInsertId();

            $query = "INSERT INTO house ";
            $query .= "(
                host, 
                title,
                address,
                size,
                availability,
                rooms,
                guests,
                pool,
                lunch,
                refundable,
                description,
                startReservation,
                endReservation,
                img1,
                img2,
                img3
                ) VALUES (
                    :host, 
                    :title,
                    :address,
                    :size,
                    :availability,
                    :rooms,
                    :guests,
                    :pool,
                    :lunch,
                    :refundable,
                    :description,
                    :startReservation,
                    :endReservation,
                    :img1,
                    :img2,
                    :img3
                );";

            $startReservation = date('d-m-Y');
            $endReservation = date('d-m-Y');
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':host', $host);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':address', $idAddress);
            $stmt->bindParam(':size', $size);
            $stmt->bindParam(':availability', $availability);
            $stmt->bindParam(':rooms', $idRooms);
            $stmt->bindParam(':guests', $guests);
            $stmt->bindParam(':pool', $pool);
            $stmt->bindParam(':lunch', $lunch);
            $stmt->bindParam(':refundable', $refundable);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':startReservation', $startReservation);
            $stmt->bindParam(':endReservation', $endReservation);
            $stmt->bindParam(':img1', $idImg1);
            $stmt->bindParam(':img2', $idImg2);
            $stmt->bindParam(':img3', $idImg3);
            $stmt->execute();

            if ($stmt->execute()) {
                $response = array('success' => true, 'message' => 'Usuário inserido com sucesso.');
            } else {
                $response = array('success' => false, 'message' => 'Erro ao inserir usuário.');
            }
            
            echo json_encode($response);
        }
    }
?>