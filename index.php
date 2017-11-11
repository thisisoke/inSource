<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>inSource</title>
</head>

<body>
    <nav>
      <li>Dashboard</li>
      <li>My Account</li>
      <li>Log out</li>
    </nav>

    <div class="progress">
      <h1>Q3 Progress Bar</h1>
      <p>Issue/suggestion submission opened. <b>Deadline: November 20th, 2017 11:59PM (EST)</b></p>
      <a href="#" class="btn">Submit</a>
      <div class="prg-bar-bg">
        <div id="prg-bar-percent">
        </div>
      </div>
      <span class="indicator-grp">
        <div class="indicator-line"></div>
        <a href="#">Submit</a>
      </span>
      <span class="indicator-grp">
        <div class="indicator-line"></div>
        <a href="#">Vote</a>
      </span>
      <span class="indicator-grp">
        <div class="indicator-line"></div>
        <a href="#">Meeting</a>
      </span>
      <span class="indicator-grp">
        <div class="indicator-line"></div>
        <a href="#">Summary</a>
      </span>
    </div>
     <?php
      echo file_get_contents("submissionText.html");//dummyf ile
    ?>
</body>

</html>
