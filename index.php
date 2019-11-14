<!DOCTYPE html>
<html lang="en">
<head>
<?php
$page_name = 'home';
include_once('bj.php')
?>
<style>
a.one { 
  font-size: 15px;
  color: rgb(145, 65, 255);
  border:2px solid rgb(145, 65, 255);
  border-radius: 4px;
  padding: 1px;
  font-weight: bold;
  cursor: pointer;
}
</style>
</head>
   <body>
      <a id="home"></a>
      <div class="header">
         <h1>Joe-abdo</h1>
         <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
      </div>
      <div class="topnav" id="myTopnav">
         <a href="#home" class="active" ><i class="fas fa-home"></i><span class="hide"> Home</span></a>
         <a href="/post"><i class="fas fa-comment-alt"></i><span class="hide"> Post</span></a>
         <a href="#contact"><i class="far fa-address-card"></i><span class="hide"> Contact</span></a>
         <a href="/about"><i class="fas fa-info-circle"></i><span class="hide"> About</span></a>
      </div>
      <div class="row">
         <div class="leftcolumn">
<?php
include_once('connect.php');
$sql    = "SELECT * FROM table1 ORDER BY id DESC";
$result = $conn->query($sql);
$url    = '@(http(s)?)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'>
		<script>
function money".$row["id"]."() {
  var dots".$row["id"]." = document.getElementById('dots".$row["id"]."');
  var moreText".$row["id"]." = document.getElementById('more".$row["id"]."');
  var btnText".$row["id"]." = document.getElementById('myBtn".$row["id"]."');

  if (dots".$row["id"].".style.display === 'none') {
    dots".$row["id"].".style.display = 'inline';
    btnText".$row["id"].".innerHTML = 'Read more <br />'; 
    moreText".$row["id"].".style.display = 'none';
  } else {
    dots".$row["id"].".style.display = 'none';
    btnText".$row["id"].".innerHTML = 'Read less <br />'; 
    moreText".$row["id"].".style.display = 'inline';
  }
}
</script>
				<p style='color:grey;font-size:13px'>id:" . $row["id"] . "-</p>
				" . ((strlen($row["file"])) <= 200 ? '<p>' . nl2br(preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0" class="link">$0</a>', htmlspecialchars($row["file"]))) . '<p>' : '<p>'.nl2br( substr(preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0" class="link">$0</a>', htmlspecialchars($row["file"])), 0, 200) )."<span id='dots".$row["id"]."'>...</span><span style='display: none' id='more".$row["id"]."'> ".nl2br(substr( preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0" class="link">$0</a>', htmlspecialchars($row["file"])), 200) ).'</span></p><a class="one" onclick="money'.$row["id"].'()"  id="myBtn'.$row["id"].'">Read more<br /></a> <br />') . "
				" . ((isset($row['image']) && !empty($row['image'])) ? '<img src="' .$row['image'] . '" style="max-width:100%;max-height:500px;" loading="lazy" alt="Image_missing"/>' : '') . "
				<p style='color:grey;font-size:13px;text-align:right;'>" . date('j M Y', strtotime($row["date"])) . " at " . date('g:i a', strtotime($row["time"])) . "</p>
			 </div>";
    }
} else {
    echo "<div class='card'> Website's empty, what a fucking suprise... </div>";
}
$conn->close();
?>

         </div>
         <div class="rightcolumn">
            
            <div class="card">
               <h3>Future updates:</h3>
               <ul>
			   <li>Better loading</li>
			   <li>load on scroll</li>
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
  <!-- body -->
</html>