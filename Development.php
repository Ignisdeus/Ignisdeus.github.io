<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Iggy Games Level Design</title>
<link rel="stylesheet" type="text/css" href="file:///H|/Iggy Games Sight/Iggy Games Sight/css/Home_page.css">

</head>




<body id="body">
<?php

$title = "<h1>News Story</h1>" ;

$artical = " <p>This is the default artical this will see if the php works in this mannor or if I am a noob with legs.</p> ";


?>
<div id="lwrapper">
  <div id="login">
          <div class="buttonone">
           <div id= "login"><p class="username">User Name : </p> <form id="form1" name="form1" method="post" action="">
              <label for="username"></label>
              <input name="username" type="text" id="username" value="User Name" />
              <br />
              <p class="password"> Password: </p>
              <label for="username"></label>
              <input name="username" type="Password" id="username" value="Password" />
               <input type="submit" name="login" id="login2" value="Submit" />
            </form>
            </div>
    </div>
  </div>
     
  
       <div id="imagebox"><img src="file:///H|/Iggy Games Sight/Images/Banner_image.jpg" width="996" height="150" alt="Logo" /></div>
        <div id="navagtion">
   <ul class="nav">
   <li><a href="file:///H|/Iggy Games Sight/index.html">HOME</a></li>
   <li><a href="#">GAMES</a></li>
   <li><a href="#">GAME ART</a></li>
   <li><a href="file:///H|/Iggy Games Sight/Development.html">DEVELOPMENT</a></li>
   <li><a href="#">FORMS</a></li>
   <li><a href="#">CONTACT US</a></li>
   </ul>
   </div>

<div id="fullpage">
   <div id="news">
   <?php echo $title ?>
   <br />
    <?php echo $artical ?>
   </div>
</div>

<div id="lfooterwrapper">
              <div id="lfooterleft">
                <p>All work does by this companey is Copyright <br />
                  &copy;IggyGame</p>
              </div>
              <div id="lfooterright">
                <p><strong>Contact us: </strong>01-245 8742<br />
                  <strong>E-mail: </strong> iggygames@irishgames.com</p>
</div>
</div>
</div>
</body>
</html>
