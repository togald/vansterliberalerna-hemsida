<?php
	$title = "Press";
?>

<h1><?php echo $title ?></h1>
<p>Här finner du pressmeddelanden som partiet gör, samt grafik som det är fritt fram att ta av och använda i såväl tryckta som digitala publikationer. Licensinformation för fotografier finns i direkt anslutning till varje bild. All Vänsterliberalernas grafik är fri att använda antingen enligt villkoren för WTFPL, Creative Commons eller public domain. 

<h2>Grafik</h2>
<section class="pressimage">
    <h4>Maskot - fredsduvan</h4>
    <object data="Logo.thumb.svg" type="image/svg+xml" height=200 width=200>
        <img src="Logo.thumb.png" height=200 width=200 alt="Logo">
    </object>
    <img src="<?php echo $URL ?>img/public_domain.png" height=20 width=20 alt="Public Domain">
    <p><a href="Logo.png">PNG</a> <a href="Logo.svg">SVG</a>
</section>

<!--
    Vad återstår egentligen?
    
    Jo, det ovan ska automatiseras. Dessutom ska scriptet kunna skapa thumbnails för en bildfil automatiskt, samt lägga till länkar till alla varianter som finns av bilden, och tala om hur stora de är, samt pixelstorlek om det är bitmapsbilder. Vi använder:
     - JPEG
     - PNG
     - TIFF
     - SVG
    och skriptet måste kunna känna av om det finns en SVG-variant av bilden, baserat på namn. Helst ska skriptet kunna skapa en PNG av en SVG-fil, så att man bara behöver ladda upp TIFF för fotografier, och SVG för grafik. Skriptet körs developer-side, men om en thumbnail redan finns ska det inte genereras nya. 
-->