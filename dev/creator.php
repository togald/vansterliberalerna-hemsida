<?php
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
	
	$globalRoot = '/home/mfserver/ramdisk/source/';
	$globalRemoteRoot = '/home/mfserver/ramdisk/target/';
	$globalOutputRoot = '/home/mfserver/ramdisk/target/';
	$dirs;
	$i;
	
	function makePage($page) {
		// Import global variables
		global $globalRoot, $globalRemoteRoot, $globalOutputRoot;
		
		// Check if an index file exists before doing anything
		if ( file_exists($globalRoot.$page.'index.php') ) {
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
			fwrite($file, $output);
			fclose($file);
			$status = "$page/ successfully created";
		} else {
			$status = "No template avaliable for $page/";
		}
		
		echo "$status\n";
	}
	
	function listDirectoryRecursive( $path = '.', $level = 0 ) {
	// Lägga till fktion för att kolla om $path existerar
		global $dirs, $i;
		$ignore = array( '.', '..' );
		$dh = @opendir( $path );
		while ( false !== ( $file = readdir( $dh ) ) ) {
			if ( !in_array( $file, $ignore ) ) {
				if ( is_dir( "$path/$file" ) ) {
					$dirs[$i] = "$path/$file";
					$i++;
					listDirectoryRecursive ( "$path/$file", $level + 1 );
				}
			}
		}
	}
	
	$directories = scandir($globalRoot);
	$ignore = array('.', '..', 'dev', 'img', '.git');
	$i = 0;
	foreach ( $directories as $directory ) {
		if ( !in_array( $directory, $ignore ) && is_dir( $globalRoot.$directory ) ) {
			$dirs[$i] = $directory;
			$i++;
			listDirectoryRecursive($globalRoot.$directory);
		}
	}
	foreach ( $dirs as $dir ) {
		makePage($dir);
	}
	makePage("");
?>