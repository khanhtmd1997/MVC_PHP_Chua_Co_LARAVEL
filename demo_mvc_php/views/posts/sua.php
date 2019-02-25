<form method="get" action="http://localhost/demo_mvc_php/index.php?controller=posts&action=show">
	<input type="text" name="title" value="<?php echo $posts->title; ?>">
	<input type="text" name="content" value="<?php echo $posts->content; ?>">
	<input type="submit" name="submit" onclick="submitUpdate($posts->id)">	
</form>
