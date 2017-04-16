<?php
    
    require_once("connection.php");
 
    function renderLayoutWithContentFile($contentFile, $variables = array())
    {


        $contentFileFullPath =  $contentFile;
     
        
        require_once("header.php");
     
        echo "<div id=\"big_part\">\n";
     
        if (file_exists($contentFileFullPath)) {
            require_once($contentFileFullPath);
        } else {
            
            /*
                If the file isn't found the error can be handled in lots of ways.
                In this case we will just include an error template.
            */
            require_once("error.php");
        }
    
     
        // close container div
        echo "</div>\n";
     
        require_once("footer.php");
    }
?>