<?php

require_once ('config.php');

?>



<!DOCTYPE html>

<html lang="de">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->

    <!--<link rel="stylesheet" href="/includes/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="/includes/css/bootstrap.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Customized Style -->
    <link rel="stylesheet" href="/includes/css/customized.css">

    <title>Mediengutschein</title>

</head>
<?php



    if (session_status() !== PHP_SESSION_ACTIVE) {
       session_start(); # code...
    }

?>

<body style="padding: 0px 0px 0px 0px;">
 
