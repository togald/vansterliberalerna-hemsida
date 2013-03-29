<?php
	$title = "Alexander Van Dam (kassör)";
?>
<?
    $name = "Alexander Van Dam";
    $quote = $cite[$name][rand(0,count($cite[$name])-1)];
?>

<h1><?php echo $title ?></h1>
<img src="<?php echo $URL ?>img/Alexander Van Dam.jpg" width=200 height=250 alt="Bild på Alexander Van Dam">
<blockquote>
    <? echo $quote ?>
</blockquote>
<p>