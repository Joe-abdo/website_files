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
        <meta property="og:image" content="favicon.png" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="joeabdo.tk"/>
        <meta name="twitter:title" property="og:title" content="Joe-abdo" />
        <meta name="twitter:description" property="og:description" content="The world's best site, our website." />
	  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="/J1.css">
	  <link rel="stylesheet" href="/J2.css">
   </head>
   <body>
   <a id="top"></a>
      <div class="header">
         <h1>Joe-abdo</h1>
         <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
      </div>
      <div class="topnav" id="myTopnav">
         <a href="https://joeabdo.tk" >Home</a>
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
            <div style="text-align:center;">
         <div class="container">
            <form action="/action_page" method="post" enctype="multipart/form-data">
               <textarea name="file" placeholder="What's up, nigga?" style="text-align:left" maxlength="200" ></textarea>
			   <input type="file" accept='image/*' name="image" id="image-source" onchange="previewImage();" /> 
               <img id="image-preview" src="." alt="" style="width:50%;max-width:200px;max-height:200px;display:none;margin-left:auto;margin-right:auto;" />
               <script>
            function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
			   <input type="reset" value="Cancel" onclick="document.getElementById('image-preview').style.display = 'none'" style="font-weight: bold;">
               <input type="submit" value="Post&nbsp;&rarr;" onclick="this.disabled=true;this.value='Posting...';this.form.submit();" style="font-weight: bold;"/>
            </form>
         </div>
      </div>
      </div>  
<!-- body -->
</html>