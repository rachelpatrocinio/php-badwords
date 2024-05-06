<?php
// var_dump($_GET);
$text = $_GET['text'];
$censored = $_GET['censored'];
$modified_text = str_replace($censored, "***", $text, $count);
?>

<h3>ORIGINAL TEXT</h3>
<p><?php echo $text; ?></p>

<h3>ORIGINAL TEXT LENGTH</h3>
<p><?php echo strlen($text); ?></p>

<h3>CENSORED TEXT</h3>
<p><?php echo $modified_text; ?></p>

<h3>CENSORED TEXT LENGTH</h3>
<p><?php echo strlen($modified_text); ?></p>

<h3>REPLACEMENTS:</h3>
<p><?php echo $count; ?></p>





