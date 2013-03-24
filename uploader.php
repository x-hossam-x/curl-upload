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
 
$upload_directory = dirname(__FILE__).'/uploaded_files/';
//check if form submitted
if (isset($_POST['upload'])) {
    if (!empty($_FILES['my_file'])) {
  		//check for image submitted
    		if ($_FILES['my_file']['error'] > 0) {
			// check for error re file
            echo "Error: " . $_FILES["my_file"]["error"] ;
        } else {
			//move temp file to our server
			move_uploaded_file($_FILES['my_file']['tmp_name'],
			$upload_directory . $_FILES['my_file']['name']);
			echo 'Uploaded File.';
        }
    } else {
	        die('File not uploaded.');
			// exit script
    }
}
