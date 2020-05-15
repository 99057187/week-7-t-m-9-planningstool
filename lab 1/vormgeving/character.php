<?php
$id=$_GET["id"];
$servername="localhost";
$username="root";
$password="mysql";
$dbname="dynamische applicatie";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e){
    echo "connection failed" . $e->getMessage();
}
$query = $conn->prepare("SELECT * FROM characters WHERE id='$id'");
$query->execute();
$result = $query->fetchall();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail" style="height:220px;">
        <div class="left">
       <?php 
                foreach ($result as $name){
                ?>
                    <h1 style="position: absolute; top: -60px; left:400px; display: inline-block;"><?php echo $name["name"]?> </h1>
                    <img src="resources/images/<?php echo $name["avatar"]?>" id="img" style="width:200px; height:200px; border-radius:50%">
                    <div id="statsbalk" style="background-color:<?php echo $name["color"]?>">
                    <?php  
                echo  " &emsp;" . "<br>" . "<i class=\"fas fa-heart\"></i>".$name['health'] . "<br>" . " &emsp;"."<i class=\"fas 
                fa-fist-raised\"></i>" . $name['attack'] . "<br>" . " &emsp;"."<i class=\"fas fa-shield-alt\"></i>" 
                . $name['defense'] . "<br>" . "<br>" .  $name["weapon"] . "<br>" . $name["armor"];
                }
                ?>
        
       
            </div>  
            </div>
        </div>
        <div class="right">
           
        </div>
        <div>
            <p><?php echo $name["bio"]?></p>
        </div>
</div>
<footer>&copy; [Anthony Inocencio Ramos] 2020</footer>
</body>
</html>