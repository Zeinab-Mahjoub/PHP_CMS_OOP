<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', 'C:' . DS . 'wamp64' . DS . 'www' . DS .'PHP_CMS_OOP');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');

require_once 'admin/includes/functions.php';
require_once 'admin/includes/new_config.php';
require_once 'admin/includes/database.php';
require_once 'admin/includes/db_object.php';
require_once 'admin/includes/user.php';
require_once 'admin/includes/photo.php';
require_once 'admin/includes/session.php';
require_once 'admin/includes/comment.php';
require_once 'admin/includes/paginate.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="../admin/css/styles.css">
</head>

<body>



    <!-- Navigation -->
<?php include("navigation.php"); ?>

    <!-- Page Content -->
    <div class="container">
