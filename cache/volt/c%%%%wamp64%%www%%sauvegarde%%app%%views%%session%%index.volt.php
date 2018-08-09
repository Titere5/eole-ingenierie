<?= $this->getContent() ?>

<div class="row">
    <div class="col-md-12">
        <?= $this->tag->form(['session/start', 'role' => 'form', 'class' => 'form']) ?>
        <fieldset>
            <span class="error-message"><?= $this->flashSession->output() ?></span>
            <div class="form-group">
                <label class="col-sm-3 col-md-2" for="email">Username</label>
                <div class="controls col-sm-9 col-md-10">
                    <?= $this->tag->textField(['email', 'class' => 'form-control']) ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 col-md-2 " for="password">Password</label>
                <div class="controls col-sm-9 col-md-10">
                    <?= $this->tag->passwordField(['password', 'class' => 'form-control']) ?>
                </div>
            </div>
            <div class="form-group">
                <?= $this->tag->submitButton(['Login', 'class' => 'validation-btn']) ?>
            </div>
        </fieldset>
    </form>
</div>


</div>
<?= $this->assets->outputCss() ?>
<?= $this->flashSession->output() ?>
