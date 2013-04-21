<?php
	$title = "Bard Nilsson (ordförande)";
?>
<?
    $name = "Bard Nilsson";
    $birthDate = "1994-02-15";
    $quote = $cite[$name][rand(0,count($cite[$name])-1)];
    
    function getAge($then) {
        $then_ts = strtotime($then);
        $then_year = date('Y', $then_ts);
        $age = date('Y') - $then_year;
        if(strtotime('+' . $age . ' years', $then_ts) > time()) $age--;
        return $age;
    }
?>

<h1><?php echo $title ?></h1>
<blockquote>
    <? echo $quote ?>
</blockquote>
<img src="<?php echo $URL ?>img/Bard Nilsson.jpg" width=200 height=250 alt="Bild på Bard Nilsson">

<dl id="about">
    <dt>Namn?
    <dd>Bard Nilsson
    <dt>Ålder?
    <dd><? echo getAge($birthDate) ?> år
    <dt>Sysselsättning?
    <dd>
    <dt>Primära frågor i partiet?
    <dd>
    <dt>Intressen?
    <dd>
</dl>
<p>
<blockquote>
    
</blockquote>