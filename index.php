
<?php
include('login/Verifylog.php'); // Includes Login Script
 
if(isset($_SESSION['login_user'])){
header("location:profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>de novo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header"> 
  <h1> <span>Smart Tool For Smart Lawyers</span> </h1>
  <ul class="navi">
    <li><a href="#" class="hover">Home</a></li>
   <li><a href="#" class="hover">About us</a></li>

    <li class="noborder"><a href="#">Contact</a></li>
  </ul>
 
  
</div>

<div id="botBody">
  <div class="subdiv">
    <p class="top">&nbsp;</p>
    <h2 >Users Login</h2>
    <form action="" method="post">

            <div class="form-group">
<label>UserName :</label>
<input id="name" name="username" class="form-control" placeholder="username" type="text">
    </div>
<div class="form-group">
<label>Password :</label>
<input id="password" name="password" class="form-control" placeholder="**********" type="password">
    </div>
<input name="submit" type="submit" class="btn btn-default btn-block" value=" Login ">
<span><?php echo $error; ?></span>



</form>


    <p class="bot"></p>

  </div>

  <div class="subdiv">
    <p class="top">&nbsp;</p>
    <h2 class="event">Latest Events</h2>
    <div class="subdiv1"> <img src="images/pic.gif" alt="" />
      <h3>04.13.17</h3>
      <h4>Software Release date </h4>
      <p>We are finalizing with the software and we are planning on publishing it on early July</p>
      <br class="spacer" />
    </div>
    <div class="subdiv1"> <img src="images/pic2.gif" alt="" />
      <h3>04.13.17</h3>
      <h4>Licence it per user</h4>
      <p>Also will be renewed yearly </p>
      <br class="spacer" />
    </div>
    <p class="more marTop"></p>
    <p class="bot">&nbsp;</p>
  </div>
  <div class="subdiv">
    <p class="top">&nbsp;</p>
    <h2 class="moreServices">More Services</h2>
    <h4>If you have issues uploading or accessing files in the system please inform Your Admin</h4>



    <br>
     <br>
 <br>

    <ul class="servi">
      
      <li><a #">Placerat ultrices,</a></li>
    </ul>
    <p class="more"></p>
    <p class="bot">&nbsp;</p>
  </div>
  <div class="subdiv2">
    <p class="top">&nbsp;</p>
    <h2 class="testi">Testimonials</h2>
    <h4><strong>L.Brian</strong></h4>
    <h4 class="green">On 23rd June 2007</h4>
    <p class="text"><i>Nailobi LLP Advoctes  </i></p>
    <h4><strong>L.Brian</strong></h4>
    <h4 class="green">On 23rd June 2007</h4>
    <p class="text"><i>Gitonga Imayala Advocates </i></p>
     <br>
 <br>

    <p class="more"></p>
    <p class="bot">&nbsp;</p>
  </div>
  <br class="spacer" />
</div>
<div id="highlight">
  
  <h2 class="hight">Belief Highlights</h2>
  <h3>About Smart Tool for Smart Lawyers</h3>
  <p class="text"> -------------------------------------------------------------------------.</strong><br>____________________________________________, </p>
  
  <br class="spacer" />
</div>
<div id="footerbig">
  <div id="footer">
    <ul>
      
    </ul>
    <p>Copyrioht © Eco Mania 2007 All Rights Reserved</p>
    <p>Powered by franktech sytems</a></p>
  </div>
</div>
</body>
</html>
