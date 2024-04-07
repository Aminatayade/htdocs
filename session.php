<html>
<?php
define('MAX',5);
session_start();
if(!isset($_SESSION["C"])){
$_SESSION["C"]=1;
$_SESSION["t"]=time(); //date acttuelle
}
else 
{
$_SESSION["C"]++;
if(time()-$_SESSION["t"]>='MAX'){
    session_destroy();
    die("trop tard");
}
$_SESSION["t"]=time();
}
?>
</html>