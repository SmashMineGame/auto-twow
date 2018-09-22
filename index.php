<?php
    include("header.html");
    
    $file = "views/".$_GET['page'].".html";
    if ($_GET["page"] == "" || !file_exists($file)){
        include("views/home.html");
    } else {
        
        include($file);
    }
    
    include("footer.html");
?>