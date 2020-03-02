<?php
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
if (empty($txt) && empty($image)) {
    echo " ";
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