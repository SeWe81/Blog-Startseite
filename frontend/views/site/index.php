<?php
$this->title = 'MeinBlog';
?>

<body>
<div class=
     "container">

    <!--Header-->
    <header>


        <div class="row py-2">
            <div class="col-4">
                <a href="#" class="text-muted p-2 text-decoration-none">Abonnieren</a>
            </div>
            <div class="col-4 text-center">
                <a href="#" class="blog-header-title text-dark text-decoration-none">Blog-Startseite</a>
            </div>
            <div class="col-4 text-end">
                <a href="#" class="text-muted p-2 text-decoration-none">Suchen</a>
            </div>
        </div>
    </header>

    <!--Nav-->
    <div class="py-1">
        <nav class="nav d-flex justify-content-center">
            <a href="#" class="text-muted p-2 text-decoration-none">Startseite</a>
            <a href="#" class="text-muted p-2 text-decoration-none">Gesundheit</a>
            <a href="#" class="text-muted p-2 text-decoration-none">Organisation</a>
            <a href="#" class="text-muted p-2 text-decoration-none">Technologie</a>
            <a href="#" class="text-muted p-2 text-decoration-none">Reviews</a>
            <a href="#" class="text-muted p-2 text-decoration-none">Tagträume</a>
            <a href="#" class="text-muted p-2 text-decoration-none">Über mich</a>
        </nav>
    </div>

    <!--Featured Jumbo-->
    <div class="bg-dark text-white p-5 ms-4 me-4 rounded"><h1>Moderne Webentwicklung mit Bootstrap</h1>
        <p class="lead">Beim Webdesign ist es wie beim Kochen:
            Man hat ein Rezept (die Wireframes), ein paar Zutaten (HTML, CSS, JS)
            und am Ende beschwert sich trotzdem jemand: „Das sieht bei mir anders aus!“
            Responsive Design heißt übrigens nur: Dein Layout rennt weg,
            sobald du das Browserfenster kleiner ziehst.</p>
        <p class="lead"><a href="#" class="text-decoration-none">Weiter lesen</a></p></div>
    <!--Featured-->
    <div class="row row-cols-1 row-cols-md-2 g-4 m-2" ">
        <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="text-primary"><strong>Tagträume</strong></p>
                        <h3><a href="#">Kultur im Jahr 2050</a></h3>
                        <p class="text-muted"><?= date("d.m.y"); ?></p>
                        <p>„Im Jahr 2050 trägt jeder Roboter Kulturbeutel –
                            weil auch Maschinen mit Swag ins Museum gehn!“</p>
                        <a href="#" class="text-decoration-none">Weiter lesen</a>
                </div>
            </div>
        </div>
    <div class="col">
            <div class="card h-100">
                <div class="card ">
                    <div class="card-body">
                        <p class="text-primary"><strong>Tagträume</strong></p>
                        <h3><a href="#">Kultur im Jahr 2050</a></h3>
                        <p class="text-muted"><?= date("d.m.y"); ?></p>
                        <p>„Im Jahr 2050 trägt jeder Roboter Kulturbeutel –
                            weil auch Maschinen mit Swag ins Museum gehn!“</p>
                        <a href="#" class="text-decoration-none">Weiter lesen</a>
                    </div>
                </div>
                </div>
        </div>
    </div>
<!-- Content section -->
<main class="container">
    <div class="row py-3">

        <!-- 3 posts -->

        <!-- Pagination -->

        <!-- Sidebar -->

    </div>
</main>
<!-- Footer -->

</body>