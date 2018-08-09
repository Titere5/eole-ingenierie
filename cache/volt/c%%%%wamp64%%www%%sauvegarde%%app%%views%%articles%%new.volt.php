
<?= $this->getContent() ?>

<?= $this->tag->form(['articles/create']) ?>
<h1>New Article</h1>

<?php $i = 0; ?>
<div class="form-article">
    <fieldset>
        <?php foreach ($form as $element) { ?>

        <?php if (is_a($element, 'Phalcon\Forms\Element\Hidden')) { ?>

        <?= $element ?>

        <?php } else { ?>

        <div class="form-group form-<?= $i ?>">
            <?= $element->label(['class' => 'col-sm-3 col-md-2']) ?>
            <?= $element->render(['class' => 'controls-new col-sm-9 col-md-10']) ?>
        </div>

        <?php } ?>

        <?php $i += 1; ?>

        <?php } ?>

    </fieldset>

    <ul class="pager">
        <li class="">
            <?= $this->tag->submitButton(['Save Changes', 'class' => 'btn create']) ?>
        </li>
        <li class="">
            <?= $this->tag->linkTo(['articles', 'Cancel', 'class' => 'btn cancel']) ?>
        </li>
    </ul>
</form>
</div>
<?= $this->assets->outputCss() ?>
<?= $this->flashSession->output() ?>
