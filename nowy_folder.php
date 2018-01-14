<?php
if(isset($_COOKIE["cookie"])){
	$user=$_COOKIE["cookie"];
	  $folder = ($_POST['folder']);
@$rej = trim($_REQUEST["rej"]);
     
			if ($rej == "rej"){
				
				if(mkdir('/home/barmarcp/domains/barmarc.pl/public_html/zad7/'.$user.'/'.$folder, 0777))
					{
					echo 'Udało się stworzyć katalog';
					}
					else
					{
					echo 'Nie udało się stworzyć katalogu';
					}
				
			}
}
?>
<center><form action="" method="post">
<input type="hidden" name="rej" value="rej">

<p class='tytul'></p>
Stwórz nowy folder:<br/><br>
<input type="text" name="folder" class="textbox"size="30" maxlength="50" /><br/><br>

<input type="submit" name="logowanie" value="dodaj">
<br/><br/><br/>
</form></center>


</center> 
</body>
</html>