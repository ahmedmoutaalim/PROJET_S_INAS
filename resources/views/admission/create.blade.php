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
        <li><a href="home">Accès Elearning</a> </li>
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
        <h2 class="ctr">étape de validation </h2>
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
    


</body>
</html>
