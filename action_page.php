<?php
   header("refresh:3; url=https://joeabdo.tk/");
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Joe-abdo|Post</title>
      <meta charset="utf-8" />
	  <meta name="google" content="notranslate">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/favicon.ico">
        <link id="favicon" rel="apple-touch-icon image_src" href="/favicon.png">

        <meta name="description" content="The world's best site, our website."/>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
        <meta property="og:type" content= "website" />
		<meta property="og:locale" content= "en_US" />
        <meta property="og:url" content="https://joeabdo.tk/"/>
        <meta property="og:site_name" content="Joe-abdo" />
        <meta property="og:image"  content="favicon.png" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="joeabdo.tk"/>
        <meta name="twitter:title" property="og:title" content="Joe-abdo" />
        <meta name="twitter:description" property="og:description" content="The world's best site, our website." />
	  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="/J1.css">
   </head>
   <body>
   <a id="top"></a>
      <div class="header">
         <h1>Joe-abdo</h1>
         <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
      </div>
      <div class="topnav" id="myTopnav">
         <a href="https://joeabdo.tk/" >Home</a>
         <a href="#top" class="active">Post</a>
         <a href="#contact">Contact</a>
         <a href="/about">About</a>
       <!--  <div class="dropdown" style="float:right;">
            <button class="dropbtn">Account 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" style="min-width: 120px;">
               <a href="#">Profile</a>
               <a href="#">Log out</a>
               <a href="#">Delete</a>
            </div>
         </div> -->
         <a href="javascript:void(0);" style="font-size:15px;" class="icon"
            onclick="myFunction()">&#9776;</a>
      </div>
      <script>
         function myFunction() {
           var x = document.getElementById("myTopnav");
           if (x.className === "topnav") {
             x.className += " responsive";
           } else {
             x.className = "topnav";
           }
         }
      </script>
      <div class="column middle">
	     <div class="text">
             <?php
include_once('connect.php');
$date = "CURDATE()";
$time = "CURTIME()";

mysqli_query($conn, "SET SESSION time_zone = '+3:00'");

$image_name = mysqli_real_escape_string($conn,strtolower($_FILES['image']['name']));
if (!empty($_FILES['image']['tmp_name']) && file_exists($_FILES['image']['tmp_name'])) {
    
    $allowed = array(
        'gif',
        'png',
        'jpg',
        'jpeg'
    );
    $ext     = pathinfo($image_name, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        echo '<p>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>';
        $image = "";
        $txt   = "";
    } else {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            if ($_FILES["image"]["size"] > 10000000) {
                echo "Sorry, your file is too large.";
                $image = "";
                $txt   = "";
            } else {
                $image = mysqli_real_escape_string($conn,file_get_contents($_FILES['image']['tmp_name']));
                $txt   = mysqli_real_escape_string($conn,trim($_POST['file']," \t\n\r\0\x0B\s+"));
            }
        } else {
            echo "<p>File is not an image.</p>";
            $image = "";
            $txt   = "";
        }
    }
} else {
    $image = "";
$txt   = mysqli_real_escape_string($conn,trim($_POST['file']," \t\n\r\0\x0B\s+"));
}

if (empty($txt) && empty($image)) {
    echo "<p>Thanks, for nothing...</p>";
} else {
    $sql = "INSERT INTO table1 (file,image,image_name,date,time)
              VALUES ('{$txt}','{$image}','{$image_name}',$date,$time)";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }
    echo "<p>Thank you!</p>";
}
mysqli_close($conn);
?>
			</div>
      </div>
  <!-- body -->
</html>