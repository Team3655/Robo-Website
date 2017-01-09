<?php

echo '<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="logo.jpg" alt="logo" height="50" width="50"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="about-mentors.php">Mentors</a></li>
            <li><a href="about-history.php">History</a></li>
            <li><a href="about-awards.php">Awards</a></li>
            <li><a href="about-robotics.php">Robots</a></li>
            <li><a href="about-frc.php">FRC</a></li>
          </ul>
        </li>
        <li><a href="calender.php">Calender</a></li>
        <li><a href="media.php">Media</a></li>
        <li><a href="sponsors.php">Sponsors</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>'

?>