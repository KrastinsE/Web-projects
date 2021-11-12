<?php
$conn=mysqli_connect("sql209.epizy.com","epiz_29373619","fymmWUI7vWJx7r","epiz_29373619_upes_db");
if(!$conn){
	die("Pieslēguma kļūda: ".mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

?>