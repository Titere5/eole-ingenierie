<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?= $this->tag->getTitle() ?>
    <?= $this->tag->stylesheetLink('//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css') ?>
    <?= $this->tag->stylesheetLink('css/bootstrap.min.css') ?>
    <?= $this->tag->stylesheetLink('css/style.css') ?>

    <?= $this->tag->stylesheetLink('css/flexslider.css') ?>
    <?= $this->tag->stylesheetLink('css/animate.css') ?>
    <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
    <link href="css/jquery-filestyle.min.js">
    



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pierre-Louis">


</head>
<body>

    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
        <h1 id="colorlib-logo">
            <a href="#">Eole ingenierie</a>
        </h1>
        <nav id="colorlib-main-menu" role="navigation">
            <?= $this->elements->getMenu() ?>
        </nav>
    </aside>

    <!-- Fin du header -->
        <?= $this->getContent() ?>

    <?= $this->tag->javascriptInclude('js/main.js') ?>
    <?= $this->tag->javascriptInclude('js/owl.carousel.min.js') ?>


    <?= $this->tag->javascriptInclude('js/jquery-filestyle.min.js') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <!-- Debut du footer -->

</body>
<footer id="footer">

    <div class="container containerFooter">
        <div class="row">

        </div>
    </div>


</footer>
</html>
