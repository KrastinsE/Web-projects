<?php
include ('dbcnt.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Homework</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="script.js"></script>
  </head>

  <body>


    <div class="left">
      <div class="leleft"></div>
      
      <div class="lecenter">

        <div class="row">
          <navbar>
            <ul class="nav-list">
              <li class="nav-item">
                <a href="index.php" for="toggle"><img src="images/union.png" alt="union"></a>
              </li>
              <li class="nav-item">
                <a href="index.php">pineapple.</a>
              </li>
              <li class="nav-item">
                <a href="#example">About</a>
              </li>
              <li class="nav-item">
                <a href="#example">How it works</a>
              </li>
              <li class="nav-item">
                <a href="#"><label for="toggle">Contact</label></a>
              </li>
            </ul>
          </navbar>
        </div>

        <div class="row">

          <div class="heading">
            <a href="#"><img class="union2" src="images/union2.png" alt="union2"></a>
            <h1>Thanks for subscribing!</h1>
          </div>
          <div class="subheading">
            <p>You have successfully subscribed to our email listing. Check your email for the discount code. To open the list with subscribers press Contact.</p>
          </div>
        </div>

        <hr>

        <div class="row">
          <ul class="social-icons">
            <li class="icons"><a href="#"><img src="images/fb.png" alt="facebook"></a></li>
            <li class="icons"><a href="#"><img src="images/insta.png" alt="instagram"></a></li>
            <li class="icons"><a href="#"><img src="images/tw.png" alt="twitter"></a></li>
            <li class="icons"><a href="#"><img src="images/yt.png" alt="youtube"></a></li>
          </ul>
        </div>
        
      </div>

      <div class="leright"></div>

    </div>

    <div class="right">

      <div class="row">
        <navbar>
          <ul class="nav-list2">
            <li class="nav-item2">
              <a href="index.php"><img src="images/union.png" alt="union"></a>
            </li>
            <li class="nav-item2">
              <a href="#">About</a>
            </li>
            <li class="nav-item2">
              <a href="#">How it works</a>
            </li>
            <li class="nav-item2">
              <a href="#"><label for="toggle">Contact</label></a>
            </li>
          </ul>
        </navbar>
      </div>

      <img class="image" src="images/image_summer.png" alt="pineapple">

    </div>

  <input type="checkbox" id="toggle" name="">
  <div class="wrapper">
    <label for="toggle" class="cancel-btn"><img src="images/listclose.png" alt="list-close"></label>
    <table id="myTable" class="table">
      <div class="ikon"><img src="images/list.png" alt="list"></div>
        <thead class="content">
          <tr>
            <th>Emails<img src="images/down.png" alt="down"></th>
            <th>Date<img src="images/down.png" alt="down"></th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>

      <tbody>
        
      <?php
      $res=mysqli_query($link, "select * from emails");
      while($row=mysqli_fetch_array($res)) {

      echo "<tr>";
      echo "<td>"; echo $row["adress"]; echo "</td>";
      echo "<td>"; echo $row["date"]; echo "</td>";
      echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btns">Edit</button></a> <?php echo "</td>";
      echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btns">Delete</button></a> <?php echo "</td>";
      echo "</tr>";

      }
      ?>
      </tbody>
    </table>
  </div>



  </body>

  <script src="script.js"></script>

  <?php
  if (isset($_POST['insert'])) {

    mysqli_query($link, "insert into emails values(NULL,'$_POST[adress]')");

    ?>
    <script type="text/javascript">
    window.location="index2.php";
    </script>
    <?php

  }

  if (isset($_POST['delete'])) {

    mysqli_query($link, "delete from emails where adress='$_POST[adress]'") or die(mysqli_error($link));

    ?>
    <script type="text/javascript">
    window.location="index2.php";
    </script>
    <?php

  }
  ?>

</html>