<?php
    header('Content-Type: application/download');
    header('Content-Disposition: attachment; filename="webkioskextension.crx"');
    header("Content-Length: " . filesize("webkioskextension.crx"));

    $fp = fopen("webkioskextension.crx", "r");
    fpassthru($fp);
    fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Chrome Extension | Download</title>
    </head>
    <body>


        
    </body>
</html>
