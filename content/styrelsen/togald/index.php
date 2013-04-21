<?php
	$title = "Togald Nilsson (sekreterare)";
?>
<?
    $name = "Togald Nilsson";
    $birthDate = "1992-05-12";
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
<img src="<?php echo $URL ?>img/Togald Nilsson.jpg" width=200 height=250 alt="Bild på Togald Nilsson">

<dl id="about">
    <dt>Namn?
    <dd>Togald Nilsson
    <dt>Ålder?
    <dd><? echo getAge($birthDate) ?> år
    <dt>Sysselsättning?
    <dd>Studerar till Civilingenjör i energisystem vid Uppsala universitet
    <dt>Primära frågor i partiet?
    <dd>Miljöpolitik och immaterialrätt. 
    <dt>Intressen?
    <dd>Datorer, teknik i största allmänhet, eld, saker som brinner, musik. 
</dl>
<p>
<blockquote>
    
</blockquote>