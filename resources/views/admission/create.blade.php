<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>INAS</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css.css')}}">
  

 
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="css/mdb.min.css">
 
    
</head>
<body>
  <div class="nv">
    <div style="display: flex; width: 100%;height: 120px; justify-content: space-between ;font-family: 'Work Sans', sans-serif; border-bottom:1.1px solid rgb(245,245,245); " class="head">
      <img src="https://inastanger.ma/wp-content/uploads/2020/07/inas-tanger-copie.png"  class="click">
      <img class="logo__center"  style=' margin:auto; margin-left:20%;' src="https://inastanger.ma/wp-content/uploads/2020/07/imgo-1.png">
    
      <form   action="{{url('admission/create')}}">
        <input class="incription"  type="submit" value=" PRÉINSCRIPTON EN LIGNE" />
      </form>
    </div>
    <div class="burger">
      <span></span>
    </div>
  </div>
  <div class="menu">
  
  <ul class="list">
    <li class="menu_list"> <a href="{{url('interface')}}" class="menu_list-accueil">ACCUEIL</a> </li>
    <li class="menu_list"> <a href="#" class="menu_list-parentlist">PRESENTATION DE L’INAS</a>
        <div class="menu_list-childlist">
          <ul>
            <li> <a href="../pres_inas">PRESENTATION DE L’INAS</a> </li>
            <li> <a href="../mot_dir">MOT DE DIRECTRICE</a> </li>
            <li> <a href="../miss_inas">MISSION</a> </li>
            <li> <a href="../historique">HISTORIQUE</a> </li>
            <li> <a href="../les-instances-de-gouvernance">Instance de gouvernance</a></li>
            <li> <a href="../filiere">Filières</a></li>
            <li> <a href="../les-departement">Deprtements</a> </li>
            <li> <a href="../inas-en-chiffres">INAS EN CHIFFRES</a></li>
          </ul>
          
        </div>
    </li>

    <li class="menu_list"> <a href="#" class="menu_list-parentlist">FORMATION</a>

<div class="menu_list-childlist">
<ul>
<li>  <a href="../formation_initiale">FORMATION INITIALE</a> </li>
<li>  <a href="../formation_continue">FORMATION CONTINUE</a> </li>
<li> <a href="../admis">ADMISSION INSCRIPTION</a> </li>
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
        <li><a href="../home">Accès Elearning</a> </li>
      </ul>
    </div>
  </li>
    <li class="menu_list"> <a href="#" class="menu_list-parentlist">ESPACE ETUDIANT</a>
      <div class="menu_list-childlist menu_list-exeption" >
        <ul>
          <li><a href="#">AVIS AUX ETUDIANTS</a> </li>
          <li><a href="#">STAGES & PROJETS</a> </li>
          <li><a href="../home">Accès Elearning</a> </li>
          <li><a href="#">ACTIVITES</a> </li>
          <li><a href="#">REGLEMENT INTERIEUR</a> </li>
        </ul>
      </div>
    </li>
    <li class="menu_list">
      <form   action="{{url('admission/create')}}">
        <input class="incription pre"  type="submit" value=" PRÉINSCRIPTON EN LIGNE" />
      </form>
      </li>
    </ul>
    
  </div>


   
  
</div>
  <div  style="background-color:red;      background-image: url(http://inastanger.ma/wp-content/uploads/2020/07/fdcgfd.jpg)" >
    <div class="row p-5 w-100" style="color: whitesmoke;">
        <h1 class="col font-weight-bold">Préinscription en ligne</h1>
        <div class="col pt-3 text-center font-weight-bold "><p><a href="home" style="color: #d7ccc8; "> Accueil ></a> Préinscription en ligne</p></div>
    </div>
     
</div>



  {{-- @if(count($errors)>0)
  <div style="margin-top: 20px" >
    <ul>
      @foreach ($errors->all() as $error)

    <li style="width: 90% ; display:block; margin:auto;height:5%;  " class="alert alert-danger ">{{$error}}</li>
          
      @endforeach
    </ul>
  </div> --}}
  {{-- @endif --}}
  {{-- @if(\success::has('success'))
  <div> 

  <p>{{\Session::get('success')}}</p>
  </div>
      
  @endif --}}
