<?= $this->getContent() ?>

<?= $this->elements->getUser() ?>


<h1>All Articles</h1>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>Publication Date</td>
            <td>Article</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($page->items as $article) { ?>
        <tr>
            <td >
                <?= $article->date ?>
            </td>
            <td>
                <?= $article->summary ?>
            <a class="edit-article" href="./edit/<?= $article->id ?>">&nbsp;edit</a>
            <a class="edit-article" href="./delete/<?= $article->id ?>">delete&nbsp;/</a>
            </td>
        </tr>

    <?php } ?>
</tbody>
</table>
<?= $this->tag->linkTo(['articles/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn']) ?>
<?= $this->tag->linkTo(['articles/search?page=' . $page->before, ' Previous', 'class' => 'btn']) ?>
<?= $this->tag->linkTo(['articles/search?page=' . $page->next, ' Next', 'class' => 'btn']) ?>
<?= $this->tag->linkTo(['articles/search?page=' . $page->last, 'Last', 'class' => 'btn']) ?>
<span class="help-inline"><?= $page->current ?>/<?= $page->total_pages ?></span>
<p> <?= $this->length($page->items) ?> articles in total.</p>

<?= $this->tag->linkTo(['articles/new', 'Add a New Article']) ?>
<?= $this->assets->outputCss() ?>
<?= $this->flashSession->output() ?>
