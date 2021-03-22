<?php
$string = 'I love your <b>website</b> very much';
$str2 = 'how-to-find-work';
echo htmlspecialchars($string);
echo '<br>';
echo strip_tags($string);
echo '<br>';
echo str_replace('-', '*', $str2);
echo '<br>';
echo str_repeat(str_replace('-', ' ', $str2),10);
?>