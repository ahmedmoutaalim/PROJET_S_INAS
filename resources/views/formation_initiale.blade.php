@extends('layouts.app')

@section('accueil')
<div>
<div  style="background-color:red;      background-image: url(http://inastanger.ma/wp-content/uploads/2020/07/fdcgfd.jpg)" >
    <div class="row p-5 w-100" style="color: whitesmoke;">
        <h1 class="col font-weight-bold">Formation initiale</h1>
        <div class="col pt-3 text-center font-weight-bold "><p><a href="home" style="color: #d7ccc8; "> Accueil ></a> Formation initiale</p></div>
    </div>
</div>
<div class="m-4 " style="color: #757575;width:80%; line-height: 30px; letter-spacing: .01em; ">
     <p style=" font-weight:990; color:#FF0000;">La formation initiale est organisée en cycles Licence, Master et Doctorat</p>
     <p style=" font-weight:990; color:#757575;">Filière Licence professionnelle en travail social</p>
     <p style=" font-weight:990; color:#008000;">Objectif de la filière licence professionnelle en travail social</p>
    <p>La filière Licence professionnelle en travail social est une formation pluridisciplinaire. A travers les divers modules proposés, la formation dispensée sous forme de cours magistraux, travaux dirigés, travaux pratiques et/ou travaux de terrain, permet à l’étudiant de développer sa pratique en se basant sur des principes d’autodétermination, de réduction des inégalités sociales, d’amélioration de la qualité de vie et de promotion des droits. Le diplômé de la licence professionnelle en travail social intervient auprès des personnes, des familles, des groupes et des communautés en difficultés d’ordre économique et social et/ou relationnel. Il les aide à identifier leurs besoins, à comprendre l’origine de leurs problèmes et à mettre en œuvre les solutions adéquates.</p>
    <p>La formation s’inscrit, dans une perspective d’ouverture sur les réalités sociales du pays. Dans ce sens, les étudiants seront amenés tout au long de leur formation à se confronter aux problématiques sociales concernant notamment, la pauvreté, la précarité et l’exclusion, les difficultés d’insertion individuelles, familiales et de groupe, les difficultés liées à la parentalité, les problèmes liés au handicap, …etc..</p>
</div>

<!--Accordion wrapper-->
<div class="accordion md-accordion accordion-4" id="accordionEx2" role="tablist" aria-multiselectable="true">
  
<p style=" font-weight:990; color:#FF0000; margin:25px;">Organisation modulaire de la filière</p>





  <!-- Accordion card -->
  <div class="active" style="margin:20px 200px 20px 20px; text-align: left;" class="card">

    <!-- Card header -->
    <div class="card-header z-depth-1 teal lighten-4" role="tab" id="heading10">
      <a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse10" aria-expanded="true"
        aria-controls="collapse10">
        <h4 class="mb-0 black-text font-weight-bold text-uppercase">
        TRONC COMMUN
        </h4>
      </a>
    </div>

    <!-- Card body -->
    <div style="margin-top:10px;" id="collapse10" class="collapse show" role="tabpanel" aria-labelledby="heading10"
      data-parent="#accordionEx2">
      
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home"
        role="tab" aria-controls="home">S-1</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile"
        role="tab" aria-controls="profile">S-2</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages"
        role="tab" aria-controls="messages">S-3</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings"
        role="tab" aria-controls="settings">S-4</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M1 : Introduction au travail social</li>
  <li class="list-group-item">2	M2 : Connaissance de base en droits humains</li>
  <li class="list-group-item">3	M3 : Travail Social et sciences humaines</li>
  <li class="list-group-item">4	M4 : Famille et droit</li>
  <li class="list-group-item">5	M5 : Economie et gestion</li>
  <li class="list-group-item">6	M6 : Eléments de définition et Communication</li>
  <li class="list-group-item">7	M7 : Langue et bureautique</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 1</li>
 
</ul>
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M8 : Transformations sociales et enjeux de société</li>
  <li class="list-group-item">2	M9 : Principes et méthodes d’intervention du travail social</li>
  <li class="list-group-item">3	M10 : Méthodes d’enquêtes1</li>
  <li class="list-group-item">4	M11 : Connaissance de la personne et relation D’aide</li>
  <li class="list-group-item">5	M12 : Législations sociales et intervention</li>
  <li class="list-group-item">6	M13 : Informatique et langue</li>
  <li class="list-group-item">7	M14 : Activités d’Intégration Professionnelle 1</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 2</li>
 
</ul>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M15 : Pratiques du travail social et modes d’intervention</li>
  <li class="list-group-item">2	M16 : Connaissance des populations  fragilisées et animation sociale</li>
  <li class="list-group-item">3	M17 : Problématique spécifiques et animation sociale</li>
  <li class="list-group-item">4	M18 : Techniques et outils de gestion</li>
  <li class="list-group-item">5	M19 : Droit de la protection sociale</li>
  <li class="list-group-item">6	M20 : Communication professionnelle et langue</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 3</li>
 
</ul>
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M21 : Organisation communautaire</li>
  <li class="list-group-item">2	M22 : Analyse des problèmes sociaux</li>
  <li class="list-group-item">3	 M23 : Méthodologie et éthique de la recherche en travail social</li>
  <li class="list-group-item">4	M24 : Législations spécifiques</li>
  <li class="list-group-item">5	M25 : Outils de gestion et langue</li>
  <li class="list-group-item">6	M26 : Activités d’Intégration Professionnelle 2</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 4</li>
 
</ul>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <!-- Accordion card -->







  
  <div   style="margin:20px 200px 20px 20px;box-shadow:none; text-align: left;" class="card">

