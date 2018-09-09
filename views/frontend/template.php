<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="icon" href="public/pictures/favicon.ico" type="image/x-icon" />

        <!--Stylesheet for the font-face and the style for all pages-->
        <link href="public/styles/font.css" rel="stylesheet" type="text/css" />

        <!--Stylesheets for the colors theme-->
        <link href="public/styles/light.css" rel="stylesheet" type="text/css" title="Default light theme" />
        <link href="public/styles/dark.css" rel="alternate stylesheet" type="text/css" title="Dark theme" />

        <!--Stylesheets for the tag position-->
        <link href="public/styles/header.css" rel="stylesheet" type="text/css" />
        <link href="public/styles/footer.css" rel="stylesheet" type="text/css" />
        <link href="public/styles/nav.css" rel="stylesheet" type="text/css" />
        <link href="public/styles/cookie.css" rel="stylesheet" type="text/css" />

        <!--Stylesheets for the current page-->
        <link rel="stylesheet" href="public/styles/<?= $currentCssStyle ?>.css">
    </head>

    <body>
        <?= $content ?>
    </body>
</html>
