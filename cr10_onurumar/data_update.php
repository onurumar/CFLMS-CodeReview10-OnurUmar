
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
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/styles.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Libary</title>
</head>
<body>

      <img src="<?php echo $data['img'] ?>">

      <div class="form">
      <form action="./data_insert.php" method="post">
          <h1>EDIT PRODUCT!</h1>
          <label>
          <br>CHANGE IMG:<br>
            <input type="text" name="img" value="<?php echo $data['img'] ?>">
            <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
          </label>
          <label>
          <br>CHANGE TITLE:<br>
            <input type="text" name="title" value="<?php echo $data['title'] ?>">
          </label>
          <label>
          <br>CHANGE AUTHOR:<br>
            <input type="text" name="author" value="<?php echo $data['author'] ?>">
          </label>
          <br>
          <label>
          <br>CHANGE ISBN CODE:<br>
            <input type="number" name="ISBN_code" value="<?php echo $data['ISBN_code'] ?>">
          </label>
          <label>
          <br>CHANGE PUBLISH DATE:<br>
            <input type="date" name="publish_date" value="<?php echo $data['publish_date'] ?>">
          </label>
          <label>
          <br>CHANGE PUBLISHER:<br>
            <input type="text" name="publisher" value="<?php echo $data['publisher'] ?>">
          </label>
          <label>
          <br>CHANGE TYPE:<br>
            <input type="text" name="type" value="<?php echo $data['type'] ?>">
          </label>
          <label>
          <br>CHANGE DESCRIPTION:<br>
            <input type="text" name="description" value="<?php echo $data['description'] ?>">
          </label>
          <br>
          <label>
          <br>CHANGE STATUS:<br>
            <select name="status" id="status" value="<?php echo $data['status'] ?>">
              <option value="2">reserved</option>
                <option value="1">available</option>
                <option value="0">not available</option>
            </select>
          </label>
          <br>
          <input type="submit" class="btn" value="UPDATE">
  
        </form>
      </div>

</body>
</html>

<?php
}
?>