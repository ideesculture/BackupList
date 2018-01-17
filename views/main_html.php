<?php
/* ----------------------------------------------------------------------
 * app/widgets/links/views/main_html.php :
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2010-2017 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * This source code is free and modifiable under the terms of
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */

 	$po_request	= $this->getVar('request');

    $path = $this->getVar('path');
        //realpath("D:\Programation\wamp64\www\backup");

    $_FILES_array = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);

    foreach($_FILES_array as $index => $files) {
        $filename = basename($files);
        if (($filename != ".") && ($filename != "..")) {
            if (is_dir($files)) {
                echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAADFBMVEVVVVX///+/v7+VlZVxRmVbAAAAHUlEQVQYlWNgRAMMjEwMEMAMFYDxYSIMwwmgex8AJnMAN7xc+MEAAAAASUVORK5CYII=" border="0" style="width:20px"/> ';
                echo $filename . " <BR/>";
            }
            if (is_file($files)){
                echo'<img src="https://br.boardmakershare.com/App_Themes/Main2_0/images/topics.png" border="0" style="width:20px" /> ';
                echo "<a href=\"".str_replace("D:\Programation\wamp64\www\backup","/backup","$files")."\">$filename </a>"."a été modifié le : " . date ("F d Y H:i:s.", filemtime($files)).'Taille: '. 	                      				round((filesize($files)/ 1000000)).'MB'. " <BR/>";

            }

        }

    }

?>
