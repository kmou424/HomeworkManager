<?php
    include 'lib/config.php';
    include 'lib/database.php';
    include 'lib/jstools.php';
    include 'lib/safe_request.php';

    $target = _GET_SELF_WITHOUT_EXT();
    if (!initConf()) header("Location:init?step=1");
?>