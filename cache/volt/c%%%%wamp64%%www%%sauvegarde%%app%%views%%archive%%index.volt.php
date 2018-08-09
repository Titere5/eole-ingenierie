<?= $this->getContent() ?>
<?php $v11551826491iterated = false; ?><?php foreach ($articles as $article) { ?><?php $v11551826491iterated = true; ?>

<a href="articles/display/<?= $article->id ?>">
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



<?php } if (!$v11551826491iterated) { ?>
    No articles are recorded
<?php } ?>
<p> <?= $this->length($articles) ?> articles in total.</p>

<?= $this->tag->linkTo(['./', 'Return to Homepage', 'class' => 'link']) ?>
 <?= $this->assets->outputCss() ?>
<?= $this->flashSession->output() ?>
