
@extends('layouts.app')


@section('accueil')
<div  style="background-color:red;      background-image: url(http://inastanger.ma/wp-content/uploads/2020/07/fdcgfd.jpg)" >
    <div class="row p-5 w-100" style="color: whitesmoke;">
        <h1 class="col font-weight-bold">Préinscription en ligne</h1>
        <div class="col pt-3 text-center font-weight-bold "><p><a href="home" style="color: #d7ccc8; "> Accueil ></a> Formation initiale</p></div>
    </div>
</div>

<h2>étape information </h2>
<form action="{{url('etudiants')}}"  method="POST" " style=" margin:50px;">
    @csrf
  <div class="form-row">
      <div class="col-md-4 mb-3">
          <label for="prenom">Prénom : </label>
          <input name="nom_etudiant" type="text" class="form-control"  required >
          
      </div>
      <div class="col-md-4 mb-3">
          <label for="nom">Nom de famille :</label>
          <input name="prenom_etudiant" type="text" class="form-control"  required>
          
      </div>
      <div class="col-md-4 mb-3">
          <label for="lieu">lieu de naissance : </label>
          <input name="lieu_naissance" type="text" class="form-control"  required>
        
      </div>
  </div>
  <div class="form-row">
      <div class="col-md-6 mb-3">
          <label for="email">adresse email : </label>
          <input name="adresse_email" type="email" class="form-control"  required>
      
      </div>
      <div class="col-md-3 mb-3">
          <label for="num">numero telephone : </label>
          <input name="numero_telephone" type="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" class="form-control"required>
        
      </div>
      <div class="col-md-3 mb-3">
          <label for="cp">annee bac : </label>
          <input name="annee_bac" max="2020" min="2016" type="number" class="form-control"  required>
        
      </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
        <label for="sec">section bac : </label>
        <input name="section_bac" type="text" class="form-control"  required>
   
    </div>
    <div class="col-md-4 mb-3">
        <label for="nom">ville étudiant :</label>
        <input name="ville_etudiant" type="text" class="form-control"  required>
       
    </div>
    <div class="col-md-4 mb-3">
        <label for="lieu">établissenment : </label>
        <input name="etablissement" type="text" class="form-control"  required>
    
    </div>
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <label for="">adresse : </label>
        <input name="adresse_etudiant" type="text" class="form-control" autocomplete="off" required>
     
    </div>    
   
    <div class="col-md-6 mb-3">
        <label for="lieu">filiére : </label>
        <select name="filiére_etudiant" style="height: 38px" class="custom-select custom-select-sm">
            <option value="Conseiller Social"selected>Conseiller Social</option>
            <option value="Gestionnaire en affaires sociales">Gestionnaire en affaires sociales</option>
          </select>
    </div>
  
</div>   

{{-- <p>Click the button to print the current page.</p>
 
<button onclick="myFunction()">Print this page</button>
 
<script>
function myFunction() {
    window.print();
}
</script>  --}}


  {{-- <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" required>
        <label class="form-check-label" for="cgu">J'accepte les conditions </label>
        <div class="invalid-feedback">Vous devez accepter les CGU pour continuer</div>
      </div>
  </div> --}}
  <input class="btn btn-secondary my-2 my-sm-0 "  type="submit"  value="valider">
</form>


@endsection