<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?=$this->siteTitle()?> - <?=$this->pageTitle?></title>
        <?= $this->content('head'); ?>
    </head>
    <body <?=
     $this->bodyAttr ?>>
        <?= $this->content('body'); ?>
    </body>
</html>