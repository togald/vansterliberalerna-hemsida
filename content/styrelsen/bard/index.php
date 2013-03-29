<?php
	$title = "Bard Nilsson (ordförande)";
?>
<?
    $name = "Bard Nilsson";
    $quote = $cite[$name][rand(0,count($cite[$name])-1)];
?>

<h1><?php echo $title ?></h1>
<img src="<?php echo $URL ?>img/Bard Nilsson.jpg" width=200 height=250 alt="Bild på Bard Nilsson">
<blockquote>
    <? echo $quote ?>
</blockquote>
<p>