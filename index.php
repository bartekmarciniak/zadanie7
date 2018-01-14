
<html>
<head>
<meta charset="UTF-8">

	<title>Logowanie</title>
</head>
<body>
<?php
include ("polaczenia.php");

$d = ($_POST['d']);
if(isset($_COOKIE["cookie"])){
	$user=$_COOKIE["cookie"];
	
	
	else{
	//echo $user;
echo "Witaj: ".$_COOKIE["cookie"];
include ("dodajpliki.php");
include ("nowy_folder.php");
include ("otworz.php");
echo "<br><a href='wyloguj.php?d=".$d."'>Wyloguj się</a><br>";
$wynik2  = mysqli_query ($polaczenie,"SELECT id FROM user WHERE (login = '$user')")or die('Błąd zapytania do tabeli1!');	
while ($wiersz2 = mysqli_fetch_array ($wynik2))
{	$id=$wiersz2 [0];}

$wynik1  = mysqli_query ($polaczenie,"SELECT * FROM  logi2 WHERE (idu = '$id')  ORDER BY data DESC  LIMIT 1,1 ")or die('Błąd zapytania do tabeli2!');	
			while ($wiersz1 = mysqli_fetch_array ($wynik1))
{	$data=$wiersz1 [1];
$proby=$wiersz1 [2];}


	if(isset($data)&&($proby=='1'))
	{
	echo "<p><font size='5' color='red'> Ktoś próbował sie zalogować nie poprawnymi danymi dnia:  ".$data."  </font></p></br>";	
	}
	
	}
}
else{
echo "<br><a href='rejestr.php'>Nowy użytkownik</a><br><br>";
echo "<a href='login.php'>Zaloguj się</a><br>";
}

?>
