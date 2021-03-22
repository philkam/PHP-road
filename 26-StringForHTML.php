<?php
$string = 'I love your <b>website</b> very much';
echo htmlspecialchars($string);
echo '<br>';
echo strip_tags($string);
?>