<form action="{{url('admission')}}" method="POST" style="margin:50px;" class="p-etape">

        @csrf
        <h2 class="ctr"> Admission </h2>
        <div class="form-group">
          <label for="exampleInputEmail1">Code Massar : رقم مسار</label>
          <input type="text"  class="form-control" placeholder="k111111111" Pattern = "([A-Z]{1}\d{9})|([a-z]{1}\d{9})" name="code_massar" id="exampleInputEmail1" autocomplete="off" aria-describedby="emailHelp" required>       
        </div>

        <div>
            <label for="start">Date de Naissance : تاريخ الولادة</label>
            <input style="margin-bottom: 20px ;"  min="1999-01-01" max="2004-12-31" class="form-control" name="date_naissance" type="date" id="start"    required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Créer mot de passe : أنشئ كلمة مرور</label>
          <input type="password" class="form-control" id="password" name="creation_password"  id="exampleInputPassword1" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1"> Confirmation mot de passe : تأكيد كلمة مرور</label>
          <input type="password" id="confirm_password" maxlength = "30" minlength="8" class="form-control" id="exampleInputPassword1" required>
        </div>
        

        <input class="btn btn-secondary my-2 my-sm-0 suite"  type="submit"  value="suivant">
      </form>
    

 <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 mode">

  <!-- Footer Links -->
  <div class=" text-center text-md-left">
  
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
  
      <!-- Grid column -->
  
      <hr class="clearfix w-100 d-md-none">
  
      <!-- Grid column -->
      <div class="col-md-2 mx-auto ">
  
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 ">PRESENTATION DE L’INAS</h5>
  
        <ul class="list-unstyled ">
        <li>
            <a class="footer_links-hover lgn" href="#!">PRESENTATION DE L’INAS</a>
          </li>
          <li>
            <a  class="footer_links-hover lgn" href="#!">FORMATION</a>
          </li>
          <li>
            <a  class="footer_links-hover lgn" href="#!">ETUDES ET RECHERCHE</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">DOCUMENTATION</a>
          </li>
        </ul>
  
      </div>
      <!-- Grid column -->
  
      <hr class="clearfix w-100 d-md-none">
  
      <!-- Grid column -->
      <div class="col-md-2 mx-auto width">
  
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 ">FORMATION </h5>
  
        <ul class="list-unstyled">
          <li>
            <a class="footer_links-hover lgn"  href="">FORMATION CONTINUE</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">AGENDA</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">EVENEMENTS</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">ACTIVITES</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">AVIS</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">NEWS</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">ESPACE PRESSE</a>
          </li>
        </ul>
  
      </div>
      <!-- Grid column -->
  
      <hr class="clearfix w-100 d-md-none">
  
      <!-- Grid column -->
      <div class="col-md-2 mx-auto width">
  
  
  
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Etude et recherche</h5>
  
        <ul class="list-unstyled">
          <li>
            <a class="footer_links-hover lgn" href="#!">PRESENTATION</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">COLLOQUES</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">ETUDES & PUBLICATIONS</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">Stratégie et développement</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">Laboratoires de recherche</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">Évènements scientifiques</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">Centre d’Études doctorale</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">Revue scientifique</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">BIBLIOTHEQUE NUMERIQUE</a>
          </li>
          <li>
            <a class="footer_links-hover lgn" href="#!">MEDIATHEQUE</a>
          </li>
        
          <li>
            <a class="footer_links-hover lgn" href="#!">ANNUAIRE</a>
          </li>
        </ul>
  
      </div>
      <div class="col-md-2 mx-auto width">
  
  
  
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 ">contact</h5>
        <p >Tél : 05399-40796 Email : </p>
        <p>contact@inas.social.gov.ma</p>
  
      </div>
      <!-- Grid column -->
  
    </div>
    <!-- Grid row -->
  
  </div>
  <!-- Footer Links -->
  
  <hr>
  
  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item margin">
      <h5 class="mb-1   ">ACCÉDER À LA PRÉINSCRIPTION</h5>
    </li>
    <li class="list-inline-item">
      <a href="{{url('admission/create')}}" class="btn btn-danger btn-rounded acd">PRÉINSCRIPTION</a>
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
    <a > inastanger.com</a>
  </div>
     
     <script src="{{ asset('js/java.js')}}"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 


</body>
</html>
