@extends('layouts.app')

@section('accueil')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>name : {{request('nom_etudiant')}}</p>
<p>naissance :{{request('date_naissance')}}</p>

</body>
</html>

@endsection