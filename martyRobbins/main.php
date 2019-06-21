<?php
include "config.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Marty Robbins</title>
    <link type="text/css" rel="stylesheet" href="mainstyle.css">
    <script src="js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navigation-bar">
    <img class="logo" src="img/MartyRobbins.jpg">
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <a href="#">Home</a>
    <a href="tracks.php">Tracks</a>
    <a href="albums.php">Albums</a>
    <a href="about.php">About Marty</a>
</nav>
    <p id="title-text">Marty Robbins</p>
    <p id="listeners-text">Listeners</p>
    <p id="listeners-number">285.6k</p>
    <br><br><br><br>
    <hr>

    <div class="marty-info">
      <?php
       $sql = 'SELECT * FROM text';
       $query = mysqli_query($conn, $sql);

       if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

       while ($row = mysqli_fetch_array($query))
       		{
         ?>
         <p class="wat-info-over"><?php echo $row['shortabout'] ?>

         </p>
       <?php } ?>
       <a href="about.php">Read More</a>
       <!--   songs     -->
                  <hr>
       <?php
        $sql = 'SELECT * FROM songs';
        $query = mysqli_query($conn, $sql);

        if (!$query) {
 	die ('SQL Error: ' . mysqli_error($conn));
 }

        while ($row = mysqli_fetch_array($query))
        		{
          ?>
          <p class="song-list">
            <a onclick="alert('Currently Unavaible'); "; target="_blank">&#9654;</a>
            <?php echo $row['id'] ?>
            <?php echo "-";?>
            <?php echo $row['name'] ?>
          <?php echo $row['views'] ?> <hr>
          </p>
        <?php } ?>

    </div>

    <div class="marty-top-albums">
      <img src="img/16big-hits.jpg" class="albums">
      <img src="img/adiosamigo.jpg" class="albums">
      <img src="img/country.jpg" class="albums">
      <img src="img/countryclassic.jpg" class="albums">
      <img src="img/el-paso-city.jpg" class="albums">
      <img src="img/el-paso.jpg" class="albums">
      <img src="img/goldencollection.jpg" class="albums">
      <img src="img/mykingofcountry.jpg" class="albums">
      <img src="img/thereformer.jpg" class="albums">
      <img src="img/bigiron.jpg" class="albums">
    </div>

  </body>
</html>
