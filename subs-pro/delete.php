<?php

include "dbcnt.php";
$id=$_GET["id"];
mysqli_query($link, "delete from emails where id=$id");

?>

<script type="text/javascript">
	
	window.location="index2.php";

</script>