<?php
//session dimulai
session_start();
//abaikan error pada browser
error_reporting(0);
//panggil file koneksi untuk mengkoneksinkan dengan database
include "../assets/relasi/koneksi.php";
//panggil file security untuk mengecek session admin
include "security.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?php echo $iweb['katakunci'];?>">
        <meta name="description" content="<?php echo $iweb['deskripsi'];?>" />
        <meta name="author" content="<?php echo $iweb['pembuat'];?>">
        <title><?php echo $iweb['nama_website'];?></title>
        <link rel="Shortcut Icon" href="<?php echo $hostname;?>/assets/images/logo/<?php echo $iweb['logo'];?>" type="image/x-icon" />
        <!-- Bootstrap core CSS -->
        <link href="<?php echo $hostname;?>/assets/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles template ini-->
        <link href="<?php echo $hostname;?>/assets/css/style_admin.css" rel="stylesheet">

        <!-- Custom Fonts Awesome-->
        <link href="<?php echo $hostname;?>/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="<?php echo $hostname;?>/assets/css/datepicker.min.css" rel="stylesheet">

        <script src="<?php echo $hostname;?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo $hostname;?>/assets/js/bootstrap.js"></script>
        <script src="<?php echo $hostname;?>/assets/js/bootstrap-datepicker.min.js"></script>

</head>

<body>
<div id="wrapper">