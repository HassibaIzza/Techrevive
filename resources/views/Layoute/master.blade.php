<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--- bootstrap script-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--font awsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    
    <!---font google--------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    
    
    <title>@yield('title' , 'UnknownPage' )</title>
    <style>
    .carousel-caption {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    padding: 1rem;
    background-color: transparent; /* Ajoute un fond semi-transparent pour une meilleure lisibilité */
    font-family: "Salsa", cursive;
    font-size: 6em; /* Ajuste la taille de la police à 1.5em pour agrandir le texte */
    text-align: left;
    white-space: nowrap; /* Empêche le texte de se casser sur plusieurs lignes */
    overflow: hidden; /* Cache le texte qui dépasse de la zone */
    
}

@media (min-width: 768px) {
    .carousel-caption {
        right: initial;
        padding-left: 2rem; /* Ajoute un espace à droite pour une meilleure lisibilité */
        font-size: 3em; /* Ajuste la taille de la police à 2em pour agrandir le texte sur les écrans plus larges */
    }
}
@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 100%;
    }
}

.carousel-caption p {
    overflow: hidden;
    white-space: nowrap;
    animation: typing 5s steps(50, end); /* Utilise l'animation 'typing' pendant 5 secondes */
}


    </style>
</head>
<body>
    
    <!----top navbar------------>
    
   

    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" id="logo" style="font-family: 'Merriweather', serif"><span id="span1">T</span>Ech<span>Revive</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Revendre</a>
              </li>
              <li class="nav-item dropdown " data-bs-toggle="dropdown" aria-haspopup="true">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                  Réparation
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" style="background-color:#F7F7F7;">
                  <li><a class="dropdown-item" href="#">Réparer</a></li>
                  <li><a class="dropdown-item" href="#">Contacter Réparateur</a></li>
                  <li><a class="dropdown-item" href="#">Contacter SAV</a></li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">À propose</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <form class="d-flex align-items-center" id="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
             
            </ul>
            <li class="nav-item justify-content-end ">
              <a class="nav-link" href="#"><i class="far fa-user"></i>
              </a>
            </li>
             
          </div>
          
        </div>
      </nav>

      <!--------------------home section------------------------->
      <!-- Carousel -->
      <section class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pictures/pexels-quang - Copie.jpg" class="d-block w-100 custom-carousel-image" alt="...">
                
            </div>
            <div class="carousel-item">
                <img src="pictures/pexels-garrett.jpg" class="d-block w-100 custom-carousel-image" alt="...">
            </div>
            <div class="carousel-item">
                <img src="pictures/pexels-anete-lusina.jpg" class="d-block w-100 custom-carousel-image" alt="...">
            </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              
              <p>Réparer, Acheter </br> En Ligne 
                 Vos Appariels électroniques </br>
              </p>
            </div>
           
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </section>


@yield('content')


<!----------------footer-------->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <p class="" href="index.html" id="logo" style="font-family: 'Merriweather', serif"><span id="span1">T</span>Ech<span>Revive</span></p></br>

         
          <strong><i class="fas fa-phone"></i></strong> +213783195323<br>
          <strong><i class="fas fa-envelope"></i></strong> Techrevive@gmail.com <br>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Liens Fréquents</h4>
         <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">À propose</a></li>
          <li><a href="#">Réparation</a></li>
          <li><a href="#">Acheter</a></li>
         
         </ul>
        </div>



       

        <div class="col-lg-3 col-md-6 footer-links" style="font-size: 1.5em">
          <h4>Nos partenaires</h4>

         <ul>
          <li><a href="#">Enie</a></li>
          <li><a href="#">Iris</a></li>
          <li><a href="#">condor</a></li>
          <li><a href="#">Stream</a></li>
          
         </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Réseaux Sociaux</h4>
          <p>Nous Somme disponible dans les Réseaux:</p>

          <div class="socail-links mt-3">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
        
        </div>

      </div>
    </div>
  </div>
  <hr>
  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>TechRevive</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="#">Our Group</a>
    </div>
  </div>
</footer>
<!----------------footer-------->


    
<!-- Charge React -->
<!-- Remarque : pour le déploiement, remplacez "development.js"par "production.min.js" -->
<script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>  
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
<!-- Charge notre composant React -->
<script src="js/like_button.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>