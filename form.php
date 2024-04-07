 //vous allez produire la version tout_v3.php de notre application avec une regeneration du 
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ma Page</title>
</head>
<body>
	<?php  
		function formulaire() { ?>
		<form action="form.php" method="post">
			<input type="text" name="nom" value=""><br>
			<input type="text" name="age" value=""><br>
			<input type="submit" value="ok"><br>
		</form>
		<?php }

		function traitement($n, $a){
			$message = "Bonjour " . $n . ", votre âge est " . $a . ".";
			echo $message;
		}

		if (!isset($_REQUEST["nom"]))
			formulaire();
		else
			traitement($_REQUEST["nom"], $_REQUEST["age"]);
	?>
</body>
</html>
