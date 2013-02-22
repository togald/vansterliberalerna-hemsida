<?php
	/*
	function makePage()
	makePage takes a provided HTML content file, parses any PHP code in it, and 
	uses a skel file to create a raw HTML page from it. 
	
	Variables:
		$Source - global root directory on the local machine
		$URL - global root directory on the remote machine
		$globalGeneratedRoot - directory on the local machine to output the generated files to
	
		$page - path to the local page template, relative to the global root
		$content - contents of the HTML page that is being parsed
		$output - the parse output written to the HTML file
		$Dirs - array containing all directories that will be used to store HTML files, relative to the actual root directory
		
	*/
	
	$Source = '/home/mfserver/ramdisk/source/';
	$Content = '/home/mfserver/ramdisk/content/';
	$URL = 'http://vansterliberalerna.comeze.com/';
	$Target = '/home/mfserver/ramdisk/target/';
	$Dirs;
	$i;
	
	function makePage($page) {
		// Import global variables
		global $Source, $Content, $URL, $Target;
		
		// Check if an index file exists before doing anything
		if ( file_exists($Content.$page.'index.php') ) {
			// Open the file, and read it's content to a variable. 
			ob_start();
			include $Content.$page.'index.php';
			$content = ob_get_clean();
			
			// Include the skel file, and save the output
			ob_start();
			include $Source.'skel.php';
			$output = ob_get_clean();
			
			// Check if write directory exist
			if ( !is_dir($Target.$page) ) {
				mkdir($Target.$page, 0755, true);
			}
			
			// Write the output to a file
			$file = fopen($Target.$page.'index.html','w');
			fwrite($file, $output);
			fclose($file);
			$status = "Successfully created $page/index.html";
		} else {
			$status = "No template avaliable for $page/";
		}
		
		echo "$status\n";
	}
	
	function listDirectoryRecursive( $path = '.', $level = 0 ) {
	// Lägga till fktion för att kolla om $path existerar
		global $Dirs, $i;
		$ignore = array( '.', '..' );
		$dh = @opendir( $path );
		while ( false !== ( $file = readdir( $dh ) ) ) {
			if ( !in_array( $file, $ignore ) ) {
				if ( is_dir( "$path/$file" ) ) {
					$Dirs[$i] = "$path/$file";
					$i++;
					listDirectoryRecursive ( "$path/$file", $level + 1 );
				}
			}
		}
	}
	
	function recurse_copy($src,$dst) { 
		$dir = opendir($src); 
		@mkdir($dst); 
		while(false !== ( $file = readdir($dir)) ) { 
			if (( $file != '.' ) && ( $file != '..' )) { 
				if ( is_dir($src . '/' . $file) ) { 
					recurse_copy($src . '/' . $file,$dst . '/' . $file); 
				} 
				else { 
					copy($src . '/' . $file,$dst . '/' . $file); 
				} 
			} 
		} 
		closedir($dir); 
	} 
	
	$directories = scandir($Content);
	$ignore = array('.', '..');
	$i = 0;
	foreach ( $directories as $directory ) {
		if ( !in_array( $directory, $ignore ) && is_dir( $Source.$directory ) ) {
			$Dirs[$i] = $directory;
			$i++;
			listDirectoryRecursive($Content.$directory);
		}
	}
	foreach ( $Dirs as $dir ) {
		makePage($dir);
	}
	
	makePage("");
	if ( copy($Source.'style.css', $Target.'style.css') ) {
		echo "Successfully copied /style.css\n";
	} else {
		echo "ERROR: /style.css could not be copied\n";
	}
	recurse_copy($Source.'img', $Target.'img');
	echo "Successfully copied /img/\n";
?>
