<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?=$this->siteTitle()?> - <?=$this->pageTitle?></title>
        <link rel="stylesheet" href="<?=PROOT?>assets/font/flaticon.css">
        <link rel="stylesheet" href="<?=PROOT?>assets/styles/dashboard.css">
        <link rel="shortcut icon" type="image/x-icon" href="<?=PROOT?>assets/images/senglogo.png" />
        <script src="<?=PROOT?>assets/js/jquery-3.4.1.min.js"></script>
        <?=$this->content('head'); ?>
    </head>
    <body <?=$this->bodyAttr ?>>
        <?php include('header.php') ?>
        <?php include('sidebar.php') ?>
        <?= $this->content('body'); ?>
        
        <!-- <script src="<?=PROOT?>assets/js/admin.js"></script> -->
        <script src="<?=PROOT?>assets/js/newjs.js"></script>
    </body>
</html>