
<?= $this->getContent() ?>

<?php $i = 0; ?>

<?php $v40989253721iterated = false; ?><?php foreach ($articles as $article) { ?><?php $v40989253721iterated = true; ?>

<?php $i += 1; ?>
<?php if ($i >= $this->length($articles) - 4) { ?>
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

<?php continue; ?>
<?php } ?>

<?php } if (!$v40989253721iterated) { ?>
No articles are recorded

<?php } ?>

<?= $this->tag->linkTo(['archive', 'Articles Archive', 'class' => 'link']) ?>
<?= $this->assets->outputCss() ?>
<?= $this->flashSession->output() ?>
