<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
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

     
      /* slider */
        .sliderA{
        width: 100%;
        /* border:10px solid  #29a8e2; */
        /* margin:80px auto; */
        position: relative;
        overflow: hidden;
        }

        .sliderA .left-slide,.sliderA .right-slide{
          position: absolute;
          height: 40px;
          width: 40px;
          background-color: #444444;
          border-radius: 50%;
          color:#ffffff;
          font-size: 20px;
          top:50%;
          cursor: pointer;
          margin-top: -20px;
          text-align: center;
          line-height: 40px;
          
        }
        .sliderA .left-slide:hover,.sliderA .right-slide:hover{
        box-shadow: 0px 0px 10px black;
        background-color: #29a8e2;
        }

        .sliderA .left-slide{
          left: 30px;
        }
        .sliderA .right-slide{
          right: 30px;
        }
        .sliderA .slider-items .item img{
          background:content-box;
          /* height: 100%; */
          display: block;
        }

        .sliderA .slider-items .item{
          display: none;
          position: relative;
        }

        .sliderA .slider-items .item.active{
          display: block;
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
    <!-- <script src="{{ asset('js/slider.js')}}"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>