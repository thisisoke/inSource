<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8" />
     <title>inSource</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.2.3/jquery.min.js"></script>
</head>

<body>
    <nav>
      <li><a href="#dashboard">Dashboard<</a></li>
      <li><a href="#myAccount">My Account</a></li>
      <li class="btn"><a href="#logOut">Log out</a></li>
    </nav>

    <div class="progress">
      <h1>Q3 Progress Bar</h1>
      <p>Issue/suggestion submission opened. <b>Deadline: November 20th, 2017 11:59PM (EST)</b></p>
      <a class="show btn" target="1" href="javascript:toggle();">Submit</a>
      <div class="prg-bar-bg">
        <div id="prg-bar-percent">
        </div>
      </div>
      <span class="indicator-grp">
        <div class="indicator-line"></div>
        <a class="show" target="1"  id="submitIndicator" href="javascript:toggle();">Submit</a>
      </span>
      <span class="indicator-grp">
        <div class="indicator-line"></div>
        <a class="show" target="2" id="voteIndicator" href="javascript:toggle();">Vote</a>
      </span>
      <span class="indicator-grp">
        <div class="indicator-line"></div>
        <a class="show" target="3" id="meetingIndicator" href="javascript:toggle();">Meeting</a>
      </span>
      <span class="indicator-grp">
        <div class="indicator-line"></div>
        <a class="show" target="4" id="summaryIndicator" href="javascript:toggle();">Summay</a>
      </span>
    </div>

    <div class="subpage">
      <div id="div1" class="targetDiv">
        <section>
          <?php
            echo file_get_contents("submissionText.html");//dummy file
          ?>
        </section>
      </div>
      <div id="div2" class="targetDiv">
        <section>
          <?php
            echo file_get_contents("voteText.html");//dummy file
          ?>
        </section>
      </div>
      <div id="div3" class="targetDiv">
        <section>
          <?php
            echo file_get_contents("meetingText.html");//dummy file
          ?>
        </section>
      </div>
      <div id="div4" class="targetDiv">
        <section>
          <?php
            echo file_get_contents("summaryText.html");//dummy file
          ?>
        </section>
      </div>
    </div>


    <script>
      $('.targetDiv').hide();
      $('.show').click(function() {
        $('#div' + $(this).attr('target')).slideToggle('').siblings('.targetDiv').hide('');
      });
    </script>
</body>

</html>
