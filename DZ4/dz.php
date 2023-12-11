<?php
$name = "Ekaterina";
$profession = "developer";
$city_country = "Gomel,Belarus";
$e_mail = "mail.ru";
$phone_number = 375445452646;
$age = 32;

$job = ["epam", "inovaice", "andersen"];
$job_time = ["2000-2011", "2011 - 2013", "2017-current"];
$job_interests = ["cooool", "great", "wonderful"];

$skills = ["Adobe Photoshop", "Photography", "Illustrator", "Media"];
$skills_0 = [70, 95, 50, 78];
// 2 variant
//$skill = [
//'skill_name' = ["Adobe Photoshop", "Photography", "Illustrator", "Media"],
//'level' = [70, 95, 50, 78];
//]


?>




<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>
            <?php
            echo $name 
            ?>
            </h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
           <?php
            echo $profession 
            ?>
            </p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
           <?php
            echo $city_country
          
            ?>
            </p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
           <?php
            echo $e_mail
            ?>
            </p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
          <?php
            echo $phone_number 
            ?>
            </p>
          <hr>
 <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
           <?php
            echo $age * 365; 
            ?>
            </p>
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p> 
          <?php
            echo $skills[0]
            ?>
            </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:70%">
              <?php
            echo $skills_0[0]
            ?>%
            </div>
          </div>
          <p>  <?php
            echo $skills[1]
            ?>
            </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:95%">
              <div class="w3-center w3-text-white">  <?php
            echo $skills_0[1]
            ?>%
            </div>
            </div>
          </div>
          <p>  <?php
            echo $skills[2]
            ?>
            </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">  <?php
            echo $skills_0[2]
            ?>%
            </div>
          </div>
          <p>  <?php
            echo $skills[3]
            ?>
            </p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:78%">  <?php
            echo $skills_0[3]
            ?>%
            </div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
          <?php
            echo $job[0] 
            ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php
            echo $job_time[0] 
            ?>
            <span class="w3-tag w3-teal w3-round">
            </span></h6>
          <p>  <?php
            echo $job_interests[0] 
            ?>
            </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
          <?php
            echo $job[1] 
            ?>
            </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
          <?php
            echo $job_time[1] 
            ?>
            </h6>
          <p>
          <?php
            echo $job_interests[1] 
            ?>
            </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
          <?php
            echo $job[2] 
            ?>
            </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><span class="w3-tag w3-teal w3-round">
          <?php
            echo $job_time[2] 
            ?>
            </h6>
          <p><?php
            echo $job_interests[2] 
            ?> </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
