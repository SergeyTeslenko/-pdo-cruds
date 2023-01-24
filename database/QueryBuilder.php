<?php

class QueryBuilder
{

    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost; dbname=tutorial", "root", "");
    }


    public function all()
    {
        $sql = "SELECT * FROM crud";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);


        return $users;
    }

    public function store($table, $data)
    {
       //ключи массива
        $keys = array_keys($data);
//        var_dump($keys);

        //сформировать строку
        $stringOfKeys = implode(',', $keys);
        //сформировать метки
        $placeHolders =":". implode(', :', $keys);

        $sql = "INSERT INTO $table($stringOfKeys) VALUES ($placeHolders)";
//         var_dump($sql);
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);


//        $statement->bindParam($_POST['']);
//        $statement->bindParam(":first_name", $_POST['first_name']);
//        $statement->bindParam(":last_name", $_POST['last_name']);
//        $statement->bindParam(":email", $_POST['email']);
//        $statement->bindParam(":gender", $_POST['gender']);

    }

    public function show()
    {
        $sql= "SELECT * FROM crud WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":id", $_GET['id']);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public function edit()
    {
        $sql = "SELECT * FROM crud WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":id", $_GET['id']);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }


    public function update($table, $data){
        $fields = '';
        foreach ($data as $key=> $value){
            $fields.=$key . "=:" . $key . ",";

        }
        $fields = rtrim($fields, ',');

        $sql = "UPDATE $table SET $fields WHERE id=:id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);

    }

    public function delete($id)
    {
        $sql = "DELETE FROM crud WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

}