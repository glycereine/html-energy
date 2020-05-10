<?php
    switch ($_SERVER["SCRIPT_NAME"]) {
        case "/page.php":
            $CURRENT_PAGE = "Page"; 
            $PAGE_TITLE = "Page";
            break;
        case "/hosting.php":
            $CURRENT_PAGE = "Hosting"; 
            $PAGE_TITLE = "Хостинг";
            break;
        default:
            $CURRENT_PAGE = "Index";
            $PAGE_TITLE = "ХОСТИНГ «ЭНЕРГИЯ»";
    }
?>