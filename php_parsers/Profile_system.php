<?php
include_once("../php_includes/check_login_status.php");
if($log_username == "") {
	exit();
}
?><?php
if (isset($_POST['action']) && $_POST['action'] == "send"){

	$image = preg_replace('#[^a-z0-9.]#i', '', $_POST['image']);
	$avatar = $_POST['avatar'];

	// Insert the status post into the database now
	mysqli_query($db_conx, "UPDATE users SET avatar='$avatar' WHERE username='$log_username' LIMIT 1") or die(mysqli_error($db_conx));

	mysqli_close($db_conx);
	echo "yiss|$image";
	exit();
} else {
	echo $_POST['action'];
}
?>
