<?php
    include("./conf.php");
    include("./utils.php");

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['id'])){
            $sql = $dbConn->prepare("SELECT * FROM rates WHERE id=:id  ORDER BY id ASC");
            $sql->bindValue(':id', $_GET['id']);
            $sql->execute();
            $ans = $sql->fetch(PDO::FETCH_ASSOC);

        } else if (isset($_GET['fromDate']) && isset($_GET['toDate'])){
            $sql = $dbConn->prepare("SELECT * FROM rates WHERE DATE(date) BETWEEN :fromDate AND :toDate  ORDER BY date ASC");
            $sql->execute(array(
                ':fromDate' => $_GET['fromDate'],
                ':toDate' => $_GET['toDate']
            ));
            //del $sql->debugDumpParams();
            $ans = $sql->fetchAll(PDO::FETCH_ASSOC);

        } else if (isset($_GET['fromDate'])){
            $sql = $dbConn->prepare("SELECT * FROM rates WHERE DATE(date)=:fromDate  ORDER BY date ASC");
            $sql->bindValue(':fromDate', $_GET['fromDate']);
            $sql->execute();
            $ans = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            $sql = $dbConn->prepare("SELECT * FROM rates");
            $sql->execute();
            $ans = $sql->fetchAll();
            $ans = mb_convert_encoding( $ans , 'UTF-8', 'UTF-8');
        }
        header("HTTP/1.1 200 OK");
        header('Content-Type: application/json');
        echo json_encode( $ans  );
        // print_r($ans);
        exit();
    }

    // Crear un nuevo post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = $_POST;
        $sql = "INSERT INTO rates
            (id, contegory, name, vePrice, usPrive, packing)
            VALUES
            (:id, :category, :name, :vePrice, :usPrive, :packing)";
            //(:title, :status, :content, :user_id)";
        $statement = $dbConn->prepare($sql);
        bindAllValues($statement, $input);
        $statement->execute();
        $postId = $dbConn->lastInsertId();
        if($postId){
            $input['id'] = $postId;
            header("HTTP/1.1 200 OK");
            echo json_encode($input);
            exit();
        }
    }

    //Borrar
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $id = $_GET['id'];
    $statement = $dbConn->prepare("DELETE FROM rates where id=:id");
    $statement->bindValue(':id', $id);
    $statement->execute();
    header("HTTP/1.1 200 OK");
    exit();
    }
    //Actualizar
    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        $input = $_GET;
        $postId = $input['id'];
        $fields = getParams($input);
        $sql = "
            UPDATE posts
            SET $fields
            WHERE id='$postId'
            ";
        $statement = $dbConn->prepare($sql);
        bindAllValues($statement, $input);
        $statement->execute();
        header("HTTP/1.1 200 OK");
        exit();
    }
    //En caso de que ninguna de las opciones anteriores se haya ejecutado
    header("HTTP/1.1 400 Bad Request");
?>