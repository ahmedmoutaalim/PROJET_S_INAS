@extends('layouts.app')

@section('content')

<div style="display: flex; width: 100%;height: 80px; justify-content: space-between ;font-family: 'Work Sans', sans-serif; border-bottom:1.1px solid rgb(245,245,245); " >
<img src="images/logo-inas.png" style=" max-width: 225px;cursor:pointer; height:35px ; margin:26px;">
<button style="color: white; background-color:#FF3838 ;width:19%; font-size:17px; ; cursor:pointer; border:none;">PRÉINSCRIPTON EN LIGNE </button>
</div>

@endsection

@section('menu')
<div></div>
<ul> 
<li> <a href="#">ACCUEIL</a> </li>
<li> <a href="#">PRESENTATION DE L’INAS</a> </li>
<li> <a href="#">FORMATION</a> </li>
<li> <a href="#">ACTUALITES</a></li>
<li> <a href="#">ETUDES ET RECHERCHE</a> </li>
<li> <a href="#">COOPERATION ET PARTENARIAT</a> </li>
<li> <a href="#"> DOCUMENTATION</a></li>
<li> <a href="#">ESPACE ENSEIGNANT</a> </li>
</ul>
</div>
@endsection