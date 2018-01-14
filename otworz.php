<?php
if(isset($_COOKIE["cookie"])){
$directory = $_COOKIE["cookie"];
$dir = opendir($directory);
echo "<br>Lista plików:<BR />";
 
 
while($file_name = readdir($dir))  {
	 if (($file_name != ".") && ($file_name != "..")) {
		 
		 	
		 //$plik = $file_name;
		
		else{
			echo $file_name;
			
			echo "<a href='index.php?fol=".$file_name."'>  Przeglądaj</a><br>";}
	 }
	 
}

closedir($dir);
}

?>