<?php
	$title = "Alexander Van Dam (kassör)";
?>
<?
    $name = "Alexander Van Dam";
    $birthDate = "";
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
<img src="<?php echo $URL ?>img/Alexander Van Dam.jpg" width=200 height=250 alt="Bild på Alexander Van Dam">
<blockquote>
    <? echo $quote ?>
</blockquote>
<h2>Snabba frågor</h2>
<dl>
    <dt>Namn?
    <dd>Alexander Van Dam
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