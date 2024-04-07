<!DOCTYPE html>
<html>

<head>
<title>mon premier page php</title>

</head>
<body>
<?php
$nom=$_REQUEST["nom"];
$age=$_REQUEST["age"];
$message="Bonjour  " .$nom. " , vous avez ".$age." ans.";
echo $message;
?>
</body>
</html>
