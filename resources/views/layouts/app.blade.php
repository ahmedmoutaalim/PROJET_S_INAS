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
        

        .container{
            margin-top:10px;
        }
.parent-list{

        display: inline-block;
        padding: 20px;
      }

      li a{
         
        
          font-size:15.6px;
          color:#757575;
      }

      .normal::after{
        content:'';
          height:2.3px;
          background:#FF3838;
          display:block;
          width:30%;
          margin-top:4px;
      }
      .normal:hover{
        color:#FF3838;
        transition:  .5s;
      }

      .cool-link::after{
          content:'';
          display:block;
          width:0%;
          height:2.3px;
          background:#FF3838;
          margin-top:4px;
          transition: width .5s;
      }
      .cool-link:hover::after {
          width:20%;
          transition: width .5s;
         
      }
      .cool-link:hover{
        transition:  .5s;
        color:#FF3838;
      }

      .list-child{

        float:left;
        background-color:#333333;
        color:#757575;
       
      }

     
      


    </style>

</head>
<body>
<div style="display: flex; width: 100%;height: 120px; justify-content: space-between ;font-family: 'Work Sans', sans-serif; border-bottom:1.1px solid rgb(245,245,245); " >
<img src="images/logo.png" style=" width:130px;cursor:pointer; height:110px ; margin-left:18px;">
<button style="color: white; background-color:#FF3838 ;width:19%; font-size:17px; cursor:pointer; border:none; height:80px; margin-top:20px;">PRÉINSCRIPTON EN LIGNE </button>
</div>

<div class="container">

<li class="parent-list"> <a href="#" class="normal">ACCUEIL</a> </li>
<li class="parent-list"> <a href="#" class="cool-link">PRESENTATION DE L’INAS</a>
    <div class="list-child">
     <ul>
     <li>llkkk</li>
     <li>socsokc</li>
     <li>skcksc</li>
     </ul>
    
    </div>
 </li>
<li class="parent-list"> <a href="#" class="cool-link">FORMATION</a> </li>
<li class="parent-list"> <a href="#" class="cool-link">ACTUALITES</a></li>
<li class="parent-list"> <a href="#" class="cool-link">ETUDES ET RECHERCHE</a> </li>
<li class="parent-list"> <a href="#" class="cool-link">COOPERATION ET PARTENARIAT</a> </li>
<li class="parent-list"> <a href="#" class="cool-link"> DOCUMENTATION</a></li>
<li class="parent-list"> <a href="#" class="cool-link">ESPACE ENSEIGNANT</a> </li>

</div>
    @yield('accueil')


    <script src="../../resources/js/main.js"></script>
    
</body>
</html>