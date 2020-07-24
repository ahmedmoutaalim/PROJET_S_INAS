<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin:0;
        }
        body{
            width: 70%;
            margin:100px auto;
        }
        .containe img{
            padding: 10px 40px;
        }
        .containe{
            padding: 10px 10px;
            background-color: #f7f7f7;
        }
        .inscription{
            background-color: white;
            margin: 10px auto;
        }
        .inscription .etape1{
            margin: auto;
            text-align: center;
        }
        .inscription .etape2,.inscription .etape3, .inscription .etape4{
            margin: 0 30px;
        }
        .inscription .etape2 .col label,.inscription .etape3 .col label, .inscription .etape4 .col label{
            padding:10px 10px 0;
        }
        .etape4 .fill{
            margin: 20px auto;
            width: 500px;
        }
        hr{
            height: 5px;
        }
    </style>
</head>
<body>
    <div class="containe rounded">
        <a href="/"><img src="http://inaselearning.com/pluginfile.php/1/core_admin/logo/0x200/1587729412/logo.jpg" alt="" style="width: 100%;"> </a>
        <form class="inscription">
            <div class="etape1 p-4">
                <p>Veuillez saisir le code Masar</p>
                <label for="">Code Masar</label>
                <input type="text">
            </div>
            <hr>
            <div class="row etape2">
                <div class="col d-flex flex-column">
                    <label for="">Nom</label>
                    <input type="text">
                    <label for="">E-mail</label>
                    <input type="email">
                    <label for="">Date de naissance</label>
                    <input type="date">
                    <label for="">Nationalité</label>
                    <input type="text">
                    <label for="">Code postal</label>
                    <input type="number">
                </div>
                <div class="col d-flex flex-column">
                    <label for="">Prénom</label>
                    <input type="text">
                    <label for="">Tél portable</label>
                    <input type="number">
                    <label for="">lieu de naissance</label>
                    <input type="date">
                    <label for="">Adresse</label>
                    <input type="text">
                    <label for="">Ville</label>
                    <input type="text">
                </div>
            </div>
            <hr>
            <div class="row etape3">
                <div class="col d-flex flex-column">
                    <label for="">Série du bac</label>
                    <input type="text">
                    <label for="">ville de l'établissemant</label>
                    <input type="text">
                </div>
                <div class="col d-flex flex-column">
                    <label for="">établissement</label>
                    <input type="text">
                    <label for="">academie</label>
                    <input type="text">
                </div>
            </div>
            <hr>
            <div class=" etape4">
                <div class="row">
                    <div class="col d-flex flex-column">
                        <label for="">moyenne générale du Bac</label>
                        <input type="number">
                        <label for="">note de langue francais regional</label>
                        <input type="number">
                        <label for="">Note Math</label>
                        <input type="number">
                    </div>
                    <div class="col d-flex flex-column">
                        <label for="">moyenne générale de l'examen regional</label>
                        <input type="number">
                        <label for="">note de langue francais bac</label>
                        <input type="number">
                        <label for="">Note Phisique</label>
                        <input type="number">
                    </div>
                </div>
                <div class="row fill">
                    <label for="">importer Relevés de notes</label>
                    <input type="file">
                </div>
            </div>
        </form>
    </div>









    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>