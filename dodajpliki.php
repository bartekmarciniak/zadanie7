<html>
 <body>
<?php

@$rej = trim($_REQUEST["rej"]);
     
			if ($rej == "rej"){

				if(isset($_COOKIE["cookie"])){
					echo "Witaj: ".$_COOKIE["cookie"];
					
				}
			}
?>

 <form action="odbierz.php" method="POST"
 ENCTYPE="multipart/form-data">
 <input type="hidden" name="rej" value="rej">
 <input type="file" name="plik"/>
 <input type="submit" value="Wyślij plik"/>
 </form>
 </body>
</html>