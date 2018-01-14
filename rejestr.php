<?php
ob_start();
?>
<html>
<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<body>


<?php


include ("polaczenia.php");
$czas1 = time ();
$czas2 = date ("r", $czas1);
$czas = date("Y-m-d H:i:s");

			@$rej = trim($_REQUEST["rej"]);
            $login='';
			$haslo='';

<?php
ob_start();
?>
<html>
<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<body>


<?php


include ("polaczenia.php");
$czas1 = time ();
$czas2 = date ("r", $czas1);
$czas = date("Y-m-d H:i:s");

			@$rej = trim($_REQUEST["rej"]);
            $login='';
			$haslo='';


			if ($rej == "rej")
			{
				$login = trim($_POST["login"]);
				$haslo = trim($_POST["haslo"]);

		
				$blad_01='';
				$blad_02='';
				
				$blad = '0';
				if (empty($login) == true)
				{
					$blad_01 = "<font color='black'><i></i>Musisz wypełnić pole login</font></br>";
					$blad='1';
				}

				if (empty($haslo) == true)
				{
					$blad_02 = "<font color='black'><i></i>Musisz wypełnić pole hasło</font></br>";
					$blad='1';
				}
				
				if ($blad =='1')
				{
					echo "<table border='1px' BGCOLOR='white'><tr><td align='center'>";
					echo $blad_01;
					echo $blad_02;

					echo "</td></tr></table>";					
				}
				
				if ($blad != '1')
				{
					$wynik = mysqli_query ($polaczenie, "INSERT INTO user (login,haslo) VALUES ('". $login."','".$haslo."')");
					//$zapytanie1= mysqli_query ($polaczenie, "INSERT INTO logi2 (idu,data,proby) VALUES ('". $id."','".$czas."','1')");
					
					{
					echo 'Udało się stworzyć katalogu';
					}
					else
					{
					echo 'Nie udało się stworzyć katalogu';
					}
					if ($wynik)
					{       
						
						// jakies przekierowaie  do logowania , jakies hiper lacze 
						echo "<table border='1px' BGCOLOR='white'><tr><td align='center'>";
						echo "<font color='black'>Użytkownik został umieszczony w bazie. </font>";
						echo "</td></tr></table>";
						//header("Location: login.php");
					}
				
				}
			}
ob_end_flush();		
?>


<center>
<form action="" method="post">
<input type="hidden" name="rej" value="rej">

<p class='tytul'>ZARELESTRUJ SIĘ!!!</p>

<p class='tytul'>Wpisz dane użytkownika</p><br/>
Podaj login:</br><input type="text" name="login" value="<?php echo $login; ?>"></br></br>

Podaj hasło:</br><input type="password" name="haslo" ></br></br>


<input type="submit" name="B3" value="Zarejestruj się!"></br></br></br></br>
</form>

</center>

</body>
</html>


			if ($rej == "rej")
			{
				$login = trim($_POST["login"]);
				$haslo = trim($_POST["haslo"]);

		
				$blad_01='';
				$blad_02='';
				
				$blad = '0';
				if (empty($login) == true)
				{
					$blad_01 = "<font color='black'><i></i>Musisz wypełnić pole login</font></br>";
					$blad='1';
				}

				if (empty($haslo) == true)
				{
					$blad_02 = "<font color='black'><i></i>Musisz wypełnić pole hasło</font></br>";
					$blad='1';
				}
				
				if ($blad =='1')
				{
					echo "<table border='1px' BGCOLOR='white'><tr><td align='center'>";
					echo $blad_01;
					echo $blad_02;

					echo "</td></tr></table>";					
				}
				
				
			}
ob_end_flush();		
?>


<center>
<form action="" method="post">
<input type="hidden" name="rej" value="rej">

<p class='tytul'>ZARELESTRUJ SIĘ!!!</p>

<p class='tytul'>Wpisz dane użytkownika</p><br/>
Podaj login:</br><input type="text" name="login" value="<?php echo $login; ?>"></br></br>

Podaj hasło:</br><input type="password" name="haslo" ></br></br>


<input type="submit" name="B3" value="Zarejestruj się!"></br></br></br></br>
</form>

</center>

</body>
</html>

