<?php
	$title = "Mötesprotokoll";
?>

<h1><?php echo $title ?></h1>
<p>Här kan du ladda ner Vänsterliberalernas mötesprotokoll från styrelsemöten och partimöten. Protokollen sammanställs av sekreteraren efter varje mötestillfälle. 
        
<h2>Styrelsemöten</h2>
<ul><?php
    $Dires = array();
    $dh = @opendir( $Content.'om/protokoll/styrelse' );
    while ( false !== ( $file = readdir( $dh ) ) ) {
        if ( !is_dir($Content.'om/protokoll/styrelse/'.$file) && $file != "index.php" ) {
             $Dires[count($Dires)] = $Target.'om/protokoll/styrelse/'.$file;
        }
    }
    
    // OBS
    // natcasesort måste vändas om, nyaste skall vara först!
    natcasesort($Dires);
    foreach ( $Dires as $dir ) {
       echo '            <li><a href="'.str_replace( $Target, $URL, $dir ).'">'.substr(str_replace( $Target.'om/protokoll/styrelse/', '', $dir ), 0, -4 ).'</a>';
    }
?></ul>

<h2>Partimöten</h2>
<ul><?php
    $Dires = array();
    $dh = @opendir( $Content.'om/protokoll/parti' );
    while ( false !== ( $file = readdir( $dh ) ) ) {
        if ( !is_dir($Content.'om/protokoll/parti/'.$file) && $file != "index.php" ) {
             $Dires[count($Dires)] = $Target.'om/protokoll/parti/'.$file;
        }
    }
    
    // OBS
    // natcasesort måste vändas om, nyaste skall vara först!
    natcasesort($Dires);
    foreach ( $Dires as $dir ) {
       echo '            <li><a href="'.str_replace( $Target, $URL, $dir ).'">'.substr(str_replace( $Target.'om/protokoll/parti/', '', $dir ), 0, -4 ).'</a>';
    }
?></ul>