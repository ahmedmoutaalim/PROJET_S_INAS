<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>INAS</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            list-style:none;
            text-decoration:none;
            font-family: 'Work Sans', sans-serif;
        }
        

        .fachkar{
            margin-top:10px;
        }
.samkar{

        display: inline-block;
        padding: 20px;
      }

      .samkar a{
         
        
          font-size:15.6px;
          color:#757575;
      }

      .korbar::after{
        content:'';
          height:2.3px;
          background:#FF3838;
          display:block;
          width:30%;
          margin-top:4px;
      }
      .korbar:hover{
        color:#FF3838;
        transition:  .5s;
      }

      .aanbar::after{
          content:'';
          display:block;
          width:0%;
          height:2.3px;
          background:#FF3838;
          margin-top:4px;
          transition: width .5s;
      }
      .aanbar:hover::after {
          width:20%;
          transition: width .5s;
         
      }
      .aanbar:hover{
        transition:  .5s;
        color:#FF3838;
      }

      .zanbar{

        float:left;
        background-color:#333333;
        color:#757575;
        margin-top:20px;
        display:none;
       
      }
      .zanbar:hover{
        display:block;
        margi
      }

     
      


    </style>

</head>
<body>
<div style="display: flex; width: 100%;height: 120px; justify-content: space-between ;font-family: 'Work Sans', sans-serif; border-bottom:1.1px solid rgb(245,245,245); " >
<img src="images/logo.png" style=" width:130px;cursor:pointer; height:110px ; margin-left:18px;">
<button style="color: white; background-color:#FF3838 ;width:19%; font-size:17px; cursor:pointer; border:none; height:80px; margin-top:20px;">PRÉINSCRIPTON EN LIGNE </button>
</div>

<div class="fachkar">

<li class="samkar"> <a href="#" class="korbar">ACCUEIL</a> </li>
<li class="samkar"> <a href="#" class="aanbar">PRESENTATION DE L’INAS</a>
    <div class="zanbar">
     <ul>
     <li>PRESENTATION DE L’INAS</li>
     <li>MOT DE DIRECTRICE</li>
     <li>MISSION</li>
     <li>HISTORIQUE</li>
     <li>Instance de gouvernance </li>
     <li>Filières</li>
     <li>Deprtements</li>
     <li>INAS EN CHIFFRES</li>
     </ul>
    
    </div>
 </li>
<li class="samkar"> <a href="#" class="aanbar">FORMATION</a> </li>
<li class="samkar"> <a href="#" class="aanbar">ACTUALITES</a></li>
<li class="samkar"> <a href="#" class="aanbar">ETUDES ET RECHERCHE</a> </li>
<li class="samkar"> <a href="#" class="aanbar">COOPERATION ET PARTENARIAT</a> </li>
<li class="samkar"> <a href="#" class="aanbar"> DOCUMENTATION</a></li>
<li class="samkar"> <a href="#" class="aanbar">ESPACE ENSEIGNANT</a> </li>

</div>
    @yield('accueil')


    <script src="../../resources/js/main.js"></script>
    
</body>
</html>