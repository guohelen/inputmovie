<?php

 function addmovie($name, $year){
	file_put_contents('inputmovies.php', "$name $year\n", FILE_APPEND);
	$name = "";
	$year = "";
}

?>