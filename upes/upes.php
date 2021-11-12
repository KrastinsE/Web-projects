<!DOCTYPE html>
<html lang="en">
<?php 
include('dbcnt.php');

$upe_id=$_GET['id'];
if($upe_id<1){
  $upe_id=1;
}

$select="SELECT id, nosaukums, apraksts FROM upes WHERE id=".$upe_id;
$select_img="SELECT id, nosaukums, upes_id FROM upes_img WHERE upes_id=".$upe_id;
$result=$conn->query($select);
$result_img=$conn->query($select_img);

$rinda=$result->fetch_assoc();

$conn->close();
?>



  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Er <?php echo $rinda["nosaukums"]?></title>
    <link rel="stylesheet" href="daugava.css" type="text/css">
  </head>

  <body>

    <div class="row">
      <h1 align="center"><?php echo $rinda["nosaukums"]; ?></h1>
    </div>
    
    <div class="row">
      <div class="left"></div>
     
      <div class="center">
        <div class="menu">

          <div class="mb"><a href="upes.php?id=1">DAUGAVA</a></div>
          <div class="mb"><a href="upes.php?id=2">GAUJA</a></div>
          <div class="mb"><a href="upes.php?id=3">LIELUPE</a></div>
          <div class="hmp"><a href="index.php"><img src="images/home.png" style="width:100%"></a></div>

        </div>
      </div>

      <div class="right"></div>

    </div>

    <div class="images">
      <?php
      while($rinda_img=$result_img->fetch_assoc()) {
      echo $rinda_img["nosaukums"];}
      ?>
    

      <?php echo $rinda["apraksts"];?>

    </div>


  </body>

  <script type="text/javascript" src="script.js"></script>

  <footer>
  </footer>

</html>