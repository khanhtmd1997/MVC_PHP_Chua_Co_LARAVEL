<?php
	echo "<ul>";
	foreach ($posts as $post) {
		echo 
				"<a href='index.php?controller=posts&action=show&id=".$post->id."'>".$post->title."<br></a>";
	}
?>