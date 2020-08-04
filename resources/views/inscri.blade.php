
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

    <form style="margin-left:40% ;"  action="add.php" method="post" autocomplete="off" enctype="multipart/form-data">

        <input  type="text" name='title' placeholder="title"><br><br>
        <input  name="content" placeholder="content" cols="35" rows="10"><br><br>
        <input  type="text" name='title' placeholder="title"><br><br>
        <input  name="content" placeholder="content" cols="35" rows="10"><br><br>
     
    </form>
    
</body>
</html>

@endsection