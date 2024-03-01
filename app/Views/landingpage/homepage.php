<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("fonts/Italianno-Regular") ?>">
    <link rel="stylesheet" href="<?php echo base_url("css/style.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("css/font-awesome.css") ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>HENOC TOHOURI | DEV </title>
</head>

<body>

    <!-- Debut NavBar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto animate__animated animate__zoomIn" href="#">T. H. D</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a class="navbar-brand me-auto" href="#">T. H. D</a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto justify-content-center flex-grow-1 pe-3 animate__animated animate__zoomIn">
                        <li class="nav-item">
                            <a class="nav-link active fs-5 mx-lg-2" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 mx-lg-2" href="#">A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 mx-lg-2" href="#">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 mx-lg-2" href="#">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
            <a href="" class="ask-work-price animate__animated animate__zoomIn">Demander Un Dévis</a>
        </div>
    </nav>
    <!-- Fin NavBar -->

    <!-- Debut Section Hero -->
    <section class="hero bg-body-tertiary py-5">
        <div class="container-lg">
            <div class="row align-items-center align-content-center">
                <div class="col-md-6 mt-5 md-mt-0">
                    <div class="home-image text-center">
                        <img src="<?php echo base_url("img/img.png") ?>" class="rounded-circle mw-100 animate__animated animate__zoomIn" alt="profil picture" width="350" height="350">
                    </div>
                </div>
                <div class="col-md-6 order-md-first mt-5 md-mt-0">
                    <div class="hero-texte">
                        <h6>Bienvenue, je suis Henoc Tohouri</h6>
                        <p>Ingénieur logiciel passionné, je m'efforce constamment d'approfondir mes connaissances technologiques et de relever des défis innovants</p>

                        <div class="pt-5">
                            <a href="" class="btn btn-danger fw-bold me-5"><i class="fas fa-download"></i> Mes Réalisations</a>
                            <a href="" class="btn btn-danger fw-bold me-5"><i class="fas fa-download"></i> Me Contacter</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Fin Section Hero -->

    <!-- Debut Section A Popos -->
    <section class="about bg-white py-5">
        <div class="container py-4">
            <div class="justyfi-content-start">
                <div class="col-lg-4">
                    <div class="section-about-title">
                        <h2 class="fw-bold mb-5">A Propos De Moi</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6">
                    <p>Je suis Tohouri Henoc Desire, un ingénieur logiciel junior passionné par la développement d’applications web et mobiles innovantes. </p>
                    <div class="row text-center text-upercase my-3">
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">+4</h4>
                                <p class="fw-bold">Projets Réalisés</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">+1</h4>
                                <p class="fw-bold">Clients Heureux</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <a href="" class="btn btn-danger fw-bold me-5"><i class="fas fa-download"></i> Télécharger CV</a>
                            <div class="social-links">
                                <a href="https://github.com/hdtohouri" target="_blank" class="text-dark fs-1 me-2"><i class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/tohouri-henoc-desire-92b5b0217/" target="_blank" class="text-dark fs-1 me-2"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-5">
                        <h4 class="text-center">COMPETENCES</h4>
                    </div>
                    <div class="mb-5">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Front End</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Back End</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Base De Données</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h6>HTML</h6>
                            <h6>CSS</h6>
                            <h6>BOOTSTRAP</h6>
                            <h6>REACT</h6>
                            <h6>VUE JS</h6>
                            <h6>FLUTTER (Mobile)</h6>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h6>CODEIGNITER</h6>
                            <h6>NODE JS</h6>
                            <h6>EXPRESS</h6>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <h6>MYSQL</h6>
                            <h6>MONGO DB</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Section A Popos -->

    <script src="<?php echo base_url("js/bootstrap.min.js") ?>"></script>
</body>

</html>