<!-- Card header -->
<div class="card-header z-depth-1 teal lighten-3" role="tab" id="heading11">
  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse11"
    aria-expanded="false" aria-controls="collapse11">
    <h4 class="mb-0 black-text  font-weight-bold text-uppercase">
     Parcours animation sociale
    </h4>
  </a>
</div>

<!-- Card body -->
<div style="margin-top:10px;" id="collapse11" class="collapse " role="tabpanel" aria-labelledby="heading10"
      data-parent="#accordionEx2">
      <p style=" font-weight:990; color:#FF0000;">Objectif du parcours animation sociale</p>

      <p style="liste color:#757575;">La spécialisation en « Animation sociale » a   pour objectif de produire des profils contribuant à:</p>
      <ul>
        <li>-La mobilisation et implication active des populations et des individus;</li>
        <li>-Développement de la relation sociale, l’insertion sociale et le maintien de l’autonomie de la personne.</li>
        <li>-L’intervention collective et coopérative avec les populations dans une démarche d’animation sociale.</li>
        <li>-Développement de la médiation sociale et culturelle et des projets d’éducation à l’environnement valorisant la citoyenneté internationale
        ,l’interculturalité ,l’économie sociale et solidaire avec les acteurs du territoire, dans une perspective de transformation sociale des territoires.
        </li>
      </ul>

      <p style="font-weight:990; liste color:#757575;">Organisation modulaire du parcours animation social</p>
      
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#E"
        role="tab" aria-controls="home">S-5</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#F"
        role="tab" aria-controls="profile">S-6</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="E" role="tabpanel" aria-labelledby="list-home-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M27 : Animation sociale et médiation/li>
  <li class="list-group-item">2	M28 : Management de l’animation sociale</li>
  <li class="list-group-item">3	M29 : Planification et gestion de projets d’animation sociale</li>
  <li class="list-group-item">4	M30 : Informatique et langues</li>
  <li class="list-group-item">5	M33 : Environnement institutionnel et Animation du territoire</li>
  <li class="list-group-item">6	M34 : Dynamique de groupes et gestion de ressources</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 5</li>
 
</ul>
      </div>
      <div class="tab-pane fade" id="F" role="tabpanel" aria-labelledby="list-profile-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M31 : Dynamique territoriale et politiques publiques sectorielles</li>
  <li class="list-group-item">2	M32 : Organisations, groupes et loisirs</li>
  <li class="list-group-item">3	M35 : Méthodes d’enquêtes II</li>
  <li class="list-group-item heigth">M43-44-45 : Stage professionnel</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 6</li>
 
</ul>
      </div>
     
    </div>
  </div>
</div>
      </div>
    </div>
  </div>









<div style="margin:20px 200px 20px 20px;box-shadow:none; class="card">

    <!-- Card header -->
    <div class="card-header z-depth-1 teal lighten-2" role="tab" id="heading12">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse12"
        aria-expanded="false" aria-controls="collapse12">
        <h4 class="mb-0 black-text  font-weight-bold text-uppercase">
         Parcours service sociale
        </h4>
      </a>
    </div>
    
    <!-- Card body -->
    <div style="margin-top:10px;" id="collapse12" class="collapse " role="tabpanel" aria-labelledby="heading10"
      data-parent="#accordionEx2">
      <p style=" font-weight:990; color:#757575; ">Organisation modulaire du parcours service social</p>
<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#a"
        role="tab" aria-controls="home">S-5</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#b"
        role="tab" aria-controls="profile">S-6</a>
   
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="list-home-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M36 : Cadre professionnel</li>
  <li class="list-group-item">2	M37 : Dynamique sociétale et organisations</li>
  <li class="list-group-item">3	M34 : Dynamique de groupes et gestion de ressources</li>
  <li class="list-group-item">4	M38 : Législations sociales</li>
  <li class="list-group-item">5	M39 : Planification et gestion de projets sociaux</li>
  <li class="list-group-item">6	M40 : Médiation et langues</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 5</li>
 
</ul>
      </div>
      <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="list-profile-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M41 : Politiques Sociales</li>
  <li class="list-group-item">2	M42 : Genre et représentation sociale</li>
  <li class="list-group-item">3	M35 : Méthodes d’enquêtes 2</li>
  <li class="list-group-item">M43-44-45 : Stage professionnel</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 6</li>
 
</ul>
      </div>
      <div class="tab-pane fade" id="c" role="tabpanel" aria-labelledby="list-messages-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M15 : Pratiques du travail social et modes d’intervention</li>
  <li class="list-group-item">2	M16 : Connaissance des populations  fragilisées et animation sociale</li>
  <li class="list-group-item">3	M17 : Problématique spécifiques et animation sociale</li>
  <li class="list-group-item">4	M18 : Techniques et outils de gestion</li>
  <li class="list-group-item">5	M19 : Droit de la protection sociale</li>
  <li class="list-group-item">6	M20 : Communication professionnelle et langue</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 3</li>
 
</ul>
      </div>
      <div class="tab-pane fade" id="d" role="tabpanel" aria-labelledby="list-settings-list">
      <ul class="list-group list-group-flush">
  <li class="list-group-item">1	M21 : Organisation communautaire</li>
  <li class="list-group-item">2	M22 : Analyse des problèmes sociaux</li>
  <li class="list-group-item">3	 M23 : Méthodologie et éthique de la recherche en travail social</li>
  <li class="list-group-item">4	M24 : Législations spécifiques</li>
  <li class="list-group-item">5	M25 : Outils de gestion et langue</li>
  <li class="list-group-item">6	M26 : Activités d’Intégration Professionnelle 2</li>
  <li style="font-weight:990;" class="list-group-item">Total VH semestre 4</li>
 
</ul>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <!-- Accordion card -->






  <!-- Accordion card -->
  

@endsection