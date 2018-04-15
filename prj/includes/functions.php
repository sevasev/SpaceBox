<?php
function get_games(){
	global $link;
	$sql = "SELECT * FROM games";
	$result = mysqli_query($link, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}