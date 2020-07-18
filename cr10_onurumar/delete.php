<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cr10_onurumar_biglibrary";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    if ($_GET['id']) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM product WHERE id = {$id}" ;
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();

        $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/styles.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Libary</title>
</head>
<body>
<div id="contact" class="container-fluid">
    <div class="row">
    <img src="<?php echo $data['img'] ?>">

      <div class="col-xl-6 p-0 col-md-6 col-sm-12">
        <form class="deleteform" action="./deletingdata.php" method="post">
          <h1>ARE YOU SURE YOU WANT TO DELETE THIS VEHICLE</h1><br>
          <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
            <button type="submit">Yes, delete it!</button >
            <a href="index.php"><button type="button">No, go back!</button ></a>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
<?php
}
?>