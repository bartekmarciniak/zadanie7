<?php
ob_start();
echo $_POST['fol'];
if(isset($_COOKIE["cookie"])){
					echo "Witaj: ".$_COOKIE["cookie"];
					$login=$_COOKIE["cookie"];
					
				
					if (is_uploaded_file($_FILES['plik']['tmp_name']))
					{
						
						echo 'Odebrano plik: '.$_FILES['plik']['name'].'<br/>';
						if(isset($_POST['fol'])){
						
						header("Location: index.php?fol=".$_POST['fol']."");
						}
						else{
							
							
						header("Location: index.php");
							
						}
					}
					else {echo 'Błąd przy przesyłaniu danych!';}
					
				
				
					
					
					
					
				
}
ob_end_flush();	

?>