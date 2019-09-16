<?php
	if($panggil == "artikel"){
		include_once("pages/artikel.php");
	}else if($panggil == "pengaturan"){
		include_once("pages/pengaturan.php");
	}else if($panggil == "profile"){
		include_once("pages/profile.php");
	}else{
		include_once("pages/utama.php");
	}
?>
