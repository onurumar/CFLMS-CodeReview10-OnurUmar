<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <!-- GOOGLE FONTS  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- CSS FILE  -->
    <link rel="stylesheet" href="css/main_style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
  <a class="navbar-brand" href="index.php">Library</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
  </div>
</nav>
<div class="header_box jumbotron">
  <h1 class="display-4">Library</h1>
  <p class="lead">Welcome to the Library</p>
  <hr class="my-4">
  <p>Great to have you here!</p>
</div>


<!-- start online cr10_onurumar_biglibrary -->

<section>

<h1>SEARCH – SELECT – BUY</h1>
<div class="container">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cr10_onurumar_biglibrary";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM product WHERE 1";

    $result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
      if ($row["status"] == 2) {
        echo("
        <div id=\"". $row["id"] ."\" class=\"product\">
          <div>
            <a class=\"edit\" href=\"cr10_onurumar/data_update.php\" target=\"popup\" onclick=\"window.open('../cr10_onurumar/data_update.php?id=". $row["id"] . "','name','width=600,height=800')\">
              <i style=\"font-size:24px\" class=\"fa\">&#xf044;</i>
            </a>
          </div>
          <div>
            <a class=\"delete\" href=\"cr10_onurumar/delete.php\" target=\"popup\" onclick=\"window.open('../cr10_onurumar/delete.php?id=". $row["id"] . "','name','width=600,height=800')\">
              <i style=\"font-size:24px\" class=\"fa\">&#xf1f8;</i>
            </a>
          </div>
          <img src=\"" . $row["img"] ."\">
          <h4>
            <strong>RESERVED: " . $row["title"] . "</strong>
          </h4>
          <p>
            <strong>" . $row["author"] . "</strong><br>" . $row["description"] . "
          </p>
        </div>");
        }
      if ($row["status"] == 1) {
        echo("
        <div id=\"". $row["id"] ."\" class=\"product\">
          <div>
            <a class=\"edit\" href=\"cr10_onurumar/data_update.php\" target=\"popup\" onclick=\"window.open('../cr10_onurumar/data_update.php?id=". $row["id"] . "','name','width=600,height=800')\">
              <i style=\"font-size:24px\" class=\"fa\">&#xf044;</i>
            </a>
          </div>
          <div>
            <a class=\"delete\" href=\"cr10_onurumar/delete.php\" target=\"popup\" onclick=\"window.open('../cr10_onurumar/delete.php?id=". $row["id"] . "','name','width=600,height=800')\">
              <i style=\"font-size:24px\" class=\"fa\">&#xf1f8;</i>
            </a>
          </div>
          <img src=\"" . $row["img"] ."\">
          <h4>
            <strong>" . $row["title"] . "</strong>
          </h4>
          <p>
            <strong>" . $row["author"] . "</strong><br>" . $row["description"] . "
          </p>
        </div>");
        }
        if ($row["status"] == 0) {
          echo("
          <div style=\"opacity:0.5\" id=\"". $row["id"] ."\" class=\"product\">
            <div>
              <a class=\"edit\" href=\"cr10_onurumar/data_update.php\" target=\"popup\" onclick=\"window.open('../cr10_onurumar/data_update.php?id=". $row["id"] . "','name','width=600,height=800')\">
                <i style=\"font-size:24px\" class=\"fa\">&#xf044;</i>
              </a>
            </div>
            <div>
              <a class=\"delete\" href=\"cr10_onurumar/delete.php\" target=\"popup\" onclick=\"window.open('../cr10_onurumar/delete.php?id=". $row["id"] . "','name','width=600,height=800')\">
                <i style=\"font-size:24px\" class=\"fa\">&#xf1f8;</i>
              </a>
            </div>
            <img src=\"" . $row["img"] ."\">
            <h4>
              <strong>" . $row["title"] . "</strong>
            </h4>
            <p>
              <strong>" . $row["author"] . "</strong><br>" . $row["description"] . "
            </p>
          </div>");
          }
  }

    // Free result set
    mysqli_free_result($result);
    // Close connection
    mysqli_close($conn);
    ?>

<a href="cr10_onurumar/update.php" target="popup" onclick="window.open('../cr10_onurumar/update.php','name','width=600,height=900')"><div class="addnew"><i style="font-size:8vh" class="fa">&#xf0fe;</i><h1>ADD NEW</h1></div>

    </div>


</section>

<!-- jQuery & BOOTSTRAP -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>