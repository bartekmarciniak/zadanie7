<?php
ob_start();
include ("polaczenia.php");
$czas1 = time ();
$czas2 = date ("r", $czas1);
$czas = date("Y-m-d H:i:s");


 //$wys_login = ($_GET['d']);
if(isset($_COOKIE["cookie"])){
	
	echo "Witaj: ".$_COOKIE["cookie"];
	$user=$_COOKIE["cookie"];
	$wynik  = mysqli_query ($polaczenie,"SELECT * FROM user WHERE (login = '$user')")
	or die('Błąd zapytania do tabeli klienci!');
	
	
	while ($wiersz = mysqli_fetch_array ($wynik))
{	
$id = $wiersz [0];}
	$zapytanie1= mysqli_query ($polaczenie, "INSERT INTO logi2 (idu,data,proby) VALUES ('". $id."','".$czas."','0')");

header("Location: index.php");
}
	

 
 
 

ob_end_flush();	
?>