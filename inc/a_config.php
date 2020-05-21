<?php
    switch ($_SERVER["SCRIPT_NAME"]) {
        case "/vds.php":
            $CURRENT_PAGE = "VDS"; 
            $PAGE_TITLE = "VDS";
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