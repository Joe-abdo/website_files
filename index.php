<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
$page_name = 'home';
include_once('bj.php')
?>
</head>
<body>
<a id="home"></a>
<input id="dark-mode" class="dark-mode-checkbox visually-hidden" type="checkbox">
<div class="theme-container grow">
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <div class="header">
	<label class="dark-mode-label" for="dark-mode" style="float:right">
    Dark mode
  </label>
        <h1>Joe-abdo</h1>
        <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
    </div>
    <div class="topnav" id="myTopnav">
         <a href="#home" class="active"><i class="fas fa-home"></i><span class="hide"> Home</span></a>
         <a href="/p"><i class="fas fa-user"></i><span class="hide"> Profile</span></a>
        <!-- <a href="#contact"><i class="far fa-address-card"></i><span class="hide"> Contact</span></a>-->
         <a href="/about" ><i class="fas fa-info-circle"></i><span class="hide"> About</span></a>
		 <!-- <a ><i class="fas fa-cogs"></i><span class="hide"> Settings</span></a>-->
		 <a href="/logout.php" style="float:right"><i class="fas fa-sign-out-alt"></i><span class="hide"> Log out</span></a>
      </div>
    <div class="row">
        <div class="leftcolumn">
   <div id="load_data"></div>
   <div id="load_data_message"></div>
    </div>
        <div class="rightcolumn">
            <div class="card">
                <h3>Future updates:</h3>
                <ul>
				<li>bio and follow</li>
				<li>messaging</li>
                    <li>Better image loading</li>
                    <li>gif compression</li>
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
                <p><?php echo $ver?></p>
            </div>
        </div>
    </div>
    <div class="footer">
        <h2>&copy;Copyright Joe-abdo technologies.co.ltd <?php echo date("Y"); ?></h2>
    </div>
	</div>
<?php echo $closing_body_tag?>
<script>

$(document).ready(function(){
 
 var limit = 7;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<a class='loading'>The End.</a>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<div class='loader'></div>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1000);
  }
 });
 
});

</script>
</html>
