<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'inSource');
$result=mysqli_query($conn, 'SELECT*FROM topic');
?>

<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>inSource</title>
</head>

<body>
     <nav>
          <ul>
               <?php
               while($row=mysqli_fetch_assoc($result)){
                    echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."<br />";
               }
               ?>
          </ul>
     </nav>
</body>

</html>
