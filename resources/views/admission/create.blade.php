
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
  <div  style="background-color:red;      background-image: url(http://inastanger.ma/wp-content/uploads/2020/07/fdcgfd.jpg)" >
    <div class="row p-5 w-100" style="color: whitesmoke;">
        <h1 class="col font-weight-bold">Préinscription en ligne</h1>
        <div class="col pt-3 text-center font-weight-bold "><p><a href="home" style="color: #d7ccc8; "> Accueil ></a> Formation initiale</p></div>
    </div>
</div>

  @if(count($errors)>0)
  <div style="margin-top: 20px" >
    <ul>
      @foreach ($errors->all() as $error)

    <li style="width: 90% ; display:block; margin:auto;height:5%;  " class="alert alert-danger ">{{$error}}</li>
          
      @endforeach
    </ul>
  </div>
  @endif
  {{-- @if(\success::has('success'))
  <div> 

  <p>{{\Session::get('success')}}</p>
  </div>
      
  @endif --}}
<form action="{{url('admission')}}" method="POST" style="margin:50px;">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Code Massar : رقم مسار</label>
          <input type="text"  class="form-control" name="code_massar" id="exampleInputEmail1" aria-describedby="emailHelp" >       
        </div>

        <div>
            <label for="start">Date de Naissance : تاريخ الولادة</label>
            <input style="margin-bottom: 20px ;" class="form-control" name="date_naissance" type="date" id="start"   value="2018-07-22">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Créer mot de passe : أنشئ كلمة مرور</label>
          <input type="password" class="form-control" id="password" name="creation_password"  id="exampleInputPassword1" >
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1"> Confirmation mot de passe : تأكيد كلمة مرور</label>
          <input type="password" id="confirm_password"  class="form-control" id="exampleInputPassword1" >
        </div>
        

        <input class="btn btn-secondary my-2 my-sm-0 "  type="submit"  value="suivant">
      </form>
    
</body>
</html>

@endsection