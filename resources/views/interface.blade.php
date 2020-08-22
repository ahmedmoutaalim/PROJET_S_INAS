@extends('layouts.app')


@section('accueil')
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
    <span class="carousel-control-prev-icon" style="color: white;" aria-hidden="true" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('présontation')
<div class="inter">
      <div>
          <h1 class="textgr">PRÉSENTATION DE L’INAS</h1> <br>
            <p>L’Institut National de l’Action Sociale est un établissement 
                                            d’enseignement supérieur ne relevant pas des universités,
                                            crée en 1981 par l’autorité gouvernementale chargée des
                                            affaires sociales en vertu du décret n° 2.84.30 du 31 Janvier 1985, 
                                            c’est un Institut de formation et de recherche en travail social et développement 
                                            social de grande renommée nationale et africaine. Il forme des cadres supérieurs et 
                                            moyens spécialisés en travail social et mène actuellement un  grand chantier de restructuration
                                            et développement pour diversifier son offre de formation et augmenter ses effectifs
                                            d’étudiants et intégrer la formation à l’international. <br>
                                            L’institut relève actuellement du Ministère de la Solidarité
                                            du Développement Social, de l’Egalité et de la Famille.</p>
      </div>

      <div>
            <h1  class="textgr">Mot de la Directrice de l’INAS</h1> <br>
              <P class="cnt">
                                            Actuellement, le domaine du travail social est en plein essor, et en perpétuelle évolution, ce qui en fait un choix de formation convoité par les professionnels en devenir. <br> 

                                            Dans ce sens, l’Institut National de l’Action Sociale contribue à la formation de personnes  compétentes et réflexives, dotées d’un sens critique et éthique aiguisé qui deviendront des acteurs de changement pour le mieux-être des personnes. <br> 

                                            Milieu d’échange stimulant, notre institut adhère à des valeurs et à des principes de justice sociale et favorise la promotion du développement social et du respect de la diversité humaine, dans un esprit d’ouverture et de dialogue. Il favorise la collaboration interprofessionnelle centrée sur les personnes, les familles, les groupes et les collectivités auprès desquels les professionnels interviennent. <br> 

                                            L’INAS s’appuie également sur une diversité de perspectives théoriques et méthodologiques, ainsi que sur les savoirs issus des pratiques professionnelles.</P>
      </div>
  </div>
  <h1 class="textgr"> Services du ministère</h1>
    <div class="d-flex justify-content-between  flex-wrap w-100 mt-4">
      <img  class="p-2 elem"  src="http://inastanger.ma/wp-content/uploads/2020/07/srceen100720.png"  alt="img1">
      <img class="p-2 elem"  src="http://inastanger.ma/wp-content/uploads/2020/07/unnamed-03072020.png"  alt="img2">
      <img class="p-2 elem"   src="http://inastanger.ma/wp-content/uploads/2020/07/srceen100720.png"  alt="img1">
      <img  class="p-2 elem"  src="http://inastanger.ma/wp-content/uploads/2020/07/unnamed-03072020.png"  alt="img2">
    </div>
    <div >

      <h1 class="textgr"> LIENS UTILES</h1>
      <div class="items-utiles">
        <ul>
          <li class="slide-item">
            <a href="https://www.entraide.ma/ar/">
              <img src="https://inastanger.ma/wp-content/uploads/2020/07/TA3AWON.jpg" alt="">
            </a>
          </li>
          <li class="slide-item">
            <a href="http://www.social.gov.ma/">
              <img src="https://inastanger.ma/wp-content/uploads/2020/07/WIZARA.jpg" alt="">
            </a>
          </li>
          <li class="slide-item">
            <a href="https://ads.ma/ar">
              <img src="https://inastanger.ma/wp-content/uploads/2020/07/وكالة-التنمية-الاجتماعيى.jpg" alt="">
            </a>
          </li>
          <li class="slide-item">
            <a href="https://pw.men.gov.ma/Ar/Pages/Accueil.aspx">
              <img src="https://inastanger.ma/wp-content/uploads/2020/07/FDSFD.jpg" alt="">
            </a>
          </li>
          <li class="slide-item">
            <a href="http://www.service-public.ma/web/guest/home">
              <img src="https://inastanger.ma/wp-content/uploads/2020/07/Capture-copieFDSGFD.jpg" alt="">
            </a>
          </li>
          <li class="slide-item">
            <a href="http://www.service-public.ma/">
              <img src="https://inastanger.ma/wp-content/uploads/2020/07/SERVICES.jpg" alt="">
            </a>
          </li>
          <li class="slide-item">
            <a href="http://fm6education.ma/portal/">
              <img src="https://inastanger.ma/wp-content/uploads/2020/07/FDSFDFGD.jpg" alt="">
            </a>
          </li>
        </ul>
      </div>


    </div>


@endsection