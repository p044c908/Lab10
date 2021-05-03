<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "priyalchauhan", "Muotiem7", "priyalchauhan");


if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

if(!empty($_POST['posts'])) {
	foreach($_POST['posts'] as $post) {
		$query = "DELETE FROM Posts WHERE post_id='" . $post . "'";
		if ($result = $mysqli->query($query)) {
			echo "<p>Deleted post with ID " . $post . "</p>";
		}
	}
}

?>
