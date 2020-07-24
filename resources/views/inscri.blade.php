@extends('layouts.app')


@section('accueil')

<form class="container" style="color: #028a98;">
    <div class="mb-2 d-flex justify-content-between rounded" style="border: 2px dashed #028a98;">
        <div style="background-color: #028a98; width:200px; height:200px;" class="text-light rounded text-center">
            <h2 style="margin:70px auto 0">Etape 1</h2>
        </div>
        <div class="text-center align-self-center" style="margin: 0 auto; ">
            <p>Veuillez saisir la code Masar</p>
            <label for="" style="margin-bottom: -5px;">Code Masar</label>
            <input type="text" class="rounded" style="background-color:#e5e5e5; border:2px solid #028a98">
        </div>
    </div>    
    
    <div class="mb-2 d-flex justify-content-between rounded text-center" style="border: 2px dashed #028a98;">
        <div style="background-color: #028a98; width:200px; height:230px;" class="text-light rounded">
            <h2 style="margin:70px auto 0">Etape 2</h2>
            <p>Données civites de l'étudiant</p>
        </div>
        <div style="width: 800px; margin:0 auto;">
            <div class="d-flex justify-content-between mt-2 mb-2" >
                <label for="" style="margin-right: -20px;" class="pl-4">Nom</label>
                <input type="text" class="rounded" style="background-color:#e5e5e5; border:2px solid #028a98">
                <label for="">Prénom</label>
                <input type="text" class="rounded" style="background-color:#e5e5e5; border:2px solid #028a98">
            </div>
            <div class="d-flex justify-content-between mt-2 mb-2">
                <label for="" style="width:10%; margin-right: -22px;" class="pl-2">E-mail</label>
                <input type="email" class="rounded" style="background-color:#e5e5e5; border:2px solid #028a98">
                <label for="">Tél portable</label>
                <input type="number" class="rounded" style="background-color:#e5e5e5; border:2px solid #028a98">
            </div>
            <div class="d-flex justify-content-between mt-2 mb-2">
                <label for="" style="width:10%">Date de naissance</label>
                <input type="Date"  class="rounded mt-1" style="height:39px; width:195px;background-color:#e5e5e5; border:2px solid #028a98">
                <label for="" class="mt-2">lieu de naissance</label>
                <input type="text"   class="rounded mt-1" style="height:39px; width:195px;background-color:#e5e5e5; border:2px solid #028a98">
            </div>
            <div class="d-flex justify-content-between">
                <label for="" >Nationalité</label>
                <input type="text"   class="rounded " style="margin-left:-40px;background-color:#e5e5e5; border:2px solid #028a98">
                <label for="">Adresse</label>
                <input type="text"  class="rounded " style="background-color:#e5e5e5; border:2px solid #028a98">
            </div>
            <div class="d-flex justify-content-between mt-2 mb-2">
                <label for="">Code postal</label>
                <input type="text"   class="rounded" style="margin-left:-63px;background-color:#e5e5e5; border:2px solid #028a98">
                <label for="">Ville</label>
                <input type="text"  class="rounded " style="background-color:#e5e5e5; border:2px solid #028a98">
            </div>
        </div>
    </div>   
</form>
@endsection