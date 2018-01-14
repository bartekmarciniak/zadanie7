<?php
$filename = $_GET["p"];
//wybieramy plik do ściągnięcia
	header('Content-Type:application/force-download');//ustawiamy mu uniwersalny typ mime (można bawić się w nadawanie mu application/msword, image/gif, itd...
	header('Content-Disposition: attachment; filename="'.basename($filename).'";');//tutaj podajemy nazwę pliku - domyślnie ustawiłem, aby plik nazywał się tak jak oryginał
	
        
	@fread($filename, 10)or die('File not found.');//czytamy plik 
?>
