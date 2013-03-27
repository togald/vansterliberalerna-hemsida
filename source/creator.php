<?php
    /*
    Global variables:
        $Source - global root directory on the local machine
        $Content - path to the content template directory
        $URL - global root directory on the remote machine
        $Target - directory on the local machine to output the generated files to
        $Dirs - array containing all directories that will be used to store HTML files, relative to the actual root directory
        
        IMPORTANT!
        The $URL variable is defined twice. Once for the local path, and once for the remote path, i.e. the URL to the webpage. Be sure to comment out the one you're not using at the moment! 
    */
    
    $Source = '/home/mfserver/ramdisk/vansterliberalerna-hemsida/source/';
    $Content = '/home/mfserver/ramdisk/vansterliberalerna-hemsida/content/';
    $Target = '/home/mfserver/ramdisk/vansterliberalerna-hemsida/target/';
    $URL = 'http://mfserver.net/';
    //$URL = $Target;
    $Dirs = array();
    
    /*
    makePage() is used to parse the contents of a template file, include it in a skeleton and output the resulting code to a raw HTML file in the $Target directory. 
    
    $page - path to the local page template, relative to the global root
    $content - contents of the HTML page that is being parsed
    $output - the parse output written to the HTML file
    $file - temporary file handler for an open file
    */
    
    function makePage($page) {
        // Import global variables
        global $Source, $Content, $URL, $Target;
        
        //first, copy all extra files to the target directory. All files named "index*" are treated as to be used by the page maker as dependencies for index.php, all other files are simply copied bitwise to the $Target location. 
        $dh = @opendir( $Content.$page );
        while ( false !== ( $file = readdir( $dh ) ) ) {
            if ( !is_dir($Content.$page.$file) ) {
                if ( substr( $file, 0, 5 ) != "index" ) {
                    if ( !is_dir( $Target.$page )) { mkdir($Target.$page); }
                    copy( $Content.$page.$file, $Target.$page.$file );
                    echo "Copied ".$page.$file."\n";
                }
            }
        }
        
        // Check if an index file exists before doing anything
        if ( file_exists($Content.$page.'index.php') ) {
            // Open the file, and read it's content to a variable. 
            ob_start();
            include $Content.$page.'index.php';
            $content = ob_get_clean();
            
            //Make sure the content is properly indented
            $content = "<!-- Page content starts here -->\n        ".str_replace("\n", "\n        ", $content)."\n\n        <!-- Page content ends here -->\n";
            
            // Check if the file is /index.php, if not, append " - Vänsterliberalerna" to $title
            if ( $page != "" ) {
                $title .= " - Vänsterliberalerna";
            }
            
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
            $status = "Created ".$page."index.html";
        } else {
            $status = "ERROR: No template avaliable for $page";
        }
        
        echo "$status\n";
    }
    
    /*
    listDirectoryRecursive() is used to recursively list through a directory, and save all the sub-directories into the global $Dirs variable. This function is designed to exclude any normal files, only directories are outputted. 
    
    $path - the directory used as a starting point for the recursive scan
    $level - a counter to keep track of how deep we have scanned
    $ignore - a list of subdirectories to be ignored when scanning the directory tree
    $dh - temporary reference to the open directory handler
    $file - temporary iteration variable that references the current file in the $path
    */
    
    function listDirectoryRecursive( $path = '.', $level = 1 ) {
        // Import needed global variables
        global $Dirs;
        
        // List of directories to ignore
        $ignore = array( '.', '..' );
        
        // Loop through subdirectories of the $path, exclude normal files
        $dh = @opendir( $path );
        while ( false !== ( $file = readdir( $dh ) ) ) {
            if ( !in_array( $file, $ignore ) && is_dir( "$path/$file" ) ) {
                $Dirs[count($Dirs)] = "$path/$file/";
                
                // Call the function again to loop through the subdirectories of the subdirectory...
                listDirectoryRecursive ( "$path/$file", $level + 1 );
            }
        }
    }
    
    /*
    recurse_copy() is copied directly from the PHP reference guide examples. The function is used to recursively copy a directory and all of it's content to a new location. 
    */
    
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
    
    /*
    This is like the main method, i.e. the code that is executed when this file is run. It checks the $Content directory, creates a list of all directories in the $Content directory and any subdirs, and then makes an index page for every directory. Then, a root index page is generated, and style.css, and the img/ directory is copied to the $Target location. 
    */
    
    $directories = scandir($Content);
    $ignore = array('.', '..');
    foreach ( $directories as $directory ) {
        if ( !in_array( $directory, $ignore ) && is_dir( $Content.$directory ) ) {
            $Dirs[count($Dirs)] = $Content.$directory.'/';
            listDirectoryRecursive($Content.$directory);
        }
    }
    foreach ( $Dirs as $dir ) {
        makePage(str_replace($Content, "", $dir));
    }
    
    makePage("");
    if ( copy($Source.'style.css', $Target.'style.css') ) {
        echo "Copied /style.css\n";
    } else {
        echo "ERROR: /style.css could not be copied\n";
    }
    recurse_copy($Source.'img', $Target.'img');
    echo "Copied /img/\n";
?>
