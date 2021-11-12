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
                <a href="index.php"><img src="images/union.png" alt="union"></a>
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
                <a href="#example">Contact</a>
              </li>
            </ul>
          </navbar>
        </div>

        <div class="row">
          <div class="heading">
            <h1>Subscribe to newsletter</h1>
          </div>
          <div class="subheading">
            <p>Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
          </div>
        </div>

        <div class="row">
          <form id="form" action="index.php" method="post">

            <div class="input">
              <input type="text" name="adress" id="adress" class="tbox" required="" autocomplete="off" minlength="5" maxlength="25" placeholder="Type your email address here..." onkeydown="validation()">

              <button class="btn" type="submit" name="insert" id="juj" onclick="myCheckFunction()"><img src="images/ic_arrow.png" alt="arrow"></button>
            </div>
            <span id="text" class="alert"></span>

            <div class="checkmark">
              <input type="checkbox" id="myCheck" name="checkmark" required="" value="1"><p style="color:#6A707B; display:inline"> I agree to&nbsp;</p><a href="#" style="color: black; text-decoration:underline; cursor: pointer; display:inline">terms of service</a>
            </div>
              <span id="alert" class="alert-now"></span>

          </form>

          <hr>
        </div>

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
              <a href="#"><img src="images/union.png" alt="union"></a>
            </li>
            <li class="nav-item2">
              <a href="#">About</a>
            </li>
            <li class="nav-item2">
              <a href="#">How it works</a>
            </li>
            <li class="nav-item2">
              <a href="#">Contact</a>
            </li>
          </ul>
        </navbar>
      </div>

        <img class="image" src="images/image_summer.png" alt="pineapple">
    </div>

  </body>
  </html>

<script type="text/javascript">
  function myCheckFunction() {
    var x = document.getElementById("myCheck").required;
    document.getElementById("alert").innerHTML = "You must accept the terms and conditions!";
    }

  function validation()
  {
    var form = document.getElementById("form");
    var email = document.getElementById("adress").value;
    var text = document.getElementById("text");
    var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{1,}))$/;
    /*
    var novalid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[c|o]{1,}))$/;
    */

    if (email.match(pattern)) {
      form.classList.add("valid");
      form.classList.remove("invalid");
      text.innerHTML = "";
      text.style.color = "white";
    }
      
    else {
      form.classList.remove("valid");
      form.classList.add("invalid");
      text.innerHTML = "Please provide a valid e-mail address!";
      text.style.color = "white";
    }
    /*
    if (email.match(novalid)) {
      form.classList.add("valid");
      form.classList.remove("invalid")
      text.innerHTML = "We are not accepting subscriptions from Colombia emails!";
      text.style.color = "white";
    }
    */
  }
</script>

<?php
if (isset($_POST['insert'])) {

  mysqli_query($link, "insert into emails values(NULL,'$_POST[adress]', NULL)");

  ?>
  <script type="text/javascript">
  window.location="index2.php";
  </script>
  <?php

}

