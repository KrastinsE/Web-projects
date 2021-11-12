<?php
include ('dbcnt.php');
$id=$_GET["id"];

$adress="";

$res=mysqli_query($link, "select * from emails where id=$id");
while($row=mysqli_fetch_array($res)) {

  $adress=$row["adress"];

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" type="text/css">
  <script src="script.js"></script>
</head>
<body>

  <img class="bg" src="images/bg.jpg" alt="summer">
  <div class="wrapper">
    <div class="col-lg-4">
      <h1>Email editing</h1>
      <form action="" name="form2" method="post">
        <div class="form-group">
          <label for="email">Change subscriber email here:</label>
          <input type="text" class="form-field" id="adress" name="adress" minlength="5" maxlength="25" value="<?php echo $adress; ?>">
        </div>
        <button type="submit" name="update" class="btns">Update</button>
      </form>
    </div>
  </div>

</body>

<?php

if(isset($_POST["update"])) 
{

  mysqli_query($link, "update emails set adress='$_POST[adress]' where id=$id");

  ?>
  <script type="text/javascript">
  window.location="index2.php";
  </script>
  <?php

}
?>

</html>