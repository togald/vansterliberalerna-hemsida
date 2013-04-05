<?php
	$title = "Press";
?>

<h1><?php echo $title ?></h1>
<p>Här finner du pressmeddelanden som partiet gör, samt grafik som det är fritt fram att ta av och använda i såväl tryckta som digitala publikationer. Licensinformation för fotografier finns i direkt anslutning till varje bild. All Vänsterliberalernas grafik är fri att använda antingen enligt villkoren för WTFPL, Creative Commons eller public domain. 

<?php
    /*
        Vad återstår egentligen?
        
        Jo, det ovan ska automatiseras. Dessutom ska scriptet kunna skapa thumbnails för en bildfil automatiskt, samt lägga till länkar till alla varianter som finns av bilden, och tala om hur stora de är, samt pixelstorlek om det är bitmapsbilder. Vi använder:
         - JPEG
         - PNG
         - TIFF
         - SVG
        och skriptet måste kunna känna av om det finns en SVG-variant av bilden, baserat på namn. Helst ska skriptet kunna skapa en PNG av en SVG-fil, så att man bara behöver ladda upp TIFF för fotografier, och SVG för grafik. Skriptet körs developer-side, men om en thumbnail redan finns ska det inte genereras nya. 
    */
    $path = $Content."press/";
    $ignore = array( '.', '..' );
    $dirs = array();
    $dh = @opendir( $path );
    while ( false !== ( $file = readdir( $dh ) ) ) {
        if ( !in_array( $file, $ignore ) && is_dir( $path.$file ) ) {
            $dirs[sizeof($dirs)] = $file;
        }
    }
    natcasesort( $dirs );
    
    function scanForImages ($path) {
        $images = array();
        $imgdh = @opendir ( $path );
        while ( false !== ( $imgfile = readdir( $imgdh ) ) ) {
            if ( !is_dir( $path.$imgfile ) && false === strpos( $imgfile, ".thumb" ) ) {
                $images[sizeof($images)] = $imgfile;
            }
        }
        return $images;
    }
    
    function uniqueImagesArrayMaker ( $imgarray ) {
        $images = array();
        for ( $i = 0; $i < sizeof( $imgarray ); $i++ ) {
            $imgname = substr( $imgarray[$i], 0, strlen($imgarray[$i])-(strlen($imgarray[$i])-strrpos($imgarray[$i],".")) );
            if ( !in_array( $imgname ,$images ) ) {
                $images[sizeof($images)] = $imgname;
            }
        }
        return $images;
    }
    
    foreach ( $dirs as $dir ) {
        echo "<h2>$dir</h2>\n";
        $images = scanForImages($path.$dir.'/');
        $uniqueImages = uniqueImagesArrayMaker($images);
        foreach ( $uniqueImages as $image ) {
             $svg = $png = $jpg = false;
            if ( in_array( $image.".svg", $images ) )
                $svg = true;
            if ( in_array( $image.".png", $images ) )
                $png = true;
            if ( in_array( $image.".jpg", $images ) )
                $jpg = true;
            echo "<section class=\"pressimage\">\n";
            echo "    <h4>$image</h4>\n";
            if ( $svg )
                echo "    <object data=\"$dir/".rawurlencode( $image ).".thumb.svg\" type=\"image/svg+xml\" width=200>\n    ";
            if ( $png )
                echo "    <img src=\"$dir/".rawurlencode( $image ).".thumb.png\" height=".getimagesize($path.$dir.'/'.$image.'.thumb.png')[1]." width=200 alt=\"$image\">\n";
            if ( $jpg )
                echo "    <img src=\"$dir/".rawurlencode( $image ).".thumb.jpg\" height=".getimagesize($path.$dir.'/'.$image.'.thumb.jpg')[1]." width=200 alt=\"$image\">\n";
            if ( $svg )
                echo "    </object>\n";
            echo "<p>";
            if ( $svg )
                echo "<a href=\"$dir/".rawurlencode( $image ).".svg\">SVG</a> ";
            if ( $png )
                echo "<a href=\"$dir/".rawurlencode( $image ).".png\">PNG</a> ";
            if ( $jpg )
                echo "<a href=\"$dir/".rawurlencode( $image ).".jpg\">JPEG</a> ";
            echo "</section>\n\n";
        }
    }
?>