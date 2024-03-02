<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("fonts/Italianno-Regular") ?>">
    <link rel="stylesheet" href="<?php echo base_url("css/style.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("css/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url("css/animate.min.css") ?>">
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
                            <a class="nav-link fs-5 mx-lg-2" href="#about">A Propos</a>
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
                            <a href="" class="btn btn-danger fw-bold me-5"><i class="fas fa-chalkboard-teacher"></i> Mes Réalisations</a>
                            <a href="" class="btn btn-danger fw-bold me-5"><i class="fas fa-phone-volume"></i> Me Contacter</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Fin Section Hero -->

    <!-- Debut Section A Popos -->
    <section class="about bg-white py-5" id="about">
        <div class="container py-4">
            <div class="justyfi-content-start">
                <div class="col-lg-4">
                    <div class="section-about-title">
                        <h2 class="fw-bold mb-5">A PROPOS DE MOI</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-6">
                    <p>Je suis Tohouri Henoc Desire, un ingénieur logiciel junior passionné par la développement d’applications web et mobiles innovantes. </p>
                    <div class="row justify-content-start text-upercase my-3">
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

    <!-- Debut Section Mes Services -->
    <section class="services bg-body-tertiary py-5">
        <div class="container py-4">
            <div class="justyfi-content-start">
                <div class="col-lg-4">
                    <div class="section-about-title">
                        <h2 class="fw-bold mb-5">MES SERVICES</h2>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded ">
                        <div class="icon my-3 fs-2"><i class="fas fa-text-height"></i></i></div>
                        <h3 class="fs-5 py-2">UI DESIGN </h3>
                        <p class="">Création d'interfaces utilisateur conviviales et répondant aux besoins des utilisateurs</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded">
                        <div class="icon my-3 fs-2"><i class="fas fa-code"></i></div>
                        <h3 class="fs-5 py-2">Développement Web</h3>
                        <p class="">Développement d'applications Web sécurisées sur mesure répondant aux besoins des utilisateurs</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded">
                        <div class="icon my-3 fs-2"><i class="fas fa-mobile-alt"></i></div>
                        <h3 class="fs-5 py-2">Développement Mobile</h3>
                        <p class="">Développement d'applications Mobiles sécurisées sur mesure répondant aux besoins des utilisateurs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Section Mes Services -->
    <section style="background-color: #F0F2F5;">
  <div class="container py-5">
    <div class="main-timeline-2">
      <div class="timeline-2 left-2">
        <div class="card">
          <div class="card-body p-4">
            <h4 class="fw-bold mb-4">Développement de mon portfolio</h4>
            <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> Mars 2024</p>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
      <div class="timeline-2 right-2">
        <div class="card">
          <div class="card-body p-4">
            <h4 class="fw-bold mb-4">Stage PFE Groupe LS - Cote D'Ivoire</h4>
            <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> Mars 2024 - juillet 2024</p>
            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
              doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
              architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
              aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
              sequi nesciunt.</p>
          </div>
        </div>
      </div>
      <div class="timeline-2 left-2">
        <div class="card">
          <div class="card-body p-4">
            <h4 class="fw-bold mb-4">Stage Assistant Ingénieur LAMEDIS - Sénégal</h4>
            <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> Juillet 2023 - Octobre 2023  (3 mois)</p>
            <p class="mb-0">Développement d'une application web pour le suivi et la gestion du stock en Codeigniter, Bootstrap.</p>
          </div>
        </div>
      </div>
      <div class="timeline-2 right-2">
        <div class="card">
          <div class="card-body p-4">
            <h4 class="fw-bold mb-4"> PROJET ETUDIANT FEECRA - Maroc</h4>
            <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i>  Mai 2023</p>
            <p class="mb-0">Développement d'une application web e-Commerce de packaging personnalisé en  Codeigniter, Bootstrap.</p>
          </div>
        </div>
      </div>
      <div class="timeline-2 left-2">
        <div class="card">
          <div class="card-body p-4">
            <h4 class="fw-bold mb-4">Stage Technicien LAMEDIS - Sénégal</h4>
            <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> Juillet 2022 - Septembre 2022  (2 mois)</p>
            <p class="mb-0">Implémentation d’un système d’authentification à double facteur via SMS et du module de récupération de mot de passe via l’Api Twilio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="<?php echo base_url("js/bootstrap.min.js") ?>"></script>
    <script src="<?php echo base_url("js/jquery.min.js") ?>"></script>
</body>

</html>