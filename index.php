<!DOCTYPE html>
<html lang="en">
<head>
    <?php
$page_name = 'home';
include_once('bj.php')
?>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <a id="home"></a>
    <div class="header">
        <h1>Joe-abdo</h1>
        <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
    </div>
    <div class="topnav" id="myTopnav">
        <a href="#home" class="active"><i class="fas fa-home"></i><span class="hide"> Home</span></a>
        <a href="/post"><i class="fas fa-comment-alt"></i><span class="hide"> Post</span></a>
        <a href="#contact"><i class="far fa-address-card"></i><span class="hide"> Contact</span></a>
        <a href="/about"><i class="fas fa-info-circle"></i><span class="hide"> About</span></a>
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
</body>
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
