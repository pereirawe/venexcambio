<?php
      // Abrir conexion a la base de datos
      // var_dump($db);
      function connect($db)
      {
          try {
              $conn = new PDO("mysql:host={$db['host']};dbname={$db['db']}", $db['username'], $db['password']);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              return $conn;
              var_dump($db);
          } catch (PDOException $exception) {
              exit($exception->getMessage());
              echo "error";
          }
      }
      $dbConn = connect($db);

     //Obtener parametros para updates
     function getParams($input)
     {
        $filterParams = [];
        foreach($input as $param => $value)
        {
                $filterParams[] = "$param=:$param";
        }
        return implode(", ", $filterParams);
      }
      //Asociar todos los parametros a un sql
      function bindAllValues($statement, $params)
      {
        foreach($params as $param => $value)
        {
            $statement->bindValue(':'.$param, $value);
        }
        return $statement;
       }
     ?>