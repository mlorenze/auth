<?php
    header("Status: 301 Moved Permanently");
    header("Location: instlost://". $_SERVER['QUERY_STRING']);
    exit;
?>
