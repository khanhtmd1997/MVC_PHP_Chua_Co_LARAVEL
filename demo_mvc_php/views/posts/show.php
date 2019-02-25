
<?php
echo "<table>".
	"<tr><th>Tiêu Đề</th><th>Nội Dung</th><Thao Tác</th></tr>".
	"<tr>
		<td>".$posts->title."</td>".
		"<td>".$posts->content."</td>".
		"<td>".
			"<a href='index.php?controller=posts&action=them'>Thêm</a>".
			"<a href='index.php?controller=posts&action=sua&id=".$posts->id."'>Sửa</a>".
			"<a href='index.php?controller=posts&action=xoa&id=".$posts->id."'>Xóa</a>".

	"</tr>";
?>