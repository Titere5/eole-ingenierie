<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?= $this->tag->getTitle() ?>
    <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pierre-Louis">
    <div class="header">
        <?= $this->tag->linkTo(['./', $this->tag->image(['img/DTT-logo.png'])]) ?>
        <hr>
    </div>
</head>
<body>
    <div class="container">
        <?= $this->getContent() ?>
        <hr>
        <p>DTT Multimedia &copy; 2015. All rights reserved. <?= $this->tag->linkTo(['session', 'Site Admin']) ?> <?= $this->tag->linkTo(['register', 'Registration', 'style' => 'float:right']) ?></p>
    </div>
    <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
    <?= $this->tag->javascriptInclude('js/utils.js') ?>
</body>

</html>
