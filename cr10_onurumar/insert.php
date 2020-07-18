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
            $title = mysqli_real_escape_string($conn, $_REQUEST['title']);
            $img = mysqli_real_escape_string($conn, $_REQUEST['img']);
            $author = mysqli_real_escape_string($conn, $_REQUEST['author']);
            $ISBN_code = mysqli_real_escape_string($conn, $_REQUEST['ISBN_code']);
            $description = mysqli_real_escape_string($conn, $_REQUEST['description']);
            $publish_date = mysqli_real_escape_string($conn, $_REQUEST['publish_date']);
            $publisher = mysqli_real_escape_string($conn, $_REQUEST['publisher']);
            $type = mysqli_real_escape_string($conn, $_REQUEST['type']);
            $status = mysqli_real_escape_string($conn, $_REQUEST['status']);

            // Attempt insert query execution
            $sql = "INSERT INTO product (title, img, author, ISBN_code, description, publish_date, publisher, type, status) 
            VALUES ('$title', '$img', '$author', '$ISBN_code', '$description', '$publish_date', '$publisher', '$type', '$status')";

            if(mysqli_query($conn, $sql)){
                echo "<script type=\"text/javascript\">
                setTimeout(
                    function ()
                {
                  self.close();
                }, 3000 );
                </script><div style=\"display:flex;justify-content:center;align-itmes:center;flex-direction:column;\"><img style=\"object-fit:contain;\" src=\"https://www.healthifyme.com/blog/wp-content/uploads/2019/07/success_400x300.gif\"></div>";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
          ?>