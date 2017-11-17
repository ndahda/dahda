<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Resume</title>
<link type="text/css" rel="stylesheet" href="resume.css" />

</head>
<body>
<?php
  $user=$_SESSION["user"];
  $servername="localhost";
  $username="root";
  $pswd="root";
  try{
    $conn= new PDO("mysql:host=$servername;dbname=myDB", $username, $pswd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $conn->query("select fullname from details where id='$user'");
    $f = $q->fetch();
    $fullname = $f['fullname'];
    $q = $conn->query("select image from details where id='$user'");
    $f = $q->fetch();
    $image = $f['image'];
    $q = $conn->query("select address from details where id='$user'");
    $f = $q->fetch();
    $address = $f['address'];
    $q = $conn->query("select email from details where id='$user'");
    $f = $q->fetch();
    $email = $f['email'];
    $q = $conn->query("select phone from details where id='$user'");
    $f = $q->fetch();
    $phone = $f['phone'];
    $q = $conn->query("select web from details where id='$user'");
    $f = $q->fetch();
    $web = $f['web'];
    $q = $conn->query("select objective from details where id='$user'");
    $f = $q->fetch();
    $objective = $f['objective'];
    $q = $conn->query("select metricFrom from details where id='$user'");
    $f = $q->fetch();
    $metricFrom = $f['metricFrom'];
    $q = $conn->query("select metricUpto from details where id='$user'");
    $f = $q->fetch();
    $metricUpto = $f['metricUpto'];
    $q = $conn->query("select metricSchool from details where id='$user'");
    $f = $q->fetch();
    $metricSchool = $f['metricSchool'];
    $q = $conn->query("select twelvthFrom from details where id='$user'");
    $f = $q->fetch();
    $twelvthFrom = $f['twelvthFrom'];
    $q = $conn->query("select twelvthUpto from details where id='$user'");
    $f = $q->fetch();
    $twelvthUpto = $f['twelvthUpto'];
    $q = $conn->query("select stream from details where id='$user'");
    $f = $q->fetch();
    $stream = $f['stream'];
    $q = $conn->query("select twelvthSchool from details where id='$user'");
    $f = $q->fetch();
    $twelvthSchool = $f['twelvthSchool'];
    $q = $conn->query("select degree from details where id='$user'");
    $f = $q->fetch();
    $degree = $f['degree'];
    $q = $conn->query("select degreeFrom from details where id='$user'");
    $f = $q->fetch();
    $degreeFrom = $f['degreeFrom'];
    $q = $conn->query("select degreeUpto from details where id='$user'");
    $f = $q->fetch();
    $degreeUpto = $f['degreeUpto'];
    $q = $conn->query("select college from details where id='$user'");
    $f = $q->fetch();
    $college = $f['college'];
    $q = $conn->query("select company from details where id='$user'");
    $f = $q->fetch();
    $company = $f['company'];
    $q = $conn->query("select designation from details where id='$user'");
    $f = $q->fetch();
    $designation = $f['designation'];
    $q = $conn->query("select description from details where id='$user'");
    $f = $q->fetch();
    $description = $f['description'];
    $q = $conn->query("select workFrom from details where id='$user'");
    $f = $q->fetch();
    $workFrom = $f['workFrom'];
    $q = $conn->query("select workUpto from details where id='$user'");
    $f = $q->fetch();
    $workUpto = $f['workUpto'];
    $q = $conn->query("select languages from details where id='$user'");
    $f = $q->fetch();
    $languages = $f['languages'];
  }
  catch(PDOException $e){
  echo "Connection failed: ".$e->getMessage();
  }
  $conn=null;
?>


<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">

      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">

        

          <div class="self">
          
            <h2 class="name">Name:<?php echo $fullname; ?></h2>
            
            <ul>
              <li class="ad"><b>Address:</b><?php echo $address; ?></li>
              <li class="mail"><b>Email:</b><?php echo $email; ?></li>
              <li class="tel"><b>Contact No:</b><?php echo $phone; ?></li>
              <li class="web"><b>Website URL:</b><?php echo $web; ?></li>
            </ul>
            
          </div>

          <div class="social">
            <ul>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="images/icn-print.jpg" alt="" /></a></li>
            </ul>
          </div>

        </div>

        <div class="entry">
          <h2>OBJECTIVE</h2>
          <p id="obj"><?php echo $objective; ?></p>
        </div>

        <div class="entry">
          <h2>EDUCATION</h2>
          <div class="content">
            <h3 id="m2">Metric Education____<br><?php echo $metricFrom; ?>" ----- "<?php echo $metricUpto; ?></h3>
            <p id="m3">"<?php echo $metricSchool;?><br />
              <em id="m4"></em></p>
          </div>
          <div class="content">
            <h3 id="m6">Twelvth Education___<br><?php echo $twelvthFrom; ?> ----- <?php echo $twelvthUpto; ?></h3>
            <p id="m7"><br /><?php echo $stream; ?></p>
              <p><em id="m8"><?php echo $twelvthSchool; ?></em></p>
          </div>
          <div class="content">
            <h3 id="m13">Degree_____<?php echo $degree; ?></h3>
            <p id="m14"><br>College Degree_____<br><?php echo $degreeFrom; ?> ----- <?php echo $degreeUpto; ?><br /></p>
              <p><em id="m15"><?php echo $college; ?></em></p>
          </div>
        </div>

        <div class="entry">
          <h2 id="exp"><?php echo $company; ?></h2>
          <div class="content">
            <h3 id="m9"><?php echo $designation; ?></h3>
            <p id="m10"><?php echo$description; ?></p>
              <p><em id="m11">workFrom ----- <?php echo $workFrom; ?> ----- <?php echo $workUpto; ?></em></p>
            </div>
        </div>

        <div class="entry">
          <h2>SKILLS</h2>
          <div class="content">
            <h3>Languages</h3>
            <ul id="skills" class="skills"><?php echo $languages; ?></ul>
          </div>
        </div>

      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>

  </div>
  <div class="wrapper-bottom"></div>
</div>

</body>
</html>
