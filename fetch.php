<?php
if(isset($_POST["limit"], $_POST["start"]))
{
include_once('connect.php');
$sql    = "SELECT * FROM table1 ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
$result = $conn->query($sql);
$url    = '@(http(s)?)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card'><p style='color:grey;font-size:13px'>id:" . $row["id"] . "-</p>";
         if (isset($row['file']) && !empty($row['file'])) {
			 $text = trim(preg_replace('#[\s+]\*{1}(.*?)\*{1}[\s+]#', '<b> $1 </b>',preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0" class="link">$0</a>', htmlspecialchars(" ".$row["file"]." "))));
           $a   = 0;
        $tok = strtok($row["file"], "\n");
        while ($tok !== false && $a < 11) {
            ++$a;
            $tok = strtok("\n");
        }
        if ($a >= 11) {
            $array = explode("\n", $row["file"]);
            $skip  = strlen(implode("\n", array_slice($array, 0, 11)));               
                echo '<input type="checkbox" class="read-more-state" id="' . $row["id"] . '" /><p class="read-more-wrap">' . nl2br(substr($text, 0, $skip)) . "<span class='dots'>...</span><span class='read-more-target'> " . nl2br(substr($text, $skip)) . '</span></p><label for="' . $row["id"] . '" class="read-more-trigger"></label><br /><br />';
		} else {
		echo '<p>' . nl2br($text) . '<p>';
		 }
		}
        if (isset($row['image']) && !empty($row['image'])) {
            echo '<img src="' . $row['image'] . '" height='.$row["height"].'px;width='.$row["width"].'px; loading="lazy" alt="Image_missing"/>';
        }
        echo "<a class ='date'>" . date('j M Y', strtotime($row["date"])) . " at " . date('g:i a', strtotime($row["time"])) . "</a></div>";
    }
} 
$conn->close();
}
?>
