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

<?php $v21391873531iterated = false; ?><?php $v21391873531iterator = $page->items; $v21391873531incr = 0; $v21391873531loop = new stdClass(); $v21391873531loop->self = &$v21391873531loop; $v21391873531loop->length = count($v21391873531iterator); $v21391873531loop->index = 1; $v21391873531loop->index0 = 1; $v21391873531loop->revindex = $v21391873531loop->length; $v21391873531loop->revindex0 = $v21391873531loop->length - 1; ?><?php foreach ($v21391873531iterator as $article) { ?><?php $v21391873531loop->first = ($v21391873531incr == 0); $v21391873531loop->index = $v21391873531incr + 1; $v21391873531loop->index0 = $v21391873531incr; $v21391873531loop->revindex = $v21391873531loop->length - $v21391873531incr; $v21391873531loop->revindex0 = $v21391873531loop->length - ($v21391873531incr + 1); $v21391873531loop->last = ($v21391873531incr == ($v21391873531loop->length - 1)); ?><?php $v21391873531iterated = true; ?>
<?php if ($v21391873531loop->first) { ?>
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
        <?php if ($v21391873531loop->last) { ?>
    </table>
    <?= $this->tag->linkTo(['articles/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn']) ?>
    <?= $this->tag->linkTo(['articles/search?page=' . $page->before, 'Previous', 'class' => 'btn']) ?>
    <?= $this->tag->linkTo(['articles/search?page=' . $page->next, 'Next', 'class' => 'btn']) ?>
    <?= $this->tag->linkTo(['articles/search?page=' . $page->last, ' Last', 'class' => 'btn']) ?>
    <span class="help-inline"><?= $page->current ?>/<?= $page->total_pages ?></span>
    <p> <?= $this->length($page->items) ?> articles in total.</p>
    <?php } ?>
    <?php $v21391873531incr++; } if (!$v21391873531iterated) { ?>
    No articles are recorded
    <?php } ?>
    <?= $this->assets->outputCss() ?>
    <?= $this->flashSession->output() ?>
