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
      li{

        display: inline-block;
        padding: 20px;
      }

      li a{
         
        
          font-size:15.6px;
          color:#757575;
      }

      .normal::after{
        content:'';
          height:3px;
          background:#FF3838;
          display:block;
          width:30%;
          margin-top:4px;


      }

      .cool-link::after{
          content:'';
          display:block;
          width:0%;
          height:3px;
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


     
      


    </style>

</head>
<body>
    @yield('content')
    @yield('menu')


    <script src="../../resources/js/main.js"></script>
    
</body>
</html>