<?php
  function DatabaseConnect(){
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "dynamische applicatie";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        
    }
    catch (PDOException $e){
        echo "connection failed" . $e->getMessage();
    }
}

function AllHeroes(){
    $conn = DatabaseConnect();
    $query = $conn->prepare('SELECT * FROM characters');
    $query->execute();
    $conn = null;
    return $query->fetchAll();
}
function getHero($id){
    $conn = DatabaseConnect();
    $hero = $conn->prepare('SELECT COUNT(1) FROM characters');
    $hero->execute();
    $conn = null;
    return $hero->fetchAll();
}

function CountHeroes(){
    $conn = DatabaseConnect();
    $statement = $conn->prepare('SELECT COUNT(*) FROM characters');
    $statement->execute();
    $conn = null;
    return $statement->fetchAll();
}

  ?>