<?php
// var_dump($_GET);
$text = $_GET['text'];
?>

<h3>ORIGINAL TEXT</h3>
<p><?php echo $text; ?></p>

<h3>ORIGINAL TEXT LENGTH</h3>
<p><?php echo strlen($text); ?></p>

<h3>MODIFIED TEXT</h3>
<p><?php echo str_replace($text, "***", $text); ?></p>

<h3>MODIFIED TEXT LENGTH</h3>
<p><?php echo strlen(str_replace($text, "***", $text)); ?></p>





