<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=esc(APP_NAME)?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <?php $no_nav = array("login");?>
    <?php if(!in_array($_GET['pg'] , $no_nav)):?>
    <?php views_path("partials/nav");?>
    <?php endif; ?>
    <!-- Navbar End-->

        <div class="container-fluid" style="min-width:350px;">