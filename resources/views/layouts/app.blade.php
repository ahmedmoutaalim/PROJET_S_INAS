<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>INAS</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bb.css')}}">
  
   
 
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="css/mdb.min.css">
 
    
</head>
<body>
<div style="display: flex; width: 100%;height: 120px; justify-content: space-between ;font-family: 'Work Sans', sans-serif; border-bottom:1.1px solid rgb(245,245,245); " >
<img src="images/logo.png" style=" width:130px;cursor:pointer; height:110px ; margin-left:18px;">
<button class="b">PRÉINSCRIPTON EN LIGNE </button>
</div>

<div class="menu">
<ul>
<li class="menu_list"> <a href="home" class="menu_list-accueil">ACCUEIL</a> </li>
<li class="menu_list"> <a href="#" class="menu_list-parentlist">PRESENTATION DE L’INAS</a>
    <div class="menu_list-childlist">
     <ul>
      <li> <a href="pres_inas">PRESENTATION DE L’INAS</a> </li>
      <li> <a href="mot_dir">MOT DE DIRECTRICE</a> </li>
      <li> <a href="miss_inas">MISSION</a> </li>
      <li> <a href="historique">HISTORIQUE</a> </li>
      <li> <a href="les-instances-de-gouvernance">Instance de gouvernance</a></li>
      <li> <a href="filiere">Filières</a></li>
      <li> <a href="les-departement">Deprtements</a> </li>
      <li> <a href="inas-en-chiffres">INAS EN CHIFFRES</a></li>
     </ul>
    
    </div>
 </li>

<li class="menu_list"> <a href="#" class="menu_list-parentlist">FORMATION</a>

<div class="menu_list-childlist">
<ul>
<li>  <a href="formation_initiale">FORMATION INITIALE</a> </li>
<li>  <a href="formation_continue">FORMATION CONTINUE</a> </li>
<li> <a href="admission">ADMISSION INSCRIPTION</a> </li>
</ul>
</div>

 </li>
<li class="menu_list"> <a href="#" class="menu_list-parentlist"">ACTUALITES</a>
<div class="menu_list-childlist" >
<ul>
<li><a href="#">AGENDA</a> </li>
<li> <a href="#">EVENEMENTS</a> </li>
<li><a href="#">ACTIVITES</a></li>
<li><a href="#">AVIS</a></li>
<li><a href="#">NEWS</a></li>
<li><a href="#">ESPACE PRESSE</a></li>
</ul>
</div>
</li>
<li class="menu_list"> <a href="#" class="menu_list-parentlist">ETUDES ET RECHERCHE</a> 
<div class="menu_list-childlist" >
<ul>
<li><a href="#">PRESENTATION</a> </li>
<li> <a href="#">COLLOQUES</a> </li>
<li><a href="#">ETUDES & PUBLICATIONS</a></li>
<li><a href="#">Stratégie et développement</a></li>
<li><a href="#">Laboratoires de recherche</a></li>
<li><a href="#">Évènements scientifiques</a></li>
<li><a href="#">Centre d’Études doctorale</a></li>
<li><a href="#">Revue scientifique</a></li>
</ul>
</div>
</li>

<li class="menu_list"> <a href="#" class="menu_list-parentlist">COOPERATION ET PARTENARIAT</a> 
<div class="menu_list-childlist" >
<ul>
<li><a href="#">PARTENARIAT ACADEMIQUE</a> </li>
<li> <a href="#">PARTENARIAT PROFESSIONNEL</a> </li>
<li><a href="#">Mobilité</a></li>
</ul>
</div>
</li>

<li class="menu_list"> <a href="#" class="menu_list-parentlist"> DOCUMENTATION</a>
<div class="menu_list-childlist" >
<ul>
<li><a href="#">BIBLIOTHEQUE NUMERIQUE</a> </li>
<li> <a href="#">MEDIATHEQUE</a> </li>
<li><a href="#">ANNUAIRE</a></li>
</ul>
</div>

</li>

<li class="menu_list"> <a href="#" class="menu_list-parentlist">ESPACE ENSEIGNANT</a> 
<div class="menu_list-childlist" >
<ul>
<li><a href="#">Accès Elearning</a> </li>
</ul>
</div>
</li>
<li class="menu_list"> <a href="#" class="menu_list-parentlist">ESPACE ETUDIANT</a>
<div class="menu_list-childlist menu_list-exeption" >
<ul>
<li><a href="#">AVIS AUX ETUDIANTS</a> </li>
<li><a href="#">STAGES & PROJETS</a> </li>
<li><a href="#">Accès Elearning</a> </li>
<li><a href="#">ACTIVITES</a> </li>
<li><a href="#">REGLEMENT INTERIEUR</a> </li>
</ul>
</div>
</li>
</ul>
</div>


    @yield('accueil')
    @yield('présontation')

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 mode">

  <!-- Footer Links -->
  <div class=" text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">PRESENTATION DE L’INAS</h5>

        <ul class="list-unstyled ">
        <li>
            <a class="footer_links-hover" href="#!">PRESENTATION DE L’INAS</a>
          </li>
          <li>
            <a  class="footer_links-hover" href="#!">FORMATION</a>
          </li>
          <li>
            <a  class="footer_links-hover" href="#!">ETUDES ET RECHERCHE</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">DOCUMENTATION</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">FORMATION </h5>

        <ul class="list-unstyled">
          <li>
            <a class="footer_links-hover"   href="#!">FORMATION CONTINUE</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">AGENDA</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">EVENEMENTS</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">ACTIVITES</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">AVIS</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">NEWS</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">ESPACE PRESSE</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">



        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Etude et recherche</h5>

        <ul class="list-unstyled">
          <li>
            <a class="footer_links-hover" href="#!">PRESENTATION</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">COLLOQUES</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">ETUDES & PUBLICATIONS</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">Stratégie et développement</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">Laboratoires de recherche</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">Évènements scientifiques</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">Centre d’Études doctorale</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">Revue scientifique</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">BIBLIOTHEQUE NUMERIQUE</a>
          </li>
          <li>
            <a class="footer_links-hover" href="#!">MEDIATHEQUE</a>
          </li>
        
          <li>
            <a class="footer_links-hover" href="#!">ANNUAIRE</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Institut National de l'Action Sociale 
        (INAS) | Ministère de la solidarité de la femme 
        de la famille et du développement social au Maroc
    <a href="https:// inastanger.com/"> inastanger.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<!--     
 <div class="footer">
    <div class="footer_links">
       <a class="footer_links-hover"  href="#">PRESENTATION DE L’INAS</a>
       <a class="footer_links-hover" href="#">FORMATION</a>
       <a class="footer_links-hover" href="#">ETUDES ET RECHERCHE</a>
       <a class="footer_links-hover" href="#">DOCUMENTATION</a>

    </div>  
    <div  class="footer_linkssecond" >
    <a class="footer_links-hover" href="#">ACTUALITES</a>
       <a class="footer_links-hover" href="#">COOPERATION ET PARTENARIAT</a>
       <a class="footer_links-hover" href="#">Liens Utiles</a>
       <hr>
    </div>   
    
    <div class="footer_fond">
    

      <p class="endFooter">© 2020 Institut National de l'Action Sociale 
        (INAS) | Ministère de la solidarité de la femme 
        de la famille et du développement social au Maroc</p>

    </div>
 </div>    -->


     
     <script src="{{ asset('js/java.js')}}"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>