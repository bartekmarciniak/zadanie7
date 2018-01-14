<?php
ob_start();
?>
<html>
<head>
<meta charset="UTF-8">

	<title>Logowanie</title>
</head>
<body>
<?php


include ("polaczenia.php");
  $wys_login = ($_POST['login']);
  $wys_pass = ($_POST['haslo']);
$czas1 = time ();
$czas2 = date ("r", $czas1);
$czas = date("Y-m-d H:i:s");



	


			
			
			
		@$rej = trim($_REQUEST["rej"]);
     
			if ($rej == "rej"){

$wynik  = mysqli_query ($polaczenie,"SELECT * FROM  user WHERE (logi = $wys_login)")or die('Błąd zapytania do tabeli!'); // wszystko z user sprawdzeie loginu 
       
   	
		while ($wiersz = mysqli_fetch_array ($wynik))
	
{	
$id = $wiersz [0];
$login=$wiersz [1];
$haslo=$wiersz [2];
}


if(!empty($haslo))
{
	$ilosc='0';
	$zapytanie2= mysqli_query ($polaczenie, "SELECT proby, data FROM logi2 WHERE (idu='$id') ORDER BY data DESC  LIMIT 3 "); // zlicza ilosc jedynek 
		while ($wiersz3 = mysqli_fetch_array ($zapytanie2))
		{
			$li[]=$wiersz3[0];

	
		}
			
if($li[0]=='1'){$ilosc=1;}
if($li[1]=='1'&&$ilosc==1){$ilosc=2;}
if($li[2]=='1'&&$ilosc==2){$ilosc=3;}
			
		 
		
	if($haslo==$wys_pass&&$ilosc<3)
	{
		setcookie("cookie", "$wys_login");
        
        echo"Witaj: ".$wys_login."<br>".$proby."<br>Ciastko: ".$_COOKIE["cookie"];
		
				//$wynik8  = mysqli_query ($polaczenie,"UPDATE  logi2 SET proby= '0' WHERE proby='1' AND idu='$id'")or die('Błąd zapytania do tabeli klienci21!');
		
		header("Location: logi.php");}
			
	
	else
	{
		if($ilosc<2){
			$zapytanie1= mysqli_query ($polaczenie, "INSERT INTO logi2 (idu,data,proby) VALUES ('". $id."','".$czas."','1')"); // wpisuje 1
			$ilosc++;
			//echo "</br>1a</br>";
		
			
					echo "Niepoprawne logowanie ilosc: ".$ilosc;
		}else{
			
			if($ilosc=='2'){$zapytanie1= mysqli_query ($polaczenie, "INSERT INTO logi2 (idu,data,proby) VALUES ('". $id."','".$czas."','1')");} // wpisuje 1
			
	     //$wynik8  = mysqli_query ($polaczenie,"UPDATE  logi2 SET proby= '2' WHERE proby='0' AND idu='$id'")or die('Błąd zapytania do tabeli klienci21!');
				echo "konto zostalo zablokowane";
				
		}
	}	
	
}
else {
	echo "Brak danych logowania";
	
			}}
	


			
			
			
			
//include ("logi.php");
ob_end_flush();	
?>

<form action="" method="post">
<input type="hidden" name="rej" value="rej">

<p class='tytul'>Logowanie</p>
Login:<br/>
<input type="text" name="login" class="textbox"size="30" maxlength="50" /><br/>
Hasło:<br/>
<input type="password" name="haslo" class="textbox"size="30" maxlength="50" /><br/>
<input type="submit" name="logowanie" value="Loguj">
<br/><br/><br/>
</form>


</center> 
</body>
</html>