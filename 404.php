<!DOCTYPE html>
<html lang="en">
   <head>
<?php
$page_name = '404';
include_once('bj.php')
?>

      <style>
         table, th, td {
		 margin: -10px;
         padding:0;
         color:grey;
         width:60%;
         max-width: 200px;
         border:none;
         text-align:center;
         }
         th, td {
         width:50%; 
         }
         th{
         font-size:x-large;
         }
         .qolored:hover{
         color:#0f0f0f;
         cursor:pointer;
         -webkit-transition: color 0.6s; /* For Safari 3.1 to 6.0 */
         transition: color 0.6s;
         transition-delay: 0.1s;
         }
         .mauve{
         color:#6524bf;
         cursor:pointer;
         }
      </style>
   </head>
   <body>
      <a id="top"></a>
      <div class="header">
         <h1>404</h1>
         <p>Error,this page isn't available.</p>
      </div>
      <div class="topnav" id="myTopnav">
         <a href="https://joeabdo.tk/" ><i class="fas fa-home"></i><span class="hide"> Home</span></a>
         <a href="/post"><i class="fas fa-comment-alt"></i><span class="hide"> Post</span></a>
         <a href="#contact"><i class="far fa-address-card"></i><span class="hide"> Contact</span></a>
         <a href="/about"><i class="fas fa-info-circle"></i><span class="hide"> About</span></a>
		 <a href="#top" class="active"><i class="fas fa-exclamation-triangle"></i><span class="hide"> Ẹ̷͕̳̦̝̹͓̲̽͆̿̄̆͒̕̕͝͝ͅr̷͙̲̲̫̪͙͍̙͑͠ŗ̶̻̲̜͌̒ō̵̫̲̲͈̮̰͍͕̎͐̊̓͝r̵̢̘̠̖̋̓̐̆̉̐͆̊̈͝ ̶̨̛̳̼̲̅͗̈̇͊͝ͅ4̸̖̹̞̙̲͔̞͔̯͈͌0̴̦̠͉̱̾̔̊̒͑̄͊͆4̴̢̧̤͙̺̠̬͖͉̤̓̅̊̒̿</span></a>
      </div>
      <div class="row">
         <div class="leftcolumn">
            <div class='card'>
               <p style='color:grey;font-size:13px'>id: ̸̸̶̵̸̶̴̷̸̷̧̏̆́͋͘͠█̷̴̶̸̵̸̶̶̠̃̑̕͠- </p>
               <p>Congratulations! You have found the super secret post,hidden from everyone else... Just kidding,you just entered a wrong link.Anyhow, nice to see you.</p>
               <p style='color:grey;font-size:13px;text-align:right;'>31 Feb -0001 at 12:00 am</p>
               <table >
                  <tr>
                     <th><span id="select" onclick="colorchange('select')" class='qolored'><i   class="fas fa-thumbs-up"></i></span></th>
                     <th><span id="select1" onclick="colorchange('select1')" class='qolored'><i class="fas fa-hand-middle-finger"></i></span></th>
                  </tr>
                  <tr>
                     <td>420</td>
                     <td>69</td>
                  </tr>
               </table>
            </div>
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
               <p><i class="fas fa-hand-middle-finger"></i> 1.5.2-69/420</p>
            </div>
         </div>
      </div>
      <div class="footer">
         <h2>&copy;Copyright Joe-abdo technologies.co.ltd <?php echo date("Y"); ?></h2>
      </div>
      <!-- body v_B1.1.2-->
</html>