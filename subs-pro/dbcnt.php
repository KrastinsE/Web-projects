<?php

$link=mysqli_connect("localhost","root","") or die("Pieslēguma kļūda: ".mysqli_error($link));
mysqli_select_db($link, "magebit") or die("Pieslēguma kļūda: ".mysqli_error($link));

?>