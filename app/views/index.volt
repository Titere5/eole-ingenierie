<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {{ get_title() }}
    {{ stylesheet_link('//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css') }}
    {{ stylesheet_link('css/bootstrap.min.css') }}
    {{ stylesheet_link('css/style.css') }}

<<<<<<< HEAD
    {{ stylesheet_link('css/flexslider.css') }}
    {{ stylesheet_link('css/animate.css') }}
=======
    {{ stylesheet_link('css/style-perso.css') }}
>>>>>>> 1e572eb5ed5980298a131e69c7da9a677df3a9c8
    {{ javascript_include('js/jquery.min.js') }}
    <link href="css/jquery-filestyle.min.js">
    {# <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/datatables.min.css"/> #}



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pierre-Louis">


</head>
<body>

<<<<<<< HEAD
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
        <h1 id="colorlib-logo">
            <a href="#">Eole ingenierie</a>
        </h1>
        <nav id="colorlib-main-menu" role="navigation">
            {{ elements.getMenu() }}
        </nav>
    </aside>

    <!-- Fin du header -->
        {{ content() }}

    {{ javascript_include('js/main.js') }}
    {{ javascript_include('js/owl.carousel.min.js') }}
=======
    <nav class="navbar  navbar-expand-lg navbar-light top-navbar" data-toggle="sticky-onscroll">
        <a class="navbar-brand" href="#">Eole ingénierie</a>
        {{ elements.getMenu() }}
    </nav>


    <!-- Fin du header -->
    <br>
    {{ content() }}


    {{ javascript_include('js/utils.js') }}

    {{ javascript_include('js/boutique.js') }}
>>>>>>> 1e572eb5ed5980298a131e69c7da9a677df3a9c8

    {{ javascript_include('js/jquery-filestyle.min.js') }}
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




<<<<<<< HEAD
    <!-- Fin du footer -->
=======
<!-- Fin du footer -->
>>>>>>> 1e572eb5ed5980298a131e69c7da9a677df3a9c8
</footer>
</html>
