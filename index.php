<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Curiculum Vitae de Benjamin Perez - Développeur Web spécialisé Front-End" />
        <meta property="og:description"  content="Curiculum Vitae de Benjamin Perez - Développeur Web spécialisé Front-End" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/favicon.ico" />
  <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /><![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <script src="js/app.js"></script>
        <title>Benjamin Perez CV</title>
    </head>
    
    <body data-spy="scroll" data-target=".navbar" data-offset="60">
        
        <nav class="navbar navbar-default navbar-fixed-top justify-content-between">
            <div class="container">
                <div class="navbar-header">
                    <a href="#about" class="navbar-brand" >
                        <img src="images/NewLogo.png">Ben. Perez
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li> <a href="#about">à Propos</a></li>
                        <li> <a href="#skills">Compétences</a></li>
                        <li> <a href="#experience">Experience</a></li>
                        <li> <a href="#education">Formations</a></li>
                        <li> <a href="#portfolio">Portfolio</a></li>
                        <li> <a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <section id="about" class="container-fluid">
            <div class="col-xs-8 col-md-4 profile-picture">
                <img src="images/me.jpg" alt="Ben" class="img-circle">
            </div>
            <div class="heading">
                <h1>Benjamin Perez</h1>
                <h3>Développeur Web Front End</h3>
                <h4><i class="fas fa-map-marker-alt"></i> Strasbourg, France</h4>
                <a href="docs/Benjamin-PEREZ.pdf" class="button1" target="blank">Télécharger CV</a>
            </div>        
        </section>
        
        <section id="skills">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Compétences</h2>
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>HTML<span>95%</span></h5>
                            <div class="progress">
                                <div class="progress-bar html-color" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                </div>
                            </div>
                            <h5>CSS<span>90%</span></h5>
                            <div class="progress">
                                <div class="progress-bar css-color" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    
                                </div>
                            </div>
                            <h5>JAVASCRIPT<span>65%</span></h5>
                            <div class="progress">
                                <div class="progress-bar js-color" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                                </div>
                            </div>
                            <h5>JQUERY<span>75%</span></h5>
                            <div class="progress">
                                <div class="progress-bar jquery-color" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            
                            <h5>BOOTSTRAP<span>80%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bootstrap-color" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    
                                </div>
                            </div>
                            <h5>WORDPRESS<span>70%</span></h5>
                            <div class="progress">
                                <div class="progress-bar wordpress-color" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    
                                </div>
                            </div>
                             <h5>PHP<span>75%</span></h5>
                            <div class="progress">
                                <div class="progress-bar php-color" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                   
                                </div>
                            </div>
                            <h5>MySQL<span>85%</span></h5>
                            <div class="progress">
                                <div class="progress-bar mysql-color" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                    
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
        </section>
        
        <section id="experience">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Experience Professionelle</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <a href="http://benperez.fr/entreprise"><h3>Ben. Perez</h3></a>
                                    <h4>Développeur web Freelance</h4>
                                    <p class="text-muted"><i class="far fa-clock"></i> 2017-2018</p>
                                    
                                </div>
                                <div class="timeline-body">
                                    <p>Création de sites web </p>
                                    <p>Maintenance de sites web </p>
                                    <p>Mise en ligne de sites web</p>
                                    <a href="http://benperez.fr/entreprise">Site web entreprise</a>
                                </div>
                            </div>
                        </div>
                    </li>
                     <li>
                        <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Ferme Horrenberger</h3>
                                    <h4>Maraîcher</h4>
                                    <p class="text-muted"><i class="far fa-clock"></i> 2018 </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Récoltes de légumes Biodynamique</p>
                                    <p>Préparation de commandes</p>
                                  
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>FDMJC du Bas-Rhin</h3>
                                    <h4>Agent polyvalent</h4>
                                    <p class="text-muted"><i class="far fa-clock"></i> 2016-2017</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Restauration cantine scolaire</p>
                                    <p>préparation des repas et entretien</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Leader Interim</h3>
                                    <h4>Intérimaire</h4>
                                    <p class="text-muted"><i class="far fa-clock"></i> 2014-2015 </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Manutention</p>
                                    <p>Déchargement de camion, préparation de commande, évènementiel</p>
                                  
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>La Poste</h3>
                                    <h4>Technicien Informatique</h4>
                                    <p class="text-muted"><i class="far fa-clock"></i> 2013 </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Maintenance utilisateurs et réseaux </p>
                                    <p>Déploiement de nouveau systèmes d'exploitation </p>
                                  
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><i class="fas fa-briefcase"></i></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>L'ENSAD</h3>
                                    <h4>Technicien informatique</h4>
                                    <p class="text-muted"><i class="far fa-clock"></i> 2012</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Déploiement d'application</p>
                                    <p>Maintenance utilisateurs</p>
                                    <p>Création de serveurs</p>
                                   
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
        <section id="education">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Formation</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="education-block">
                            <h5>2010-2013</h5>
                            <i class="fas fa-graduation-cap"></i>
                            <h3>Lycée Jean Mermoz - Montpellier</h3>
                            <h4>BAC PRO SEN</h4>
                            <div class="red-divider"></div>
                            <p>Option Télécommunication et réseaux</p>           <p>Option Audio-visuel</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="education-block">
                            <h5>2018</h5>
                            <i class="fas fa-graduation-cap"></i>
                            <h3>UDEMY.com</h3>
                            <h4>Formation Online</h4>
                            <div class="red-divider"></div>
                            <p>Formation complète développeur web</p>
                            <p>HTML/CSS - JS/JQuery - PHP/MySQL - BOOTSTRAP - WORDPRESS</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="education-block">
                            <h5>2013-2017</h5>
                            <i class="fas fa-graduation-cap"></i>
                            <h3>OpenClassroom</h3>
                            <h4>Formation Online</h4>
                            <div class="red-divider"></div>
                            <p>Certificat HTML/CSS</p>                           <p>Certificat PHP/MySQL</p>                       <p>Certificat méthode MVC</p>

                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="education-block">
                            <h5>2013-2018</h5>
                            <i class="fas fa-graduation-cap"></i>
                            <h3>benperez.fr</h3>
                            <h4>Formation Autodidacte</h4>
                            <div class="red-divider"></div>
                            <p>Formation aux différents langages de programmation web et autres</p>
                            
                        </div>
                    </div>
                </div>
            </div>        
        </section>
        
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="thumbnail" href="#">
                            <img src="images/moncvimg.png" alt="mon cv">                          
                        </a>
                    </div>
                    <div class="col-sm-4">
                         <a class="thumbnail" href="http://dubhub.fr">
                            <img src="images/dubhubimg.png" alt="dub hub">                          
                        </a>
                    </div>
                    <div class="col-sm-4">
                         <a class="thumbnail" href="http://benperez.fr/entreprise">
                            <img src="images/entreprise.png" alt="entreprise">                          
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="thumbnail" href="http://benperez.fr/snake">
                            <img src="images/snake.png" alt="snake">                          
                        </a>
                    </div>
                    <div class="col-sm-4">
                         <a class="thumbnail" href="./actrices">
                            <img src="images/actrices.png" alt="actrices">                          
                        </a>
                    </div>
                    <div class="col-sm-4">
                       <a class="thumbnail" href="./voyage">
                            <img src="images/voyage.png" alt="voyage">                          
                        </a>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-sm-4">
                         <a class="thumbnail" href="./burgers">
                            <img src="images/burger.png" alt="burgers">                          
                        </a>
                    </div>
                    <div class="col-sm-4">
                         <a class="thumbnail" href="./burgers/admin">
                            <img src="images/burger-admin.png" alt="burgers admin">                          
                        </a>
                    </div>
                    
                </div>
            </div>
        
        </section>
        
        <section id="contact">
             <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Contactez-moi</h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <form id="contact-form" method="post" action="" role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="firstname">Prénom <span class="blue">*</span></label>
                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom"  >
                                    <p class="comments"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="name">Nom <span class="blue">*</span></label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom"  >
                                    <p class="comments"></p>
                                </div>  
                                <div class="col-md-6">
                                    <label for="mail">Mail <span class="blue">*</span></label>
                                    <input type="mail" id="mail" name="mail" class="form-control" placeholder="Votre mail"  >
                                    <p class="comments"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Téléphone </label>
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre numéro de téléphone"  >
                                    <p class="comments"></p>
                                </div>   
                                <div class="col-md-12">
                                    <label for="message">Message <span class="blue">*</span></label>
                                    <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4" ></textarea>
                                    <p class="comments"></p>
                                </div>
                                <div class="col-md-12">
                                    <p class="blue"><strong>* Ces informations sont requises</strong></p>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="button1" value="Envoyer">
                                </div>
                            </div>



                        </form>
                    </div> 
                </div>
        </div>           
        
        </section>
        
        
        <footer class="text-center">
            <a href="#about">
                <i class="fas fa-chevron-up"></i>
            </a>
            
            <h5>Ben. Perez - 2018 © Tous droits réservés</h5>
        </footer>
        
    </body>


</html>