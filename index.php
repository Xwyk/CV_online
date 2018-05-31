<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
    <title>Florian LEBOUL, Tech S&R</title>
    <meta name="viewport" content="width=device-width">
    <script src="js/vendor/jquery_3.2.1.min.js"></script>
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <script src="js/fontawesome-all.min.js"></script>
    <link rel="stylesheet" href="css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap_4.0.0-a6.min.css">
    <script src="js/vendor/tether_1.4.0.min.js" ></script>
    <script src="js/vendor/bootstrap_4.0.0-a6.min.js" ></script>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/jquery.easytabs.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/geoloc.js"></script>
</head>
<body class="bg-fixed bg-1">
    <?php include "php/compteur.php";?>
    <div class="main-container" style="border-radius: 10px">
        <div id="visitorscompt" class="compteur">
            <span class="label label-default"><?php $temp=$compte/1000; $temp=(int)$temp;print "$temp"; $compte=($compte-$temp*1000)?></span>
            <span class="label label-default"><?php $temp=$compte/100; $temp=(int)$temp;print "$temp" ; $compte=($compte-$temp*100)?></span>
            <span class="label label-default"><?php $temp=$compte/10; $temp=(int)$temp;print "$temp" ; $compte=($compte-$temp*10)?></span>
            <span class="label label-default"><?php $temp=$compte;print "$temp"?></span>
        </div>
        <div class="main wrapper clearfix">
            <header id="header" style="text-align: center;">
                <div id="logo" style="background-color: lightgrey; border-radius: 50px; display: inline-flex;" >
                    <div style="height: 100px">
                        <img src="images/profilepicture.jpg" alt="profilepicture" style="height: 100px; width: 100px ;border-radius: 50px; min-width: 100px;min-height: 100px; max-height: 100px; max-width: 100px;">
                    </div>
                    <div>
                        <h3 style="text-align: center;">Florian LEBOUL</h3>
                        <h4 style="text-align: center;">Informaticien Systèmes et Réseaux    </h4>
                    </div>
                </div>
            </header>
            <div id="tab-container" class="tab-container">
                <ul class='etabs'>
                    <li class='tab' id="tab-about">
                        <a href="#about">
                            <i class="fas fa-home"></i>
                            <span>   À propos de moi</span>
                        </a>
                    </li>
                    <li class='tab'>
                        <a href="#resume">
                            <i class="far fa-list-alt"></i>
                            <span>   CV</span>
                        </a>
                    </li>
                    <li class='tab'>
                        <a href="#portfolio">
                            <i class="fas fa-project-diagram"></i>
                            <span>   Projets</span>
                        </a>
                    </li>
                    <li class='tab'>
                        <a href="#contact">
                            <i class="fas fa-user"></i>
                            <span>   Contact</span>
                        </a>
                    </li>
                </ul>
                <div id="tab-data-wrap">
                    <div id="about">
                        <section class="clearfix">
                            <div class="g2">
                                <div class="photo">
                                    <img src="images/profilepicture.jpg" alt="profilepicture" style="height: 200px; width: 200px ;border-radius: 100px;">
                                </div>
                                <div class="info">
                                    <h2>Florian LEBOUL</h2>
                                    <h4>Informaticien Systèmes et Réseaux</h4>
                                    <p>
                                        Jeune technicien systèmes et réseaux, je continue de me former sur les différentes technologies employées en entreprise. De la gestion de serveur à la maintenance matérielle, j'étends mes connaissances. Passionné de programmation depuis des années, j'ai pu développer mes projets personnels en parallèle de mon projet professionnel. Il est toujours intéressant de mêler développement et gestion de parc, afin d'automatiser un maximum d'actions, et d'augmenter la rentabilité du temps de travail. Formé par mes études au développement durable, j'ai pu acquérir <cite>l'esprit DD</cite>. Ainsi, je suis sensibilisé au cycle de vie des produits, aux bilans énergétiques et au développement écoresponsable. Possédant une grande attirance pour le libre, mais  n'étant pas fermé uniquement à ce domaine, je trouve toujours enrichissant de le lier au propriétaire afin d'augmenter le potentiel d'un service ou d'une entreprise. Doté d'un bon sens de  la communication, inventif, motivé, et volontaire, je suis apte à m'adapter à toute tâche. Toujours de bonne humeur, ma devise est qu'<cite> "Il est important d'être sérieux, mais sans se prendre au sérieux"</cite>.
                                    </p>
                                </div>
                            </div>
                            <div class="g1">
                                <div class="main-links sidebar">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i>  Pont-Saint-Martin, 44860<br>      Région Nantaise</li>
                                        <li><i class="fas fa-car"></i>  Permis B / Véhicule personnel</li>
                                        <li><i class="fas fa-certificate"></i>  BAC +2 : DUT Informatique</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="break"></div>
                            <div class="contact-info">
                                <div class="g1">
                                    <div class="item-box clearfix">
                                        <div class="item-data">
                                            <h3><i class="far fa-envelope fa-2x"></i><a href="mailto:fleboul.pro@florian-leboul.ovh">  fleboul.pro@florian-leboul.ovh</a></h3>
                                            <p>Adresse mail</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="item-box clearfix">
                                        <div class="item-data">
                                            <h3><i class="fab fa-linkedin-in fa-2x"></i><a href="https://www.linkedin.com/in/florian-leboul-697abb107/">  Florian LEBOUL</a></h3>
                                            <p>LinkedIn</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="g1">
                                    <div class="item-box clearfix">
                                        <div class="item-data">
                                            <h3><i class="fas fa-phone fa-2x"></i><a href="tel:+33605410616">  06 05 41 06 16</a></h3>
                                            <p>Téléphone</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="resume">
                        <section class="clearfix">
                            <div class="g2">
                                <h3>Expériences</h3>
                                <ul class="no-list work">
                                    <li>
                                        <h5>
                                            Technicien Systèmes<br class="rwd-break"> et Réseaux<br><i class="fas fa-home"></i> : 4CAD Group, Nantes
                                        </h5>
                                        <span class="label label-danger">2018-Maintenant</span>
                                        <p>
                                            Technicien systèmes et réseaux assistant l'administrateur dans ses tâches, j'ai en charge la maintenance du parc informatique ; incidents utilisateurs, déploiement, serveurs. Ma mission principale est la gestion physique et logicielle du réseau, afin d'assurer une disponibilité continue aux utilisateurs, sous environnement Windows ou Linux.
                                        </p>
                                    </li>
                                    <li>
                                        <h5>
                                            AED TICE<br><i class="fas fa-home"></i> : Lycée Jean-Perrin, Rezé
                                        </h5>
                                        <span class="label label-warning">2017-2018</span>
                                        <p>
                                            Technicien systèmes et réseaux, j'ai été formé à la surveillance, l'entretien et au déploiement d'un parc informatique d'environ 1000   postes. J'ai pu apprendre la gestion de serveurs Windows/Linux, de matériel réseau Cisco, de machines, d'incidents, ou encore le  déploiement. J'ai été formé sur tous les fondamentaux de la gestion d'un réseau, de sa création à son recyclage.
                                        </p>
                                    </li>
                                    <li>
                                        <h5>
                                            Technicien Support IT<br><i class="fas fa-home"></i> : Proservia, Nantes
                                        </h5>
                                        <span class="label label-primary">Septembre 2017</span>
                                        <p>
                                            Mission de deux semaines avec pour objectif principal l'installation physique des postes suite à des déménagements de bureaux (mise en place, ergonomie, cable management). Préparation au déploiement des machines. 
                                        </p>
                                    </li>
                                    <li>
                                        <h5>
                                            Technicien GED<br><i class="fas fa-home"></i> : CAF Loire-Atlantique, Nantes
                                        </h5>
                                        <span class="label label-info">Août 2015</span>
                                        <p>
                                            Gestion éléctronique des documents en tant que saisonnier. Ce travail consistait à assurer le relai entre les allocataires qui envoient     leurs documents, et les technicien(e)s qui travaillent sur leur version numérique. Ce travail m'a apporté de fortes compétences en  méthodologie/organisation.
                                        </p>
                                    </li>
                                </ul>
                                <h3>
                                    Scolarité
                                </h3>
                                <ul class="no-list work">
                                    <li>
                                        <h5>
                                            DUT Informatique<br><i class="fas fa-home"></i> : IUT de Vannes, Vannes
                                        </h5>
                                        <span class="label label-default">2015-2017</span>
                                        <p>
                                            DUT dans les branches développement informatique, sécurité et réseaux. J'ai pu apprendre à organiser le travail seul ou en équipe (AGILE), afin d'optimiser le temps au maximum et de pouvoir aboutir des projets personnels ou communs. J'ai approfondi mes connaissances en développement web, fixe (C++/Java) et embarqué (C). J'ai également reçu les fondamentaux de la gestion réseau/utilisateurs/sécurité.
                                        </p>
                                    </li>
                                    <li>
                                        <h5>
                                            BAC STI2D SIN<br><i class="fas fa-home"></i> : Lycée Jean-Perrin, Rezé
                                        </h5>
                                        <span class="label label-success">2012-2015</span>
                                        <p>
                                            BAC technologique à vocation informatique / éléctronique obtenu mention Très Bien. J'ai pu appredre les fondamentaux de l'électronique et du developpement embarqué m'ayant permis d'évoluer dans mes passions, ainsi que les bases du fonctionnement d'un réseau, ayant orienté  mon choix de parcours professionnel.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="g1">
                                <div class="sidebar">
                                    <h3>Compétences</h3>
                                    <h5>Réseau</h5>
                                    <div class="meter emerald">
                                        <span style="width: 60%"><span>Matériels Cisco</span></span>
                                    </div>
                                    <div class="meter carrot">
                                        <span style="width: 75%"><span>Contrôleurs de domaine Windows/linux</span></span>
                                    </div>
                                    <div class="meter sunflower">
                                        <span style="width: 40%"><span>BDD Oracle MySQL/MariaDB</span></span>
                                    </div>
                                    <div class="meter pomengrate">
                                       <span style="width: 60%"><span>GPO</span></span>
                                    </div>
                                    <div class="break"></div>
                                    <h5>Serveurs</h5>
                                    <div class="meter midnight">
                                        <span style="width: 75%"><span>Serveurs Windows</span></span>
                                    </div>
                                    <div class="meter wisteria">
                                        <span style="width: 80%"><span>Serveurs Linux</span></span>
                                    </div>
                                    <div class="meter sunflower">
                                        <span style="width: 70%"><span>MySQL server</span></span>
                                    </div>
                                    <div class="meter asbestos">
                                        <span style="width: 70%"><span>VMWare ESX/WorkStation</span></span>
                                    </div>
                                    <div class="meter emerald">
                                        <span style="width: 55%"><span>Apache</span></span>
                                    </div>
                                    <div class="meter carrot">
                                        <span style="width: 45%"><span>Exchange/Azure</span></span>
                                    </div>
                                    <div class="meter pomengrate">
                                        <span style="width: 55%"><span>Veeam</span></span>
                                    </div>
                                    <div class="break"></div>
                                    <h5>Système</h5>
                                    <div class="meter emerald">
                                        <span style="width: 90%"><span>Gestion de parc</span></span>
                                    </div>
                                    <div class="meter carrot">
                                        <span style="width: 90%"><span>Maintenance logicielle/matérielle</span></span>
                                    </div>
                                    <div class="meter wisteria">
                                        <span style="width: 70%"><span>Outils bureautique</span></span>
                                    </div>
                                    <div class="break"></div>
                                    <h5>Languages de programmation</h5>
                                    <div class="meter asbestos">
                                        <span style="width: 90%"><span>C embarqué</span></span>
                                    </div>
                                    <div class="meter carrot">
                                        <span style="width: 60%"><span>C/C++</span></span>
                                    </div>
                                    <div class="meter wisteria">
                                        <span style="width: 70%"><span>Java</span></span>
                                    </div>
                                    <div class="meter emerald">
                                        <span style="width: 60%"><span>HTML/CSS/JavaScript/JQuery</span></span>
                                    </div>
                                    <div class="meter sunflower">
                                        <span style="width: 80%"><span>Batch/Bash</span></span>
                                    </div>
                                    <h5>Technologies maitrisées en embarqué</h5>
                                    <p>NFC<br>WiFi<br>Ethernet<br>Protocoles série<br>Radiofréquences<br>Infrarouges<br>GPS<br>GSM</p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div id="portfolio">
                        <section class="clearfix">
                            <div class="g1">
                                <div class="image" >
                                    <div class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid g1 img-projets" src="images/florimetre_1.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid g1 img-projets" src="images/florimetre_2.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid g1 img-projets" src="images/florimetre_3.jpg" alt="Third slide">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-overlay img-projets">
                                        <div class="image-link">
                                            <button id="btnfluo" type="button" class="btn btn-primary" onclick="showHideProjects('fluo');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Florimètre</h5>
                                <div id="showfluo" >
                                    <p>
                                        Réalisation d'une interface graphique, finalement orientée web pour obtenir une plus grande compatibilité, pour un appareil de mesure de laboratoire d'une trentaine d'années, dont l'interface initiale était codée en BASIC. Cet appareil est un spectrofluorimètre, et sert à identifier des molécules placées dans des solutions en étudiant leur fluorescence. Plus grossièrement, on observe le spectre lumineux émis par la solution lorsqu'elle est exposée à la lumière. Création d'une interface graphique HTML/CSS/JavaScript, et changement total de la technique de communication appareil-PC à l'origine en RS485, par un serveur web hébergé sur une carte arduino. Stage de fin de DUT. <a href="docs/LEBOUL_Florian.pdf">Voir le rapport en PDF</a>
                                    </p>
                                </div>
                            </div>
                            <div class="g1">
                                <div class="image" >
                                    <img src="images/affmoto.jpg" alt="afficheur moto" style="border-radius: 10px"/>
                                    <div class="image-overlay" style="border-radius: 10px">
                                        <div class="image-link">
                                            <button id="btnaffmoto" type="button" class="btn btn-primary" onclick="showHideProjects('affmoto');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Afficheur de rapport engagé</h5>
                                <div id="showaffmoto" >
                                    <p>
                                    Projet personnel réalisé sur la problématique suivante : Comment savoir quel rapport est engagé sur une moto. Réalisation purement   éléctronique utilisant un afficheur 7 segments pour indiquer le rapport.
                                    </p>
                                </div>  
                            </div>    
                            <div class="g1">
                                <div class="image">
                                    <div class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid g1 img-projets" src="images/skate_1.jpg" alt="skate_1">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid g1 img-projets" src="images/skate_2.jpg" alt="skate_2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-overlay img-projets img-projets" >
                                        <div class="image-link">
                                            <button id="btnskate" type="button" class="btn btn-primary" onclick="showHideProjects('skate');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Longboard DIY</h5>
                                <div id="showskate" >
                                    <p>
                                        Réalisation d'une presse et d'un longboard en contreplaqué. Longueur totale : 110cm. Planche composée de 3 couches de contreplaqué 6mm, et   t'une couche de    fibre de verre en dessous afin de rigidifer le tout.
                                    </p>
                                </div>
                            </div>      
                            <div class="g1">
                                <div class="image">
                                    <img src="images/alarme.jpg" alt="alarme" style="border-radius: 10px"/>
                                    <div class="image-overlay" style="border-radius: 10px">
                                        <div class="image-link">
                                            <button id="btnalarme" type="button" class="btn btn-primary" onclick="showHideProjects('alarme');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Alarme connectée pour voiture</h5>
                                <div id="showalarme" >
                                    <p>
                                    Projet personnel en cours. Réalisation d'un alarme pour voiture avec fonction GPS (pour suivre la voiture) et GSM (pour alerter le   propriétaire et recevoir les   coordonnées sur son téléphone). Déverrouillage par combinaison d'interrupteurs et carte NFC.
                                    </p>
                                </div>
                            </div>    
                            <div class="g1">
                                <div class="image">
                                    <div class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid g1 img-projets" src="images/clavier_1.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid g1 img-projets" src="images/clavier_2.jpg" alt="Second slide">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-overlay " style="border-radius: 10px;">
                                        <div class="image-link" >
                                            <button id="btnclavier" type="button" class="btn btn-primary" onclick="showHideProjects('clavier');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Clavier Sons&Lumières</h5>
                                <div id="showclavier" >
                                    <p>
                                        Réalisation, dans le cadre scolaire, d'un clavier capable de lancer des animation sonores et visuelles. Récupération des informations envoées    par un ancien  clavier PS/2 avec un microcontrôleur Arduino. Ce dernier lance alors, en fonction, soit une animation sonore directement modulée en  PWM, passant par un ampi/   filtre passe bande avant d'arriver sur un haut-parleur, soit un code en bluetooth, interprété par un PC, qui lui lance  une animation visuelle codée en Java.
                                    </p>
                                </div>
                            </div>  
                            <div class="g1">
                                <div class="image">
                                    <img src="images/meteo.jpg" alt="meteo" style="border-radius: 10px"/>
                                    <div class="image-overlay" style="border-radius: 10px;">
                                        <div class="image-link">
                                            <button id="btnmeteo" type="button" class="btn btn-primary" onclick="showHideProjects('meteo');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>La météo des Infos</h5>
                                <div id="showmeteo" >   
                                    <p>
                                        Projet de site météo réalisé dans le cadre scolaire. Utilisation de HTML, CSS, JavaScript, JQuery, et de l'API OpenWeatherMap afin de    récupérer les  informations météorologiques d'une ville choisie. <a href="html/meteo/index.html">Voir le site</a>
                                    </p>
                                </div>
                            </div>
                            <div class="g1">
                                <div class="image">
                                    <img src="images/404.jpg" alt="btaudio" style="border-radius: 10px"/>
                                    <div class="image-overlay" style="border-radius: 10px;">
                                        <div class="image-link">
                                            <button id="btnbtaudio" type="button" class="btn btn-primary" onclick="showHideProjects('btaudio');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Module audio Bluetooth</h5>
                                <div id="showbtaudio" >
                                    <p>
                                        Projet personnel réalisé sur la thématique de rendre n'importe quel casque audio bluetooth. Conçu sur la base d'un module audio KRC-86B fonctionnant en 4.0 low     energy, couplé à deux batteries pour une capacité totale de 12Ah. développement d'une fonctionnalité NFC facilitant la connection au module. Autonomie constatée    en utilisation "soirée" (8h/semaine) + "trajets" (5-7h/semaine) : 9 mois.
                                    </p>
                                </div>
                            </div>
                            <div class="g1">
                                <div class="image">
                                    <div class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid g1 img-projets" src="images/404.jpg" alt="3d printer_1">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid g1 img-projets" src="images/3dprinter2.jpg" alt="3d printer 2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-overlay" style="border-radius: 10px;">
                                        <div class="image-link">
                                            <button id="btn3dprinter" type="button" class="btn btn-primary" onclick="showHideProjects('3dprinter');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Imprimante 3D RepRap</h5>
                                <div id="show3dprinter" >
                                    <p>
                                        Projet personnel en cours. Etude et réalisation d'une imprimante 3D reprap, basée sur une Prusa i3, avec un volume d'impression d'environ 20x20x20. Le contrôleur   est un arduino Mega sous Marlin. L'imprimante peut fonctionner pilotée par un PC ou en mode autonome, avec une carte SD.
                                    </p>
                                </div>
                            </div>  
                            <div class="g1">
                                <div class="image">
                                    <img src="images/calc.jpg" alt="graph 35+" style="border-radius: 10px"/>
                                    <div class="image-overlay" style="border-radius: 10px;">
                                        <div class="image-link">
                                            <button id="btncalc" type="button" class="btn btn-primary" onclick="showHideProjects('calc');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Calculatrice Graph 35+</h5>
                                <div id="showcalc" >
                                    <p>
                                        Projet personnel. Remplacement du firmware d'origine de la graph 35+ par celui de la graph 75+. Ce dernier donne accès à une rom bridée sur la 35, et permet de     développer et d'intégrer des applications codées en C directement sous le menu principal.
                                    </p>
                                </div>
                            </div>    
                            <div class="g1">
                                <div class="image">
                                    <img src="images/404.jpg" alt="RPI minitel" style="border-radius: 10px"/>
                                    <div class="image-overlay" style="border-radius: 10px;">
                                        <div class="image-link">
                                            <button id="btnrpi" type="button" class="btn btn-primary" onclick="showHideProjects('rpi');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Minitel Raspberry</h5>
                                <div id="showrpi" >
                                    <p>
                                        Projet personnel en cours. Réutilisation d'un minitel avec intégration d'un raspberry pi zéro, et réalisation d'une carte permettant de convertir la sortie vidéo   du raspberry. Intégration de bibliothèques permettant de connecter le clavier.
                                    </p>
                                </div>
                            </div>   
                            <div class="g1">
                                <div class="image">
                                    <img src="images/404.jpg" alt="domotique" style="border-radius: 10px"/>
                                    <div class="image-overlay" style="border-radius: 10px;">
                                        <div class="image-link">
                                            <button id="btndomotique" type="button" class="btn btn-primary" onclick="showHideProjects('domotique');">Voir plus</button>
                                        </div>
                                    </div>
                                </div>
                                <h5>Domotique Arduino</h5>
                                <div id="showdomotique" >
                                    <p>
                                        Projet personnel en cours. Réalisation d'une centrale domotique basée sur un microcontrôleur Arduino. La centrale communique en 433MHz, Wi-Fi, Bluetooth, 2.4GHz    et GSM. Elle est contrôlable via Wi-Fi ou GSM, puis redistribue la commande au module souhaité. Aucune utilisation de cloud n'est nécéssaire, toutes les données   sont locales.
                                    </p>
                                </div>  
                            </div>
                        </section>
                    </div>
                    <div id="contact" style="text-align: center">
                        <section class="clearfix">
                            <div class="g1">
                                <h3>Adresse mail</h3>
                                <h6><i class="far fa-envelope fa-1x"></i><a href="mailto:fleboul.pro@florian-leboul.ovh">   fleboul.pro@florian-leboul.ovh</a></h6>
                            </div>
                            <div class="g1">
                                <h3>Téléphone</h3>
                                <h6><i class="fas fa-phone fa-1x"></i><a href="tel:+33605410616">   06 05 41 06 16</a></h6>
                            </div>
                            <div class="g1">
                                <h3>LinkedIn</h3>
                                <h6><i class="fab fa-linkedin-in fa-1x"></i><a href="https://www.linkedin.com/in/florian-leboul-697abb107/">   Florian LEBOUL</a></h6>
                            </div>
                            <div class="break"></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
