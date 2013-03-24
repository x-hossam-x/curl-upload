<?php 
/**
 * Copyright :
 *  Copyright (C) 2012 - 2013 By Hossam Joseph.
 *
 * Description :
 *  Upload Image File To Remote Server With PHP CURL.
 *
 * Licenses :
 *  This program is released as free software under the Affero GPL license. You can redistribute it and/or
 *  modify it under the terms of this license which you can read by viewing the included agpl.txt or online
 *  at www.gnu.org/licenses/agpl.html. Removal of this copyright header is strictly prohibited without
 *  written permission from the original author(s).
 */
  $local_directory=dirname(__FILE__).'/local_files/';
    // create a new curl resource
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
    curl_setopt($ch, CURLOPT_POST, true);
	// set url and other appropriate options
	curl_setopt($ch, CURLOPT_URL, 'http://localhost/curl_upload/uploader.php' );
    //most importent curl assues @filed as file field
    $post_array = array(
        "my_file"=>"@".$local_directory.'hossam.gif',
        "upload"=>"Upload"
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_array);
	
    $response = curl_exec($ch);//this will now work
	echo $response;
	// close curl resource, and free up system resources
	curl_close($ch);
