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
            echo '<p>' . nl2br(preg_replace('#\*{1}(.*?)\*{1} #', '<b>$1</b>',preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0" class="link">$0</a>', htmlspecialchars($row["file"])))) . '<p>';
		 }
        if (isset($row['image']) && !empty($row['image'])) {
            echo '<img src="' . $row['image'] . '" height='.$row["height"].'px;width='.$row["width"].'px; loading="lazy" alt="Image_missing"/>';
        }
        echo "<p style='color:grey;font-size:13px;text-align:right;'>" . date('j M Y', strtotime($row["date"])) . " at " . date('g:i a', strtotime($row["time"])) . "</p></div>";
    }
} 
$conn->close();
}
?>
