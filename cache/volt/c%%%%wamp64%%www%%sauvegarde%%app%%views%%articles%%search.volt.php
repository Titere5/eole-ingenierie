<?= $this->getContent() ?>
<?= $this->elements->getUser() ?>

<ul class="pager">
    <li class="previous pull-left">
        <?= $this->tag->linkTo(['articles/index', '&larr; Go Back']) ?>
    </li>
    <li class="pull-right">
        <?= $this->tag->linkTo(['articles/new', 'Create articles']) ?>
    </li>
</ul>

<?php $v8937835321iterated = false; ?><?php $v8937835321iterator = $page->items; $v8937835321incr = 0; $v8937835321loop = new stdClass(); $v8937835321loop->self = &$v8937835321loop; $v8937835321loop->length = count($v8937835321iterator); $v8937835321loop->index = 1; $v8937835321loop->index0 = 1; $v8937835321loop->revindex = $v8937835321loop->length; $v8937835321loop->revindex0 = $v8937835321loop->length - 1; ?><?php foreach ($v8937835321iterator as $article) { ?><?php $v8937835321loop->first = ($v8937835321incr == 0); $v8937835321loop->index = $v8937835321incr + 1; $v8937835321loop->index0 = $v8937835321incr; $v8937835321loop->revindex = $v8937835321loop->length - $v8937835321incr; $v8937835321loop->revindex0 = $v8937835321loop->length - ($v8937835321incr + 1); $v8937835321loop->last = ($v8937835321incr == ($v8937835321loop->length - 1)); ?><?php $v8937835321iterated = true; ?>
<?php if ($v8937835321loop->first) { ?>
<table class="table table-bordered table-striped" align="center">
    <thead>
        <tr>
            <th>Publication Date</th>
            <th>Article</th>
        </tr>
    </thead>
    <?php } ?>
    <tbody>
        <tr>
            <td><?= $article->date ?></td>
            <td><?= $article->summary ?><a class="edit-article" href="./edit/<?= $article->id ?>">&nbsp;edit</a>
                <a class="edit-article" href="./delete/<?= $article->id ?>">delete&nbsp;/</a></td>
            </tr>
        </tbody>
        <?php if ($v8937835321loop->last) { ?>
    </table>
    <?= $this->tag->linkTo(['articles/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn']) ?>
    <?= $this->tag->linkTo(['articles/search?page=' . $page->before, 'Previous', 'class' => 'btn']) ?>
    <?= $this->tag->linkTo(['articles/search?page=' . $page->next, 'Next', 'class' => 'btn']) ?>
    <?= $this->tag->linkTo(['articles/search?page=' . $page->last, ' Last', 'class' => 'btn']) ?>
    <span class="help-inline"><?= $page->current ?>/<?= $page->total_pages ?></span>
    <p> <?= $this->length($page->items) ?> articles in total.</p>
    <?php } ?>
    <?php $v8937835321incr++; } if (!$v8937835321iterated) { ?>
    No articles are recorded
    <?php } ?>
    <?= $this->assets->outputCss() ?>
    <?= $this->flashSession->output() ?>
