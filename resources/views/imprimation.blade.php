




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        body{
            font-family: 'Work Sans', sans-serif;
        }
        .flexing{
           margin: auto;
           width: 70%;
      
           padding: 10px;
        }
        .text{
            margin: 30px;
            margin-left:30% ;
        }
        .centre{
       
         position: absolute;
         top:80;
         left:80%;
        
        }

        .inas{
            width: 10%;
        }

        .logo__center{
            width: 25%;
        }

        button {

        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer; 
         background-color: #f44336;
        }
    </style>
</head>
<body>
    <nav style="display: flex; width: 100%;height: 120px;justify-content: space-between; font-family: 'Work Sans', sans-serif; border-bottom:1.1px solid rgb(245,245,245); " class="head">
        <img class="inas" src="https://inastanger.ma/wp-content/uploads/2020/07/inas-tanger-copie.png"  >
        
        <img class="logo__center"   src="https://inastanger.ma/wp-content/uploads/2020/07/imgo-1.png">
      
    </nav>

    
 <section class="flexing"> 
     
        
        <h3 style="margin-left:30%; ">Les information pré-inscription</h3>
         <div style="margin-top: 5%" >
             <p class="text">Nom : {{request('nom_etudiant')}}</p>
             <p class="text">Prénom : {{request('prenom_etudiant')}}</p>
             <p class="text">Email : {{request('adresse_email')}}</p>
             <p class="text">Téléphone : {{request('numero_telephone')}}</p> 
             <p class="text">Adresse : {{request('adresse_etudiant')}}</p>
             <p class="text">Section : {{request('section_bac')}}</p>
            <p class="text">Etablissement : {{request('etablissement')}}</p>
            <p class="text">Filiére : {{request('filiére_etudiant')}}
             
        </div>
     
    
 </section>

 <section class='centre' > 
 <p > reçu des information</p>
 
<button  onclick="myFunction()">imprimer</button>
 
</section> 

<script>
    function myFunction() {
        window.print();
    }
</script> 
</body>
</html>

