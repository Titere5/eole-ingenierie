
<?= $this->getContent() ?>


<?php $v16426985111iterated = false; ?><?php foreach ($articles as $article) { ?><?php $v16426985111iterated = true; ?>

<a href="./articles/display/<?= $article->id ?>">
    <div id="<?= $article->id ?>" class="article">
        <div class="date col-md-1 col-sm-2">
            <?= $article->date ?>
        </div>
        <div class="title col-md-11 col-sm-10">
            <?= $article->title ?>
        </div>
        <div class="summary">
            <?= $article->summary ?>
        </div>
    </div>
</a>


<?php } if (!$v16426985111iterated) { ?>
No articles are recorded

<?php } ?>

<?= $this->tag->linkTo(['archive', 'Articles Archive', 'class' => 'link']) ?>
<?= $this->assets->outputCss() ?>
<?= $this->flashSession->output() ?>
