<?php  
	$page = @$_GET["page"];
	if ($page == 'halaman') {
		include 'content.php';
	} elseif ($page == 'komen') {
		include 'komen.php';
	} else {
		include 'daftar_post.php';
	}
?>