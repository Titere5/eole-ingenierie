<?= $this->getContent() ?>

<h1>
    <?= $article->title ?>
</h1>

<p class="content">
    <?= $article->content ?>
</p>

<p class="published">
    Published on <?= $article->date ?>
</p>

<?= $this->tag->linkTo(['./', 'Return to Homepage', 'class' => 'link']) ?>
 <?= $this->assets->outputCss() ?>
