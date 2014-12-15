<?php 
require("connect.php");
//require("core.php");
$name= $_POST['name'];
$comment= $_POST['comment'];
$submit= $_POST['submit'];
//$user_id = $_POST['user_id'];

if($submit){
	if($name&&$comment){
		$insert=mysql_query("INSERT INTO comments (name, comment) VALUES('$name','$comment')");
	}
	else{
		echo "Please fill out all the fields";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/layout.css" rel="stylesheet">
	<link href="css/comment_insert.css" rel="stylesheet">
</head>
<body>
	<!--<form action="index.php" method="POST">
		<table>
		<tr><td>Name:</td><td><input type="text" name="name"/></td></tr>
		<tr><td colspan="2">Comment: </td><tr>
		<tr><td colspan="2"><textarea name="comment"></textarea></td></tr>
		<tr><td colspan="2"><input type="submit" name="submit" value="Comment"/></td></tr>
		</table>
	</form>-->

	<div class="comment-wrapper">
	<h3 class="comment-title">User feedback....</h3>
	<form action="index.php" method="POST">
		<div class="comment-insert">
			<h3 class="who-says"> <span><i>Says:</i></span><input type="text" name="name"/></h3>
			<div class="comment-insert-container">
				<textarea class="comment-insert-text" id="comment-post-text" name="comment"></textarea>
			</div>
			<div class="comment-post-btn-wrapper" id="comment-post-btn">
				<input type="submit" name="submit" value="Comment"/>
			</div>
		</div>
		<div class="comments-list">
			<ul class="comments-holder-ul">
				<?php 
					$getquery=mysql_query("SELECT * FROM comments ORDER BY comment_id DESC");
					while($rows=mysql_fetch_assoc($getquery)){
						$comment_id = $rows['comment_id'];
						$name = $rows['name'];
						$comment = $rows['comment'];
						//$delete = "<a href=\"delete_comment.php?id=" . $comment_id ."\">Delete</a>";
						echo '<table>'.'<tr>'.'<td>'.'<li class=\"comment-holder\" id=\"_'.$comment_id.'\"\>'.
								'<div class=\"comment-body\">'.
									'<h3 class=\"username-field">'.$name.'</h3>'.'<br/>'.
									'<div class=\"comment-text">'.$comment.'</div>'.'<br/>'.
								'</div>'.
							'</li>'.'</td>'.'</tr>'.'</table>';
					}
				?>
			</ul>
		</div>
	</form>
	</div>
	<?php
	// $getquery=mysql_query("SELECT * FROM comments ORDER BY comment_id DESC");
	// while($rows=mysql_fetch_assoc($getquery)){
		// $comment_id = $rows['comment_id'];
		// $name = $rows['name'];
		// $comment = $rows['comment'];
		// $delete = "<a href=\"delete_comment.php?id=" . $comment_id ."\">Delete</a>";
		// echo $name . '<br/>' . $comment . '<br/>' . $delete . '<br/>';
	// }
	?>
</body>
</html>