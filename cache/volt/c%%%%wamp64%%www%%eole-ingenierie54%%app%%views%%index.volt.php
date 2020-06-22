<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?= $this->tag->getTitle() ?>
    <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pierre-Louis">
    <?= $this->elements->getMenu() ?>
</head>
<body>
    <div class="container">
        <?= $this->getContent() ?>

    </div>
    <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('js/bootstrap.min.js') ?>
    <?= $this->tag->javascriptInclude('js/utils.js') ?>
    <?= $this->assets->outputCss() ?>
</body>

</html>
