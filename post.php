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
         $page_name = 'Post';
         include_once('bj.php')
         ?>
   </head>
   <body>
      <a id="top"></a>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <input id="dark-mode" class="dark-mode-checkbox visually-hidden" type="checkbox">
      <div class="theme-container grow">
         <div class="header">
            <label class="dark-mode-label" for="dark-mode" style="float:right">
            Dark mode
            </label>
            <h1>Joe-abdo</h1>
            <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
         </div>
         <div class="topnav" id="myTopnav">
         <a href="<?php echo $tld?>/" ><i class="fas fa-home"></i><span class="hide"> Home</span></a>
         <a href="#top" class="active"><i class="fas fa-user"></i><span class="hide"> Profile</span></a>
        <!-- <a href="#contact"><i class="far fa-address-card"></i><span class="hide"> Contact</span></a>-->
         <a href="/about" ><i class="fas fa-info-circle"></i><span class="hide"> About</span></a>
		 <!-- <a ><i class="fas fa-cogs"></i><span class="hide"> Settings</span></a>-->
		 <a href="/logout.php"  style="float:right"><i class="fas fa-sign-out-alt"></i><span class="hide"> Log out</span></a>
      </div>
         <div class="column middle">
		 <p style='font-size:1.2em;'>'<?php echo $_SESSION["username"] ?>'</p>
            <div style="text-align:center;">
               <div class="container">
			   
                  <form id="upload_form" enctype="multipart/form-data" method="post">
                     <textarea name="file" id="pain" placeholder="What's up, nigga?" style="text-align:left" maxlength="400"></textarea>
                     <input type="file" accept='image/*' name="image" id="image" onchange="previewImage();" />
                     <label id="name" for="image">+Add image <i class="far fa-file-image"></i> <b>?</b></label>
                     <img id="image-preview" src="." alt="" style="width:50%;max-width:200px;max-height:200px;display:none;margin-left:auto;margin-right:auto;" />
                     <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
                     <input type="reset" value="Cancel" onclick="window.location='<?php echo $tld?>/post';" style="font-weight: bold;">
                     <input type="button" value="Post&nbsp;&rarr;" onclick="uploadFile()">
                     
                     <span style="display:none">
                        <p id="loaded_n_total"></p>
                     </span>
                  </form>
               </div>
            </div>
			
			<div class="leftcolumn">
			<h3 id="status"></h3>
   <div id="load_data"></div>
   <div id="load_data_message"></div>
    </div>
         </div>
      </div>
      <?php echo $closing_body_tag?>
      <script>
         /* Script written by Adam Khoury @ DevelopPHP.com */
         /* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
         function _(el){
         	return document.getElementById(el);
         }
         function uploadFile(){
         	var file = _("image").files[0];
         	// alert(file.name+" | "+file.size+" | "+file.type);
         _("progressBar").style.display = "inline-block";
         	var formdata = new FormData(_('upload_form'));
         	formdata.append("image", file);
         
         	var ajax = new XMLHttpRequest();
         	ajax.upload.addEventListener("progress", progressHandler, false);
         	ajax.addEventListener("load", completeHandler, false);
         	ajax.addEventListener("error", errorHandler, false);
         	ajax.addEventListener("abort", abortHandler, false);
         	ajax.open("POST", "upload.php");
         	ajax.send(formdata);
         }
         function progressHandler(event){
         	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
         	var percent = (event.loaded / event.total) * 100;
         	_("progressBar").value = Math.round(percent);
         	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
         }
         function completeHandler(event){
         	_("status").innerHTML = event.target.responseText;
         	_("progressBar").value = 0;
         _('image').value = "";
           _('pain').value = "";
           _("image-preview").style.display = "none";
         _("progressBar").style.display = "none";
         }
         function errorHandler(event){
         	_("status").innerHTML = "Upload Failed";
         }
         function abortHandler(event){
         	_("status").innerHTML = "Upload Aborted";
         }
         function previewImage() {
                                     _("image-preview").style.display = "block";
                                     var oFReader = new FileReader();
                                     oFReader.readAsDataURL(document.getElementById("image").files[0]);
         
                                     oFReader.onload = function(oFREvent) {
                                         document.getElementById("image-preview").src = oFREvent.target.result;
                                     };
                                 };
         						var timezone_offset_minutes = new Date().getTimezoneOffset();
                                 timezone_offset_minutes = timezone_offset_minutes == 0 ? 0 : -timezone_offset_minutes;
         
                                 console.log(timezone_offset_minutes);
                                 document.cookie = "tyme=" + timezone_offset_minutes;
								 
								 
				$(document).ready(function(){
 
 var limit = 7;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"fetchuser.php",
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