<?php
include("functie.php");
DatabaseConnect();


if(empty($_GET['options']) || empty($_GET['order']))
{
  $_GET['options'] = 'id';
  $_GET['order'] = 'ASC';
}

$data = getAllGames($_GET['options'], $_GET['order']);

if(isset($_GET['submit'])) 
{ 
  getAllGames($_GET['options'], $_GET['order']);
}

?>
<link rel="stylesheet" type="text/css" href="css/planningstool.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class = "text-center">
  <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="optie-select">Sorteer de spellen op:</label>
      <select name="options" id="optie-select">
          <option value="name">Naam</option>
          <option value="max_players">Maximale spelers</option>
          <option value="play_minutes">Speeltijd</option>
      </select>

      <select name="order" id="optie-select">
          <option value="ASC">van laag naar hoog</option>
          <option value="DESC">van hoog naar laag</option>
      </select>
      <input type ="submit" value="Verander">
    </form>
</div>

<div class = "row ">
<?php foreach($data as $row){?>

  <div class = " w-50 col-2 d-inline-block mb-2">
  <img src="images/<?php echo $row["image"]?>" style="width:180px; height:180px;">
  <h4><?php echo $row["name"]?></h4>
  <a class = "p-1 text-dark" href = 'Detail.php?id= <?php echo $row["id"]?>'>Lees meer &hellip;</a>
</div>
<?php
}
?>

</div>

</div>