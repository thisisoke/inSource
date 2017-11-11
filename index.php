<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>inSource</title>
</head>

<body>
  <nav>
    <nav>
      <li>Dashboard</li>
      <li>My Account</li>
      <li>Log out</li>
    </nav>
  </nav>
     <?php
      echo file_get_contents("submissionText.html");
    ?>
</body>

</html>
