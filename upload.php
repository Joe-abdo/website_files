<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}//$_SESSION['username']
include_once ('connect.php');
$timezone_offset_minutes = $_COOKIE['tyme'];
if ($timezone_offset_minutes >= 0){
	$sign = '+' ;
}else{
	$sign = '-' ;
}
mysqli_query($conn, "SET SESSION time_zone = '".$sign."".$timezone_offset_minutes/60 .":00'");
$date = "CURDATE()";
$time = "CURTIME()";
$width=intval(NULL); $height=intval(NULL);
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
						imagewebp($img, "./pictures/" . $newFilename, 70);
						list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
						imagedestroy($img);
                    } elseif ($ext == 'png') {
                        $img = imagecreatefrompng($_FILES['image']['tmp_name']);
						imagewebp($img, "./pictures/" . $newFilename, 70);
						list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
						imagedestroy($img);
                    }
                } elseif ($ext == 'gif') {
					$newFilename = mysqli_real_escape_string($conn, $_FILES["image"]["name"] ."_". random_int(-time(), 0) . "_". uniqid() .".gif");
					list($width, $height) = getimagesize($_FILES['image']['tmp_name']);
                    move_uploaded_file($_FILES["image"]["tmp_name"],"./pictures/" . $newFilename);
                }
                $txt = mysqli_real_escape_string($conn, trim($_POST['file'], " \t\n\r\0\x0B"));
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
    $txt = mysqli_real_escape_string($conn, trim($_POST['file'], " \t\n\r\0\x0B"));
}
$who = mysqli_real_escape_string($conn, trim($_SESSION['username'], " \t\n\r\0\x0B"));
if (empty($txt) && empty($image)) {
    echo " ";
} else {
    $sql = "INSERT INTO table1 (file,image,width,height,posted_by,date,time)
              VALUES ('$txt','$image','$width','$height','$who',$date,$time)";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }
	$url    = '@(http(s)?)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
    echo "<div class='card' dir='auto'><p style='font-size:1.2em;margin-top:5px'>&nbsp" . $who . "<br />
		<span style='font-size:1em; color:#888'>@" . $who . "</span></p>";
         if (isset( $txt) && !empty( $txt)) {
			 $text = trim(preg_replace('#[\s+]\*{1}(.*[\S])\*{1}[\s+]#', '<b> $1 </b>',
			 preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0" class="link">$0</a>', htmlspecialchars(" ". $txt." "))));
		echo '<p dir="auto">' . nl2br($text) . '<p>';
		}
        if (isset($image) && !empty($image)) {
            echo '<img src="' . $image . '" height=' . $height.'px;width=' . $width . 'px; loading="lazy" alt="Image_missing"/>';
        }
        echo "<br /><a class ='date'>" . date('j M Y', strtotime($date)) . " just now </a></div>";
}
mysqli_close($conn);
?>