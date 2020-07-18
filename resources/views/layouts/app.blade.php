<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>INAS</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            list-style:none;
            text-decoration:none;
            font-family: 'Work Sans', sans-serif;
                   
            
        }
        body{
          list-style:none;
            text-decoration:none;
        }
      

        .b{
            color: white;
             background-color:#FF3838 ;
             width:19%;
              font-size:17px;
               cursor:pointer;
                border:none;
                 height:80px;
                  margin-top:20px;
                  border-bottom-left-radius:5px;
                   border-top-left-radius:5px;
                  
                  
        }

        .b:hover{
            background-color:rgb(200, 0, 0);opacity:.9;width:18.5%;
          
           
        }
        

      
        .menu{
        
        width: 100%;
        padding:10px;
        margin-bottom:25px;
       

        }

      .menu_list a{
         
        transition:.5s;
          font-size:15.6px;
          color:black;
      }

      .menu_list-accueil::after{
        content:'';
          height:2.3px;
          background:#FF3838;
          display:block;
          width:30%;
          margin-top:4px;
      }
  
    .menu_list-accueil:hover{
          transition:  .5s;
          color:#FF3838;
          text-decoration:none;


    }

      .menu_list-parentlist::after{
          content:'';
          display:block;
          width:0%;
          height:2.3px;
          background:#FF3838;
          margin-top:4px;
          transition: .5s;
          position:relative;
      }
      .menu_list-parentlist:hover::after {
          width:20%;
          transition: width .5s;
          color:#FF3838;
          text-decoration:none;
         
      }

      .menu_list-parentlist:hover{
        transition: .5s;
          color:#FF3838;
          text-decoration:none;
      }
    
    
    
      .menu_list-childlist{
          display:none;
     
          
          
      }
      .menu ul li{
        display: inline-block;
        padding:10px;
        float :left;
        
        
        
      }

      .menu ul li:hover .menu_list-childlist{
       
        display:block;
        position :absolute;
        background:#E82530;
        margin-top:9px;
        border-bottom-left-radius:5px;
        border-bottom-right-radius:5px;
        margin-bottom:-30px;
        margin-left:-15px;
        z-index:10;
      
      }


      .menu ul li:hover .menu_list-exeption{
        margin-left:-80px;

      }
      

      .menu ul li:hover .menu_list-childlist ul li{
       width:200px;
       padding:10px;
       border-bottom:1px dotted #fff;
       text-align:left;
       transition:.5s;
      }
      .menu ul li:hover .menu_list-childlist ul li:hover{
    
       border-bottom:1px dotted black;
    
       
      
      }
     
   .menu_list-childlist ul li {
 
        margin:10px;
        float: left;
        clear: left;
      
    
        
        
      }
      .menu_list-childlist ul li a:hover{
        font-size:15px;
        color:#fff;
        text-decoration:none;
        
      }

     
 
    

    
     
      

 

     
      /* slider */
        .slider .slider-items .item img{
          width: 100%;
          height: 550px;
        }

/---------------------------------section_presontation----------------------------/
.flex{
  display: flex;
  
 
}


    </style>

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
      <li> <a href="#">PRESENTATION DE L’INAS</a> </li>
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