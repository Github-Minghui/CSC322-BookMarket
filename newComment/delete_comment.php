<?php
require("connect.php");
$deletecommentId = $_GET['comment_id'];
mysql_query("DELETE FROM comments WHERE comment_id = '$deleteCommentId'");
header("location: index.php");
?>