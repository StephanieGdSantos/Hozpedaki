<?php
    // require_once('../model/classes/dataBase.php');

    // $conn = DataBase::getConnection();
    $return = array();

    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];
    $uriSegments = explode('/', parse_url($uri, PHP_URL_PATH));
    // foreach ($uriSegments as $uri)
    // {
    //     echo $uri;
    // }

    if ($requestMethod === 'POST')
    {
        if ($_POST['action'] === 'login')
        {
            include('../controller/userController.php');
            $UserController = new UserController();
            $UserController->Login($_POST['userType'], $_POST['email'], $_POST['password']);
        }
        else if ($_POST['action'] === 'register')
        {
            include('../controller/userController.php');
            $UserController = new UserController();
            $UserController->Register($_POST['cpf'], $_POST['name'], $_POST['cep'], $_POST['birth'],
            $_POST['phone'], $_POST['email'], $_POST['password'], $_POST['userType']);
        }
        else if ($_POST['action'] === 'edit-register')
        {
            include('../controller/userController.php');
            $UserController = new UserController();
            $UserController->EditData($_POST['name'], $_POST['cpf'], $_POST['cep'], $_POST['phone'],
            $_POST['email'], $_POST['password'], $_POST['userType']);
        }
        else if ($_POST['action'] === 'register-house')
        {
            include('../controller/hostController.php');
            $HostController = new HostController();

            //pegar o host depois pelo login
            $HostController->RegisterHouse('ste', $_POST['title'], $_POST['cep-house'],
            $_POST['state'], $_POST['city'], $_POST['street'], $_POST['neighborhood'], $_POST['number'],
            $_POST['size'], $_POST['availability'], $_POST['bedrooms'], $_POST['livingRoom'], 
            $_POST['kitchen'], $_POST['bathroom'], $_POST['guests'], $_POST['pool'], $_POST['lunch'],
            $_POST['refundable'], $_POST['description'], $_FILES['img1'], $_FILES['img2'], $_FILES['img3']);
        }
        else if ($_POST['action'] === 'edit-house')
        {
            include('../controller/hostController.php');
            $HostController = new HostController();

            $HostController->EditHouse($_POST['id'], $_POST['title'], $_POST['cep-house'],
            $_POST['state'], $_POST['city'], $_POST['street'], $_POST['neighborhood'], $_POST['number'],
            $_POST['size'], $_POST['availability'], $_POST['bedrooms'], $_POST['livingRoom'], 
            $_POST['kitchen'], $_POST['bathroom'], $_POST['guests'], $_POST['pool'], $_POST['lunch'],
            $_POST['refundable'], $_POST['description'], $_FILES['img1'], $_FILES['img2'], $_FILES['img3']);
        }
    }
    else if ($requestMethod === 'GET')
    {
        if ($uriSegments[4] === 'detalhes')
        {
            $idHouse = $uriSegments[5];
            include('../controller/houseController.php');
            $HouseController = new HouseController();

            $return = $HouseController->GetDetails($idHouse);
            // echo $return;
            // $novoJSON = json_encode($return, JSON_PRETTY_PRINT);
            // file_put_contents('data.json', $novoJSON);
            // header('Content-Type: application/json');
            echo $return;
        }
        else if ($uriSegments[5] === 'dados-pessoais')
        {
            $userType = $uriSegments[4];
            $idUser = $uriSegments[6];
            // echo $uriSegments[7];
            include('../controller/userController.php');
            $UserController = new UserController();

            $return = $UserController->GetPersonalData($idUser, $userType);
            echo $return;
        }
    }

    // if ($uriSegments[4] === 'guest')
    // {
    //     $query = 'SELECT * FROM guest';

    //     $consult = $conn->prepare($query);
    //     $consult->execute();

    //     while ($data = $consult->fetch(PDO::FETCH_ASSOC))
    //     {
    //         $return[] = array(
    //             "birth" => $data['birth'],
    //             "cep" => $data['cep'],
    //             "cpf" => $data['cpf'],
    //             "email" => $data['email'],
    //             "name" => $data['name'],
    //             "password" => $data['password'],
    //             "phone" => $data['phone']
    //         );
    //     }
    // }
    // $novoJSON = json_encode($return, JSON_PRETTY_PRINT);
    // file_put_contents('data.json', $novoJSON);
?>