<?php

require_once('config.php');

?>
<!DOCTYPE html>

<html lang="de">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    
    <!-- Customized Style -->
    <link rel="stylesheet" href="/public/css/customized.css">

    <title>Mediengutschein</title>

</head>
<?php


// Sessionstart falls noch nicht gestartet
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

?>
<script src="/public/js/color.js"></script>
<script type="text/javascript">
      (function() {
        initColor();
      })();
    </script>

<body style="padding: 0px 0px 0px 0px;">