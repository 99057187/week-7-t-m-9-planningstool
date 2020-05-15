<?php
include("functie.php");
DatabaseConnect();
$details=getDetails($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color:lightgreen">
	<div style="width:100%; height:100px; background-color:blue;" class=".text-center">
	</div>
	<br><br><br><br>
	<div class="text-center border border-dark rounded" style="width:800px;background-color:white; margin-left:350px;">
		<br><br>
		<img style="height:380px; width:380px;" src="images/<?php echo $details['image']?>	">
		<h4>naam: <?php echo $details['name'] ?></h4>
		<p><?php echo $details['description']?></p>
		<div class="border" style="width:350px; margin-left:220px;">
			<p>de nodige skills zijn: <?php echo $details['skills']?></p>
			<p>minimale aantal spelers: <?php echo $details['min_players']?></p>
			<p>maximale aantal spelers: <?php echo $details['max_players']?></p>
			<p>uitleg tijd: <?php echo $details['explain_minutes']?> minuten</p>
			<p>speel minuten: <?php echo $details['play_minutes']?> minuten</p>
			<br>
		</div>

	</div>
	<br><br><br><br><br><br><br>
</body>
</html>
<link rel="stylesheet" type="text/css" href="css/planningstool.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
