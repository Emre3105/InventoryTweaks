<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <!--
        <link rel="stylsheet" href="css/bootstrap.css"> HTML::style('css/bootstrap.css');
        <link rel="stylsheet" href="css/bootstrap.min.css">
        <link rel="stylsheet" href="css/app.css">
        -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>InventoryTweaks</title>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php?page=accueil">InventoryTweaks</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse show" id="navbarColor01" style="">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                </ul>
            </div>
        </nav>
            @yield('titreItem')
        </header>
        
        @yield('contenu')
        
        <div class="footer">
			<div class="container">
				<div class = "row">
					<p>L'ensemble de ce site est © InventoryTweaks 2020-2021</p>
				</div>
			</div>
		</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>