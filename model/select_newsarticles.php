<?php

$result = $mysqli->query("SELECT * FROM newsarticles ORDER BY date_created DESC");


$result = convertResultToArray($result);
?>
