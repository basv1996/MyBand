<?php

echo '<section>';

//fetch_assoc should not be in the view!
//while ($newsItem = $result->fetch_assoc()) 

foreach($result as $row=>$oneItem){
	
	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
	echo '<content>'.$oneItem['content'].'</content> <br>'; 
	echo '<p>'.$oneItem['date_created'].'</p> <br>'; 
    echo '<img src='.$oneItem["image"].'>';
	echo '</article>';
}

echo '</section>';