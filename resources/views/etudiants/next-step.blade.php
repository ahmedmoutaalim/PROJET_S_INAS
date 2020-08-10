
@extends('layouts.app')


@section('accueil')

<form action="{{url('etudiants')}} " style=" margin:50px;">
  <div class="form-row">
      <div class="col-md-4 mb-3">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control"  required>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
      </div>
      <div class="col-md-4 mb-3">
          <label for="nom">Nom de famille</label>
          <input type="text" class="form-control"  required>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
      </div>
      <div class="col-md-4 mb-3">
          <label for="pseudo">Pseudo</label>
          <input type="text" class="form-control"  required>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
      </div>
  </div>
  <div class="form-row">
      <div class="col-md-6 mb-3">
          <label for="ville">Ville</label>
          <input type="text" class="form-control"  required>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
      </div>
      <div class="col-md-3 mb-3">
          <label for="pays">Pays</label>
          <input type="text" class="form-control"required>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
      </div>
      <div class="col-md-3 mb-3">
          <label for="cp">Code postal</label>
          <input type="number" class="form-control"  required>
          <div class="valid-feedback">Ok !</div>
          <div class="invalid-feedback">Valeur incorrecte</div>
      </div>
  </div>
  <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" required>
        <label class="form-check-label" for="cgu">J'accepte les conditions générales d'utilisation et de vente</label>
        <div class="invalid-feedback">Vous devez accepter les CGU pour continuer</div>
      </div>
  </div>
  <nav aria-label="navigation">
    <ul class="pager">
      <li class="previous"><a href="inscription" title="Précédent">Précédent</a></li>
      <li class="next"><a href="#" title="Suivant">Suivant</a></li>
    </ul>
  </nav>
</form>


@endsection