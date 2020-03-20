<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$page_name = 'Error:404';
include_once('bj.php')
?>
</head>
<body>
    <a id="top"></a>
	<input id="dark-mode" class="dark-mode-checkbox visually-hidden" type="checkbox">
<div class="theme-container grow">
    <div class="header">
	<label class="dark-mode-label" for="dark-mode" style="float:right">
	Dark mode
  </label>
        <h1>404</h1>
        <p>Error,this page isn't available.</p>
    </div>
	<div class="topnav" id="myTopnav">
         <a href="<?php echo $tld?>/" ><i class="fas fa-home"></i><span class="hide"> Home</span></a>
         <a href="/p"><i class="fas fa-user"></i><span class="hide"> Profile</span></a>
        <!-- <a href="#contact"><i class="far fa-address-card"></i><span class="hide"> Contact</span></a>-->
         <a href="/about"><i class="fas fa-info-circle"></i><span class="hide"> About</span></a>
		 <!-- <a ><i class="fas fa-cogs"></i><span class="hide"> Settings</span></a>-->
		 <a href="/logout.php"  <?php echo "".((!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)? 'style="display:none;"' : 'style="float:right"' )."" ?>><i class="fas fa-sign-out-alt"></i><span class="hide"> Log out</span></a>
        <a href="#top" class="active"><i class="fas fa-exclamation-triangle"></i><span class="hide"> Ẹ̷͕̳̦̝̹͓̲̽͆̿̄̆͒̕̕͝͝ͅr̷͙̲̲̫̪͙͍̙͑͠ŗ̶̻̲̜͌̒ō̵̫̲̲͈̮̰͍͕̎͐̊̓͝r̵̢̘̠̖̋̓̐̆̉̐͆̊̈͝ ̶̨̛̳̼̲̅͗̈̇͊͝ͅ4̸̖̹̞̙̲͔̞͔̯͈͌0̴̦̠͉̱̾̔̊̒͑̄͊͆4̴̢̧̤͙̺̠̬͖͉̤̓̅̊̒̿</span></a>
    </div>
    <div class="row">
        <div class="leftcolumn">
            <div class='card'>
                <p style='color:grey;font-size:13px'>id: ̸̸̶̵̸̶̴̷̸̷̧̏̆́͋͘͠█̷̴̶̸̵̸̶̶̠̃̑̕͠- </p>
                <p>Congratulations! You have found the super secret post,hidden from everyone else... I'm kidding,you just entered a wrong link. Anyhow, nice to see you.</p>
                <p style='color:grey;font-size:13px;text-align:right;'>31 Feb -0001 at 12:00 am</p>
            </div>
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
	</div>
<?php echo $closing_body_tag?>
</html>