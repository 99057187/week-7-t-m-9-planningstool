<?php
    require("database.php");
    $result = AllHeroes();
    $count = CountHeroes();
    $hero = getHero(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>All <?= $count[0][0] ?> characters uit de database</h1>

</header>
<div id="container">
    <?php
        foreach ($result as $name){
    ?>      
            <img src="resources/images/<?php echo $name["avatar"]?>" id="image" style="width: 100px; height: 100px; border-radius: 50%">
                <?php
                    echo "<a href='character.php?id={$name['id']}' href='character.php'>" . $name['name'] . "</a>" . " &emsp;" . "<i class=\"fas fa-heart\"></i>" . $name['health'] ." &emsp;" . "<i class=\"fas fa-fist-raised\" ></i>" . $name['attack'] . " &emsp;" . "<i class=\"fas fa-shield-alt\"></i>" . $name['defense'] . "<br>" . "<br>";
                    }
                    ?> 
    <a class="item" href="character.php"> 
    </a>
</div>
<footer>&copy; [Anthony Inocencio Ramos] 2020</footer>
</body>
</html>