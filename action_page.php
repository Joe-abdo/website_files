<?php
header("refresh:3;url=index.php");
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
      <div class="header">
         <h1>Joe-abdo</h1>
         <p>The world's best site, <span style="text-decoration:line-through;">my</span> our website.</p>
      </div>
      <div class="topnav" id="myTopnav">
         <a href="https://<?php echo $tld?>" ><i class="fas fa-home"></i><span class="hide"> Home</span></a>
         <a href="#top" class="active"><i class="fas fa-comment-alt"></i><span class="hide"> Post</span></a>
         <a href="#contact"><i class="far fa-address-card"></i><span class="hide"> Contact</span></a>
         <a href="/about" ><i class="fas fa-info-circle"></i><span class="hide"> About</span></a>
      </div>
      <div class="column middle">
	     <div class="text">
             <?php
include_once ('connect.php');
$timezone_offset_minutes = mysqli_real_escape_string($conn,$_COOKIE['tyme']);
if ($timezone_offset_minutes >= 0){
	$sign = '+' ;
}else{
	$sign = '-' ;
}
mysqli_query($conn, "SET SESSION time_zone = '".$sign."".$timezone_offset_minutes/60 .":00'");
$date = "CURDATE()";
$time = "CURTIME()";
$width=''; $height='';
$image_name = mysqli_real_escape_string($conn, strtolower($_FILES['image']['name']));
if (!empty($_FILES['image']['tmp_name']) && file_exists($_FILES['image']['tmp_name'])) {
    $allowed = array('gif', 'png', 'jpg', 'jpeg');
    $ext = pathinfo($image_name, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        echo '<p>Sorry, only JPG, JPEG, PNG, & GIF files are allowed.</p>';
        $image = "";
        $txt = "";
    } else {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            if ($_FILES["image"]["size"] > 10000000) {
                echo "Sorry, your file is too large.";
                $image = "";
                $txt = "";
            } else {
                if ($ext != 'gif') {
					
					$newFilename = mysqli_real_escape_string($conn, $_FILES["image"]["name"] ."_". random_int(-time(), 0) . "_". uniqid() .".webp");
                    if ($ext == 'jpg' || $ext == 'jpeg') {
                        $img = imagecreatefromjpeg($_FILES['image']['tmp_name']);
						imagepalettetotruecolor($img);
						imagealphablending($img, true);
						imagesavealpha($img, true);
						imagewebp($img, "./pictures/" . $newFilename, 70);
						list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
						imagedestroy($img);
                    } elseif ($ext == 'png') {
                        $img = imagecreatefrompng($_FILES['image']['tmp_name']);
						imagepalettetotruecolor($img);
						imagealphablending($img, true);
						imagesavealpha($img, true);
						imagewebp($img, "./pictures/" . $newFilename, 70);
						list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
						imagedestroy($img);
                    }
                } elseif ($ext == 'gif') {
					$newFilename = mysqli_real_escape_string($conn, $_FILES["image"]["name"] ."_". random_int(-time(), 0) . "_". uniqid() .".gif");
					list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
                    move_uploaded_file($_FILES["image"]["tmp_name"],"./pictures/" . $newFilename);
                }
                $txt = mysqli_real_escape_string($conn, trim($_POST['file'], " \t\n\r\0\x0B\s+"));
				$image="pictures/" . $newFilename;
            }
        } else {
            echo "<p>File is not an image.</p>";
            $image = "";
            $txt = "";
        }
    }
} else {
    $image = "";
    $txt = mysqli_real_escape_string($conn, trim($_POST['file'], " \t\n\r\0\x0B\s+"));
}
if (empty($txt) && empty($image)) {
    echo "<p>Thanks, for nothing...</p>";
} else {
    $sql = "INSERT INTO table1 (file,image,width,height,date,time)
              VALUES ('$txt','$image','$width','$height',$date,$time)";
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