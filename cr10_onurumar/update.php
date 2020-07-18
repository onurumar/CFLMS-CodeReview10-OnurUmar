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

<div class="form">
      <form action="./insert.php">
          <h1>ADD PRODUCT!</h1>
          <label>
          <br>IMG:<br>
            <input type="text" name="img">
            <input type="hidden" name= "id">
          </label>
          <label>
          <br>TITLE:<br>
            <input type="text" name="title">
          </label>
          <label>
          <br>AUTHOR:<br>
            <input type="text" name="author">
          </label>
          <br>
          <label>
          <br>ISBN CODE:<br>
            <input type="number" name="ISBN_code">
          </label>
          <label>
          <br>PUBLISH DATE:<br>
            <input type="date" name="publish_date">
          </label>
          <label>
          <br>PUBLISHER:<br>
            <input type="text" name="publisher">
          </label>
          <label>
          <br>TYPE:<br>
            <input type="text" name="type">
          </label>
          <label>
          <br>DESCRIPTION:<br>
            <input type="text" name="description">
          </label>
          <br>
          <label>
          <br>STATUS:<br>
            <select name="status" id="status">
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