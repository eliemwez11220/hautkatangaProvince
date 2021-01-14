<!DOCTYPE html>
<html lang="en">

<head>
    <!-- languages management -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- title website -->
    <title><?= $title; ?></title>
    <!-- SEO for website references by research robot -->
    <meta name="description"
          content="Haut-Katanga Government from Lubumbashi Town, Haut-Katanga City In Congo, Democratif Reppublic of.
     Adresse de localisation: Avenue Kasavubu, No 14, Lubumbashi, Haut-Katanga, RDC"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="https://www.hautkatanga.cd"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:type" content="website"/>

    <meta property="og:title" content="Life Hotel dans la ville de Lubumbashi, province du Haut-Katanga |
     Passer des instants imaginaires et inoubliables pour vos vacances, vos manifestations et votre ceremonie de mariage par exemple.
     Vous servir est notre devoir. Toute la diversité des opinions"/>
    <meta property="og:description" content="Life Hotel dans la ville de Lubumbashi, province du Haut-Katanga |
     Passer des instants imaginaires et inoubliables pour vos vacances, vos manifestations et votre ceremonie de mariage par exemple.
     Vous servir est notre devoir. "/>

    <meta property="og:url" href="https://www.hautkatanga.cd/actualites/provinciales"/>
    <meta property="og:site_name" content="Life Hotel est situe en République démocratique du Congo, ville de Lubumbasshi, province du Haut-Katanga"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="Life Hotel, un lieu unique pour votre ceremonie de mariage, un endroit idela pour
    votre sejour de vos vacnaces en République démocratique du Congo, ville de Lubumbasshi, province du Haut-Katanga"/>
    <meta name="twitter:title" content="Haut-Katanga en République démocratique du Congo, ville de Lubumbasshi, province du Haut-Katanga |
    Vous servir est notre devoir."/>
    <!-- Icone Image -->
    <link href="<?= base_url('resources/'); ?>front/img/logo/logo.png" rel="icon">
    <!-- Material design
    <title>Material Design Bootstrap</title>
    < Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href=" <?= base_url('resources/'); ?>front/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href=" <?= base_url('resources/'); ?>front/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href=" <?= base_url('resources/'); ?>front/css/style.min.css" rel="stylesheet">
    <link href=" <?= base_url('resources/'); ?>front/font/fa/fa.css" rel="stylesheet">

    <style type="text/css">
        html,
        body,
        .view {
            height: 60%;
        }

        .vue {
            height: 100%;
        }

        @media (max-width: 740px) {

            html,
            body,
            .view {
                height: 1050px;
            }

            .vue {
                height: 1050px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            .view {
                height: 400px;
            }

            .vue {
                height: 500px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background-color: #1C2331 !important;
                color: #050505 !important;
            }
        }

        @media (min-device-height: 200px) and (max-device-height: 250px) {
            .navbar:not(.top-nav-collapse) {
                background-color: #1C2331 !important;
                color: #050505 !important;
            }
        }

        /*
        *autres
         */
        .views {
            height: 100%;
        }

        @media (max-width: 559px) {
            .views {
                height: 1000px;
            }
        }

        @media (min-width: 560px) and (max-width: 740px) {

            .views {
                height: 700px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            .views {
                height: 600px;
            }
        }

        /* Carousel*/
        .carousel,
        .carousel-item,
        .carousel-item.active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }

        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        /* Only for snippet */
        .double-nav .breadcrumb-dn {
            color: #fff;
        }

        .button-collapse i {
            color: #fff
        }
    </style>
</head>

<body>
<header class="fixed-top unique-color bg-transparent">
    <!-- Navbar -->
    <div class="container d-none d-md-block">
        <div class="row">
            <div class="col-md-6 mt-1">
                <a class="pull-left">
                    <img src="<?= base_url('resources/'); ?>front/img/logo/logo_hautkatanga.jpg" alt="Drapeau RDC"
                         class="img-fluid site-logo w-50" style="border-radius: 100px!important;">
                </a>
            </div>
            <div class="col-md-6">
                <a class="pull-right">
                    <img src="<?= base_url('resources/'); ?>front/img/hk/harmoirie_rdc_003.jpg" alt="Embleme RDC"
                         class="img-fluid site-logo w-50 mr-0 pull-right" style="border-radius: 100px!important;">
                </a>
            </div>
        </div>
    </div>
    <!--Main Navigation-->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar unique-color">
        <!-- Home return -->
        <a class="navbar-brand pull-left" href="<?php echo base_url() ?>">
           <span class="font-weight-bold text-uppercase h5">Haut-Katanga</span>
        </a>
        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse font-weight-bold" id="navbarSupportedContent">
            <!-- Left -->
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav mr-auto">
                <!-- Actualités de la province -->
                <li class="nav-item dropdown <?php echo (uri_string() == 'site/actualites') ? "active" : ""; ?>">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('site/actualites'); ?>"
                       id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Actualités
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item <?php echo (uri_string() == 'site/actualites/provinciales') ? "active" : ""; ?>"
                           href="<?= base_url('site/actualites/provinciales'); ?>">Provinciale</a>

                        <a class="dropdown-item <?php echo (uri_string() == 'site/actualites/nationales') ? "active" : ""; ?>"
                           href="<?= base_url('site/actualites/nationales'); ?>">Nationale</a>
                        <a class="dropdown-item <?php echo (uri_string() == 'site/actualites/internationales') ? "active" : ""; ?>"
                           href="<?= base_url('site/actualites/internationales'); ?>">Internationale</a>
                    </div>
                </li><!-- Administration de la province -->
                <li class="nav-item dropdown <?php echo (uri_string() == 'site/administration') ? "active" : ""; ?>">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('site/administration'); ?>"
                       id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Administration
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item <?php echo (uri_string() == 'site/assembleeProvinciale') ? "active" : ""; ?>"
                           href="<?= base_url('site/assembleeProvinciale'); ?>">Assemblée provinciale</a>
                        <a class="dropdown-item <?php echo (uri_string() == 'site/executifProvincial') ? "active" : ""; ?>"
                           href="<?= base_url('site/executifProvincial'); ?>">Exécutif provincial</a>
                        <a class="dropdown-item <?php echo (uri_string() == 'site/historique') ? "active" : ""; ?>"
                           href="<?= base_url('site/historique'); ?>">Historique Ex-Katanga</a>
                    </div>
                </li>
                <li class="nav-item <?php echo (uri_string() == 'site/ministere') ? "active" : ""; ?>">
                    <a href="<?= base_url('site/ministere'); ?>" class="nav-link">Ministère
                    </a>
                </li>
                <!-- Programmes de la province -->
                <li class="nav-item dropdown <?php echo (uri_string() == 'site/administration') ? "active" : ""; ?>">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('site/administration'); ?>"
                       id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Programmes
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item <?php echo (uri_string() == 'site/assembleeProvinciale') ? "active" : ""; ?>"
                           href="<?= base_url('site/assembleeProvinciale'); ?>">Plan d'actions provinciales</a>
                        <a class="dropdown-item <?php echo (uri_string() == 'site/executifProvincial') ? "active" : ""; ?>"
                           href="<?= base_url('site/executifProvincial'); ?>">Avis & Annonces </a>
                        <a class="dropdown-item <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                           href="<?= base_url('site/gouvernoratKatanga'); ?>">Arretes Provinciaux</a>
                        <a class="dropdown-item <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                           href="<?= base_url('site/gouvernoratKatanga'); ?>">Conseils d'administration</a>
                        <a class="dropdown-item <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                           href="<?= base_url('site/gouvernoratKatanga'); ?>">Conseils des ministres</a>
                    </div>
                </li>
                <!-- Villes et territoires de la province -->
                <li class="nav-item dropdown <?php echo (uri_string() == 'site/administration') ? "active" : ""; ?>">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('site/administration'); ?>"
                       id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Provincial
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/assembleeProvinciale') ? "active" : ""; ?>"
                           href="<?= base_url('site/assembleeProvinciale'); ?>">Ville de Lubumbashi</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/executifProvincial') ? "active" : ""; ?>"
                           href="<?= base_url('site/executifProvincial'); ?>">Ville de Likasi</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                           href="<?= base_url('site/gouvernoratKatanga'); ?>">Ville de Kipushi</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                           href="<?= base_url('site/gouvernoratKatanga'); ?>">Territoire de Sakania</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                           href="<?= base_url('site/gouvernoratKatanga'); ?>">Territoire de Kambove</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                           href="<?= base_url('site/gouvernoratKatanga'); ?>">Territoire de Pweto</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                           href="<?= base_url('site/gouvernoratKatanga'); ?>">Territoire de Kasenga</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                           href="<?= base_url('site/gouvernoratKatanga'); ?>">Territoire de Mitwaba </a>
                    </div>
                </li><!-- rubrique de la province -->
                <li class="nav-item dropdown <?php echo (uri_string() == 'site/administration') ? "active" : ""; ?>">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('site/administration'); ?>"
                       id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Rubriques
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/rubriques/politiques') ? "active" : ""; ?>"
                           href="<?= base_url('site/rubriques/politiques'); ?>">Politique</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/rubriques/societes') ? "active" : ""; ?>"
                           href="<?= base_url('site/rubriques/societes'); ?>">Société</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/rubriques/securites') ? "active" : ""; ?>"
                           href="<?= base_url('site/rubriques/securites'); ?>">Sécurité</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/rubriques') ? "active" : ""; ?>"
                           href="<?= base_url('site/rubriques'); ?>">Justice</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/rubriques') ? "active" : ""; ?>"
                           href="<?= base_url('site/rubriques'); ?>">Environnement</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/rubriques') ? "active" : ""; ?>"
                           href="<?= base_url('site/rubriques'); ?>">Sante</a>
                        <a class="dropdown-item pb-1 pt-0 <?php echo (uri_string() == 'site/rubriques') ? "active" : ""; ?>"
                           href="<?= base_url('site/rubriques'); ?>">Femme</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons font-weight-bold">

                <li class="nav-item <?php echo (uri_string() == 'site/ministere') ? "active" : ""; ?>">
                    <a href="<?= base_url('site/ministere'); ?>"
                       class="nav-link border border-danger rounded text-danger"
                       target="_blank">
                        <i class="fas fa-warning mr-2"></i>Alertes
                    </a>
                </li>
                <li class="nav-item <?php echo (uri_string() == 'main/login') ? "active" : ""; ?>">
                    <a href="<?= base_url('main/login'); ?>" class="nav-link rounded border border-light"
                       target="_blank">
                        <i class="fa fa-envelope-square mr-2"></i>Webmail
                    </a>
                </li>
                <li class="nav-item <?php echo (uri_string() == 'main/login') ? "active" : ""; ?>">
                    <a href="<?= base_url('main/login'); ?>" class="nav-link rounded border border-light"
                       target="_blank">
                        <i class="fa fa-sign-in mr-2"></i>Login
                    </a>
                </li>
                <!-- Multi-level dropdown -->
            </ul>
        </div>
    </nav>
</header>
<!-- Navbar -->
<!-- Full Page Intro -->
<div class="mt-lg-5 pt-lg-5 pt-sm-3 mt-sm-3">
    <div class="mt-lg-5 pt-lg-5 pt-sm-2 mt-sm-2">
        <ul class="app-breadcrumb breadcrumb text-capitalize">
            <li class="breadcrumb-item font-weight-bold"><a href="<?= base_url(); ?>">Accueil</a></li>
            <?php
            if($this->uri->segment(3) !=''){?>
            <li class="breadcrumb-item font-weight-bold">
                <a href="<?= base_url().$this->uri->segment(1).'/'.$this->uri->segment(2); ?>"><?= $this->uri->segment(2)?> </a></li>
            <li class="breadcrumb-item disabled" disabled><?= $this->uri->segment(3)?></li>
            <?php } else{?>
                <li class="breadcrumb-item disabled" disabled><?= $this->uri->segment(2)?></li>
            <?php } ?>
        </ul>
    </div>
</div>

<?php
//verifier si l'internaute a cliquer sur le lien ministere
$link_ministere = $this->uri->segment(2);
if ($link_ministere == 'ministere') { ?>
    <div class="card bg-info">

        <div class="card-header text-center white-text">
            <h3 class="font-weight-bold text-uppercase">
                ministères provinciaux
            </h3>
            <b> <i class="fa fa-info-circle"></i> cliquer sur un ministère pour voir les détails</b>
        </div>
        <div class="card-body">

            <div class="row text-uppercase">
                <div class="col-md-6">
                    <!-- Sidebar -->
                    <div class="sidebar-fixed position-sticky text-right">
                        <div class="list-group list-group-flush font-weight-bold">
                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                               href="<?= base_url('site/gouvernoratKatanga'); ?>">Ministère de l'Agriculture, Pêche,
                                Élevage et Développement
                                Rural</a>
                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                               href="<?= base_url('site/gouvernoratKatanga'); ?>">Ministère de l'Environnement,
                                Tourisme, Développement
                                durable</a>

                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                               href="<?= base_url('site/gouvernoratKatanga'); ?>">Ministère de Mines et Émergence de la
                                classe
                                moyenne</a>
                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                               href="<?= base_url('site/gouvernoratKatanga'); ?>">Ministère de Transports et Voies de
                                communication</a>
                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                               href="<?= base_url('site/gouvernoratKatanga'); ?>">Ministère de l'Intérieur et Fonction
                                publique</a>

                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                               href="<?= base_url('site/gouvernoratKatanga'); ?>">Ministère de l'Énergie et
                                Hydrocarbures</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Sidebar -->
                    <div class="sidebar-fixed position-sticky text-left">
                        <div class="list-group list-group-flush font-weight-bold">
                            <a href="<?php echo base_url() ?>pages/dashboards" class="list-group-item waves-effect">Ministère
                                des finances</a>
                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/executifProvincial') ? "active" : ""; ?>"
                               href="<?= base_url('site/executifProvincial'); ?>">Ministère de santé publique</a>
                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/executifProvincial') ? "active" : ""; ?>"
                               href="<?= base_url('site/executifProvincial'); ?>">Ministère de l'éducation, culture et
                                art</a>
                            <a href="<?php echo base_url() ?>users/view_membre" class="list-group-item waves-effect">
                                Ministère de la Jeunesse sports et loisirs</a>
                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/assembleeProvinciale') ? "active" : ""; ?>"
                               href="<?= base_url('site/assembleeProvinciale'); ?>">Ministère de l'éconmie, commerce et
                                industrie</a>

                            <a class="list-group-item waves-effect <?php echo (uri_string() == 'site/gouvernoratKatanga') ? "active" : ""; ?>"
                               href="<?= base_url('site/gouvernoratKatanga'); ?>">Ministère des Infrastructures et
                                Travaux publics</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Sidebar -->