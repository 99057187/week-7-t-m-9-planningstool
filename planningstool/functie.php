<?php
	function DatabaseConnect(){
		$servername="localhost";
		$username="root";
		$password="mysql";
		$dbname="planningstool";

		try {
       		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        	$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        	return $conn;
        
    	}

    	catch (PDOException $e){
        	echo "connection failed" . $e->getMessage();
    	}
	}
    function getAllGames($options, $order){
         $conn = DatabaseConnect();
         $query = $conn->prepare("SELECT * FROM games ORDER BY $options $order");
         $query->execute();
         return $query->fetchAll();
    }

    function getDetails($id){
        $conn = DatabaseConnect();
        $query = $conn->prepare("SELECT * FROM games WHERE id=:id");
        $query->execute(['id'=>$id]);
        return $query->fetch();
    }
?>