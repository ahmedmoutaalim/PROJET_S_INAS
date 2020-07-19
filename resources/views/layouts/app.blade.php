<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>INAS</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/globle.css')}}">
</head>
<body>
<div style="display: flex; width: 100%;height: 120px; justify-content: space-between ;font-family: 'Work Sans', sans-serif; border-bottom:1.1px solid rgb(245,245,245); " >
<img src="images/logo.png" style=" width:130px;cursor:pointer; height:110px ; margin-left:18px;">
<button class="b">PRÉINSCRIPTON EN LIGNE </button>
</div>

<div class="menu">
<ul>
<li class="menu_list"> <a href="#" class="menu_list-accueil">ACCUEIL</a> </li>
<li class="menu_list"> <a href="#" class="menu_list-parentlist">PRESENTATION DE L’INAS</a>
    <div class="menu_list-childlist">
     <ul>
      <li> <a href="pres_inas">PRESENTATION DE L’INAS</a> </li>
      <li> <a href="#">MOT DE DIRECTRICE</a> </li>
      <li> <a href="#">MISSION</a> </li>
      <li> <a href="#">HISTORIQUE</a> </li>
      <li> <a href="#">Instance de gouvernance</a></li>
      <li> <a href="#">Filières</a></li>
      <li> <a href="#">Deprtements</a> </li>
      <li> <a href="#">INAS EN CHIFFRES</a></li>
     </ul>
    
    </div>
 </li>

<li class="menu_list"> <a href="#" class="menu_list-parentlist">FORMATION</a>

<div class="menu_list-childlist">
<ul>
<li>  <a href="#">FORMATION INITIALE</a> </li>
<li>  <a href="#">FORMATION CONTINUE</a> </li>
<li> <a href="#">ADMISSION INSCRIPTION</a> </li>
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


    <script src="../../resources/js/main.js"></script>
    <!-- <script src="{{ asset('js/slider.js')}}"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>