<?php
    require_once 'user.php';

    class Host extends User
    {
        public function GetPhoto($img)
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

        public function RegisterHouse($host, $title, $cep, $state, $city, $street, $neighborhood, 
        $number, $size, $availability, $bedrooms, $livingRoom, $kitchen, $bathroom, $guests, $pool, 
        $lunch, $refundable, $description, $img1, $img2, $img3)
        {
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

            $query = "UPDATE images SET ";
            $query .= "(
                path
                ) VALUES (
                    :path1
                );";

            $path1 = $this->GetPhoto($img1);
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':path1', $path1);
            $stmt->execute();

            $idImg1 = $conn->lastInsertId();

            $query = "UPDATE images SET ";
            $query .= "(
                path
                ) VALUES (
                    :path2
                );";

            $path2 = $this->GetPhoto($img2);
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':path2', $path2);
            $stmt->execute();

            $idImg2 = $conn->lastInsertId();

            $query = "UPDATE images SET ";
            $query .= "(
                path
                ) VALUES (
                    :path3
                );";

            $path3 = $this->GetPhoto($img3);
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

        public function EditHouse($id, $title, $cep, $state, $city, $street, $neighborhood, 
        $number, $size, $availability, $bedrooms, $livingRoom, $kitchen, $bathroom, $guests, $pool, 
        $lunch, $refundable, $description, $img1, $img2, $img3)
        {

            include_once 'dataBase.php';
            $conn = DataBase::getConnection(); 

            $querySelect = "SELECT address, rooms, img1, img2, img3 FROM house WHERE id=".$id;
            $stmt = $conn->prepare($querySelect);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $dataHouse)
            {
                $idAddress = $dataHouse['address'];
                $idRooms = $dataHouse['rooms'];
                $idImg1 = $dataHouse['img1'];
                $idImg2 = $dataHouse['img2'];
                $idImg3 = $dataHouse['img3'];

                $query = "UPDATE address SET ";
                $query .= "cep=:cep, state=:state, city=:city, street=:street, neighborhood=:neighborhood,
                number=:number WHERE id=:id;";

                $stmt = $conn->prepare($query);
                $stmt->bindParam(':cep', $cep);
                $stmt->bindParam(':state', $state);
                $stmt->bindParam(':city', $city);
                $stmt->bindParam(':street', $street);
                $stmt->bindParam(':neighborhood', $neighborhood);
                $stmt->bindParam(':number', $number);
                $stmt->bindParam(':id', $idAddress);
                $stmt->execute();

                $query = "UPDATE rooms SET ";
                $query .= "bedrooms=:bedrooms, livingRoom=:livingRoom, kitchen=:kitchen, bathroom=:bathroom 
                WHERE id=:id;";

                $stmt = $conn->prepare($query);
                $stmt->bindParam(':bedrooms', $bedrooms);
                $stmt->bindParam(':livingRoom', $livingRoom);
                $stmt->bindParam(':kitchen', $kitchen);
                $stmt->bindParam(':bathroom', $bathroom);
                $stmt->bindParam(':id', $idRooms);
                $stmt->execute();

                $query = "UPDATE images SET ";
                $query .= " path=:path WHERE id=:id";

                $path1 = $this->GetPhoto($img1);
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':path1', $path1);
                $stmt->bindParam(':id', $idImg1);
                $stmt->execute();

                $idImg1 = $conn->lastInsertId();

                $query = "UPDATE images SET ";
                $query .= " path=:path WHERE  id=:id";

                $path2 = $this->GetPhoto($img2);
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':path2', $path2);
                $stmt->bindParam(':id', $idImg2);
                $stmt->execute();

                $idImg2 = $conn->lastInsertId();

                $query = "UPDATE images SET ";
                $query .= " path=:path WHERE  id=:id";

                $path3 = $this->GetPhoto($img3);
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':path3', $path3);
                $stmt->bindParam(':id', $idImg3);
                $stmt->execute();

                $idImg3 = $conn->lastInsertId();

                $query = "UPDATE house SET ";
                $query .= "
                    host=:host, 
                    title=:title,
                    address=:address,
                    size=:size,
                    availability=:availability,
                    rooms=:rooms,
                    guests=:guests,
                    pool=:pool,
                    lunch=:lunch,
                    refundable=:refundable,
                    description=:description,
                    startReservation=:startReservation,
                    endReservation=:endReservation,
                    img1=:img1,
                    img2=:img2,
                    img3=:img2 
                    WHERE id=:id";

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
                $stmt->bindParam(':id', $id);
                $stmt->execute();
            }

            if ($stmt->execute()) {
                $response = array('success' => true, 'message' => 'Usuário inserido com sucesso.');
            } else {
                $response = array('success' => false, 'message' => 'Erro ao inserir usuário.');
            }
            
            echo json_encode($response);
        }
    }
?>