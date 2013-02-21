<?php
	$title = "Vänsterliberalerna - nya tider ger ny politik";
	$root = "../";
	$content = "";
	$file = fopen($root.'index','r');
	while ( !feof($file) ) {
		$content = "\t\t".$content.fgets($file)."\n";
	}
	fclose($file);
	ob_start();
	include $root.'dev/skel.php';
	$output = ob_get_clean();
	$file = fopen('index.html','w');
	echo fwrite($file, $output);
	echo $root."<br>";
	echo $content."<br>";
	fclose($file);
	
	$s = "<?php $string = potatis;?> Hej hej";
	echo strip_tags($s);
?>