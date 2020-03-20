<?php
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if(isset($_POST["limit"], $_POST["start"]))
{
include_once('connect.php');
$who = mysqli_real_escape_string($conn, trim($_SESSION['nigga'], " \t\n\r\0\x0B"));
$sql    = "SELECT * FROM table1 WHERE posted_by = '$who' ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
$result = $conn->query($sql);
$url    = '@(http(s)?)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        //echo "<p style='color:grey;font-size:13px'>id:" . $row["id"] . "-</p>";
		echo "
		<div class='card' dir='auto'>
		<div style='height:52px;width:52px;float:left;margin-right:5px;margin-top:5px;padding:0;text-align:center;border:0;'>
		<div style='width:50px;height:50px;display: table-cell;vertical-align: middle;'><img id='profile-preview' src='". (isset($row['profile'])&& !empty($row['profile'])? $row['profile'] : '/favicon.png' ) . "
' style='max-height:50px;max-width:50px;display: inline-block;' loading='lazy' alt='Image_missing'/></div></div>
		<p style='font-size:1.2em;margin-top:5px;'>" . (isset($row['handle'])&& !empty($row['handle'])? $row['handle'] : $row['posted_by']) . "<br />
		<span style='font-size:1em; color:#888'>@" . $row["posted_by"] . "</span></p>";
         if (isset($row['file']) && !empty($row['file'])) {
			 $text = trim(preg_replace('#[\s+]\*{1}(.*[\S])\*{1}[\s+]#', '<b> $1 </b>',preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0" class="link">$0</a>', htmlspecialchars(" ".$row["file"]." "))));
           $a   = 0;
        $tok = strtok($row["file"], "\n");
        while ($tok !== false && $a < 11) {
            ++$a;
            $tok = strtok("\n");
        }
        if ($a >= 11) {
            $array = explode("\n", $row["file"]);
            $skip  = strlen(implode("\n", array_slice($array, 0, 11)));               
                echo '<input type="checkbox" class="read-more-state" id="' . $row["id"] . '" /><p class="read-more-wrap" dir="auto">' . nl2br(substr($text, 0, $skip)) . "<span class='dots'>...</span><span class='read-more-target' dir='auto'> " . nl2br(substr($text, $skip)) . '</span></p><label for="' . $row["id"] . '" class="read-more-trigger"></label><br /><br />';
		} else {
		echo '<p dir="auto">' . nl2br($text) . '<p>';
		 }
		}
        if (isset($row['image']) && !empty($row['image'])) {
            echo '<img src="' . $row['image'] . '" height='.$row["height"].'px;width='.$row["width"].'px; loading="lazy" alt="Image_missing"/>';
        }
        echo "<br /><a class ='date'>" . date('j M Y', strtotime($row["date"])) . " at " . date('g:i a', strtotime($row["time"])) . "</a></div>";
    }
} 
$conn->close();
}
?>
