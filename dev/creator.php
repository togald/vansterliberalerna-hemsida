<?php
	function getDirectory( $path = '.', $level = 0 ){ 

    $ignore = array( 'cgi-bin', '.', '..' ); 
    // Directories to ignore when listing output. Many hosts 
    // will deny PHP access to the cgi-bin. 

    $dh = @opendir( $path ); 
    // Open the directory to the handle $dh 
     
    while( false !== ( $file = readdir( $dh ) ) ){ 
    // Loop through the directory 
     
        if( !in_array( $file, $ignore ) ){ 
        // Check that this file is not to be ignored 
             
            $spaces = str_repeat( '&nbsp;', ( $level * 4 ) ); 
            // Just to add spacing to the list, to better 
            // show the directory tree. 
             
            if( is_dir( "$path/$file" ) ){ 
            // Its a directory, so we need to keep reading down... 
             
                echo "$file\n"; 
                getDirectory( "$path/$file", ($level+1) ); 
                // Re-call this same function but on a new directory. 
                // this is what makes function recursive. 
             
            } else { 
             
                echo "$file\n"; 
                // Just print out the filename 
             
            } 
         
        } 
     
    } 
     
    closedir( $dh ); 
    // Close the directory handle 

} 
	
	
	/*
	function makePage()
	makePage takes a provided HTML content file, parses any PHP code in it, and 
	uses a skel file to create a raw HTML page from it. 
	
	Variables:
		$globalRoot - global root directory on the local machine
		$globalRemoteRoot - global root directory on the remote machine
		$globalGeneratedRoot - directory on the local machine to output the generated files to
		$page - path to the local page template, relative to the global root
		$content - contents of the HTML page that is being parsed
		$output - the parse output written to the HTML file
		$dirs - array containing all directories that will be used to store HTML files, relative to the actual root directory
		
	*/
	
	$globalRoot = '/home/mfserver/ramdisk/Web/';
	$globalRemoteRoot = '/home/mfserver/ramdisk/vanster/';
	$globalOutputRoot = '/home/mfserver/ramdisk/vanster';
	$dirs;
	
	function makePage($page) {
		// Import global variables
		global $globalRoot, $globalRemoteRoot, $globalOutputRoot;
		
		// Open the file, and read it's content to a variable. 
		ob_start();
		include $globalRoot.$page.'index.php';
		$content = ob_get_clean();
		
		// Include the skel file, and save the output
		ob_start();
		include $globalRoot.'dev/skel.php';
		$output = ob_get_clean();
		
		// Check if write directory exist
		if ( !is_dir($globalOutputRoot.$page) ) {
			mkdir($globalOutputRoot.$page, 0755, true);
		}
		
		// Write the output to a file
		$file = fopen($globalOutputRoot.$page.'index.html','w');
		$status = fwrite($file, $output);
		fclose($file);
		
		echo $status."\n";
	}
	
	makePage("dev/");
	getDirectory($globalRoot);
?>