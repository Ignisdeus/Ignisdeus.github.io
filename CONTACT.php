
<?php


if($_POST["message"]) {


mail("micahel.j.carstairs@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Header_Infomation.css">
<link rel="stylesheet" type="text/css" href="Info_Pages.css">
<title>Michael Carstairs Education</title>
</head>

<body id = "Body">

<div id = "wrapperContact">
  <div id = "header">
    <div id= "LeftHeader">
   	  <div id= "Name">
       	  <h2>Michael Carstairs</h2>
     </div>
        <div id ="JobTitle">Game Programmer / Game Designer</div>
    </div>
    <div id = "Links">
    	<p><a href="index.html">HOME</a> <a href="GAME.html">GAME</a> <a href="CONTACT.html">CONTACT</a></p>
    </div>
  </div>

<div id = "BodySectioncContact">
<p> <br /></p>
<p> <br /></p>
	<h1 id= "Headings">Contact</h1>
	<div id ="HeaderImage">
	<div id ="pc"><img src="Image/Contact_Image.jpg" width="855px" , height="342"></div>
    <div id ="Tablet"><img src="Image/Contact_Image.jpg" width="750px" , height="300"></div>
    <div id ="Mobile"><img src="Image/Contact_Image.jpg" width="310px" , height="130"></div>
    </div>
	<div id= "Paragrah">
 	<h2>- Email</h2>
    <p><a href="michael.j.carstairs@gmail.com">E-mail Michael here</a> <br /><br /> or</p>
    
   	<form action=”mailto:michael.j.carstairs@gmail.com”
    method=”POST”
    enctype=”multipart/form-data”
    name=”EmailForm”>
    Name: <br />
    <input type=”text” size=”19″ name=”ContactName”><br><br>
    E-Mail: <br />
    <input type=”text” size=”19″ name=”ContactName”><br><br>
    Message:<br> <textarea name=”ContactCommentt” rows=”10″ cols=”60″></textarea><br><br>
    <input name="Submit" type="submit" />
    </form>
    <h2>- LinkedIn</h2>
    <p>   <a href="https://www.linkedin.com/in/michael-carstairs-449633146/">Find Michael Here</a></p>
    
    
	</div>
</div>




	<div id = "Contact_Infoamtion">
<div id = "email">
            </p>
            <a href="https://michael-carstairs.itch.io/">Itch.io</a><br />
    <a href="https://www.linkedin.com/in/michael-carstairs-449633146/">Linked in Profile</a><br />
            michael.j.carstairs@gmail.com 
            </p>
        <div>
	</div>


<!-- end of Wrapper !-->
</div>
</body>
</html>
