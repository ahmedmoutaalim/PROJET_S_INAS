@extends('layouts.app')


@section('accueil')
<!-- <div class="slider"> -->
    <!-- <div class="slider-items">
        <div class="item active">
             <img src="//inastanger.ma/wp-content/uploads/2020/07/unnamed.jpg">
             
        </div>
        <div class="item">
             <img src="http://inastanger.ma/wp-content/uploads/2020/07/fittosize__705_0_6082e3ebdacb229f1031db1d5c13b28c_bild2.png">
        </div>
    </div> -->
    <!-- slider controls -->
      <!-- <div class="left-slide">&lt;</div> -->
      <!-- <div class="right-slide">&gt;</div> -->
    <!-- slider controls -->
<!-- </div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 600px;" src="//inastanger.ma/wp-content/uploads/2020/07/unnamed.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 600px;" src="http://inastanger.ma/wp-content/uploads/2020/07/fittosize__705_0_6082e3ebdacb229f1031db1d5c13b28c_bild2.png" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('présontation')

<div style="display:flex;">

     <div class='flex_firstText'>
         <h1 class='flex_firstText-title'>PRÉSENTATION DE L’INAS</h1>
           <p class='flex_firstText-content'>L’Institut National de l’Action Sociale est un établissement 
                                           d’enseignement supérieur ne relevant pas des universités,
                                           crée en 1981 par l’autorité gouvernementale chargée des
                                           affaires sociales en vertu du décret n° 2.84.30 du 31 Janvier 1985, 
                                           c’est un Institut de formation et de recherche en travail social et développement 
                                           social de grande renommée nationale et africaine. Il forme des cadres supérieurs et 
                                           moyens spécialisés en travail social et mène actuellement un  grand chantier de restructuration
                                           et développement pour diversifier son offre de formation et augmenter ses effectifs
                                           d’étudiants et intégrer la formation à l’international.
                                           L’institut relève actuellement du Ministère de la Solidarité
                                           du Développement Social, de l’Egalité et de la Famille.</p>
     </div>

     <div class='flex_secondText'>
          <h1 class='flex_secondText-title'>Mot de la Directrice de l’INAS</h1>
            <P class='flex_secondText-content'>
                                           Actuellement, le domaine du travail social est en plein essor, et en perpétuelle évolution, ce qui en fait un choix de formation convoité par les professionnels en devenir.

                                           Dans ce sens, l’Institut National de l’Action Sociale contribue à la formation de personnes compétentes et réflexives, dotées d’un sens critique et éthique aiguisé qui deviendront des acteurs de changement pour le mieux-être des personnes.

                                           Milieu d’échange stimulant, notre institut adhère à des valeurs et à des principes de justice sociale et favorise la promotion du développement social et du respect de la diversité humaine, dans un esprit d’ouverture et de dialogue. Il favorise la collaboration interprofessionnelle centrée sur les personnes, les familles, les groupes et les collectivités auprès desquels les professionnels interviennent.

                                           L’INAS s’appuie également sur une diversité de perspectives théoriques et méthodologiques, ainsi que sur les savoirs issus des pratiques professionnelles.</P>
    </div>

</div>

@endsection