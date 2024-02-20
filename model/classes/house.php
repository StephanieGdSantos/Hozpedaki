<?php
    class House
    {
        public function GetDetails($id)
        {
            include('dataBase.php');
            $conn = DataBase::getConnection();

            $query = "SELECT house.*, address.*, rooms.*, 
            img1.path AS img1_path,
            img2.path AS img2_path,
            img3.path AS img3_path
            FROM house
            JOIN 
                address ON house.address = address.id 
            JOIN 
                rooms ON house.rooms = rooms.id
            LEFT JOIN 
                images AS img1 ON house.img1 = img1.id
            LEFT JOIN 
                images AS img2 ON house.img2 = img2.id
            LEFT JOIN 
                images AS img3 ON house.img3 = img3.id
            WHERE 
                house.id = :id
            ";

            $stmt = $conn->prepare($query);
            $stmt->execute(['id' => $id]);
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($data)
            {

                $houseData = [
                    "host" => $data['host'],
                    "title" => $data['title'],
                    "cep" => $data['cep'],
                    "city" => $data['city'],
                    "state" => $data['state'],
                    "size" => $data['size'],
                    "availability" => $data['availability'],
                    "bedrooms" => $data['bedrooms'],
                    "livingRoom" => $data['livingRoom'],
                    "kitchen" => $data['kitchen'],
                    "bathroom" => $data['bathroom'],
                    "guests" => $data['guests'],
                    "pool" => $data['pool'],
                    "lunch" => $data['lunch'],
                    "refundable" => $data['refundable'],
                    "description" => $data['description'],
                    "startReservation" => $data['startReservation'],
                    "endReservation" => $data['endReservation'],
                    "img1_path" => $data['img1_path'],
                    "img2_path" => $data['img2_path'],
                    "img3_path" => $data['img3_path']
                ];
                return json_encode($houseData);
            // $novoJSON = json_encode($houseData, JSON_PRETTY_PRINT);
            // file_put_contents('../routes/data.json', $novoJSON);
            }
                return json_encode(['error' => 'Casa não encontrada']);
        }
    }
?>