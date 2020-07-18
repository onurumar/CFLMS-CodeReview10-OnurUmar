<?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cr10_onurumar_biglibrary";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

          // Escape user inputs for security
            $title = $_POST['title'];
            $img = $_POST['img'];
            $author = $_POST['author'];
            $ISBN_code = $_POST['ISBN_code'];
            $description = $_POST['description'];
            $publish_date = $_POST['publish_date'];
            $publisher = $_POST['publisher'];
            $type = $_POST['type'];
            $status = $_POST['status'];
            $id = $_POST['id'];

            // Attempt insert query execution
            $sql = "UPDATE product SET title = '$title', img = '$img', author = '$author', ISBN_code = '$ISBN_code', description = '$description', publish_date = '$publish_date', publisher = '$publisher', type = '$type', type = '$type', status = '$status' WHERE id = {$id}";

            if($conn->query($sql) === TRUE) {
                echo "<script type=\"text/javascript\">
                setTimeout(
                    function ()
                {
                  self.close();
                }, 3000 );
                </script><div style=\"display:flex;justify-content:center;align-itmes:center;flex-direction:column;\"><img style=\"object-fit:contain;\" src=\"https://www.healthifyme.com/blog/wp-content/uploads/2019/07/success_400x300.gif\"></div>";
            } else {
                echo "ERROR: Could not able to execute . $conn->error .";
            }
          ?>