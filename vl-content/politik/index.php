<?php
	$title = "Politik";
    $Dires = array();
    
    echo "        <h1>$title</h1>";
    $dh = @opendir( $Content.'politik/' );
    while ( false !== ( $file = readdir( $dh ) ) ) {
        if ( is_dir($Content.'politik/'.$file) && ( $file != "." && $file != ".." ) ) {
            $Dires[count($Dires)] = $Content.'politik/'.$file;
        }
    }
    natcasesort($Dires);
    foreach ( $Dires as $dir ) {
        ob_start();
        include $dir.'/index.php';
        $output = ob_get_clean();
        $output = str_replace( "</h1>", "</h2>", str_replace( "<h1>", "<h2>", $output ) );
        echo $output;
    }
?>