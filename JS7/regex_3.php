<?php
$pattern = '/apple/';
$replacement = 'banana';
$text = 'i like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; //output: "i like banana pie"
?>