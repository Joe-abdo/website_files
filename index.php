<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Joe-abdo|Home</title>
      <meta charset="utf-8" />
	  <meta name="google" content="notranslate" />
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link id="favicon" rel="shortcut icon" href="/favicon.ico">
        <link id="favicon" rel="apple-touch-icon image_src" href="/favicon.png">
        <meta name="description" content="The world's best site, our website."/>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
        <meta property="og:type" content= "website" />
		<meta property="og:locale" content= "en_US" />
        <meta property="og:url" content="https://joeabdo.tk/"/>
        <meta property="og:site_name" content="Joe-abdo" />
        <meta property="og:image" content="/favicon.png" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="joeabdo.tk"/>
        <meta name="twitter:title" property="og:title" content="Joe-abdo" />
        <meta name="twitter:description" property="og:description" content="The world's best site, our website." />	  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="/J1.css">
   </head>
   <body>
      <a id="home"></a>
      <div class="header">
         <h1>Joe-abdo</h1>
         <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
      </div>
      <div class="topnav" id="myTopnav">
         <a href="#home" class="active">Home</a>
         <a href="/post">Post</a>
         <a href="#contact">Contact</a>
         <a href="/about">About</a>
      <!--   <div class="dropdown" style="float:right;">
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
      <div class="row">
         <div class="leftcolumn">

<?php
include_once('connect.php');

$sql = "SELECT id, file, image, date ,time FROM table1 ORDER BY id DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if (isset($row['image']) && !empty($row['image'])) {
        echo "<div class='card'>
		         <p style='color:grey;font-size:13px'>id:". $row["id"]. "- </p>
				 <p>". nl2br(htmlspecialchars($row["file"])). "</p>
				 <img src='data:image/jpeg;base64,".base64_encode(  $row['image'] )."' style='max-width: 100%;max-height:500px;' alt='Image_missing'/>
		         <p style='color:grey;font-size:13px;text-align:right;'>".date('j M Y',strtotime( $row["date"] )). "&nbsp;at&nbsp;".date('g:i a', strtotime( $row["time"] )). "</p>
       		  </div>";
		} else {
			echo "<div class='card'>
		         <p style='color:grey;font-size:13px'>id:". $row["id"]. "- </p>
				 <p>". nl2br(htmlspecialchars($row["file"])). "</p>
		         <p style='color:grey;font-size:13px;text-align:right;'>".date('j M Y',strtotime( $row["date"] )). "&nbsp;at&nbsp;".date('g:i a', strtotime( $row["time"] )). "</p>
       		  </div>";
		}
    }
} else {
    echo "<div class='card'> Website's empty, what a fucking suprise... </div>" ;
}

$conn->close();
?>
         </div>
         <div class="rightcolumn">
            
            <div class="card">
               <h3>Future updates:</h3>
               <ul>
  <li>Like system</li>
  <li>Better image posting</li>
  <li>Security stuff</li>
  <li>B̢̫̤͈̹̤̘͖̍ͫ̃ͣu̬̻͈͍̙g̰̦͕ ̱̙̦͔̪ͭf̡̘͕͔̠͉̥ͣ͐ï̤̿̇͂ͤx̴̮̯̘͙̠̌e̹̭͙͍̣̼̎ͤͭs͙͈͍͋͋̈̕</li>
</ul> 
            </div>
			<div class="card">
               <h2>Sponsored by:</h2>
               <div class="fakeimg" style="height:100px;">Nobody</div>
               <p>Because no one cares about this site...</p>
            </div>
            <div class="card">
               <h3>Website version</h3>
               <p>Beta 1.0.8</p>
            </div>
         </div>
      </div>
      <div class="footer">
         <h2>&copy;Copyright Joe-abdo technologies.co.ltd <?php echo date("Y"); ?></h2>
      </div>
  <!-- body -->
</html>