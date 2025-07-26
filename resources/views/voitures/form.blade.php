@extends('layouts.app')
@section('content')



<div class="col-4 ms-5">
    <h1>formulaire d'ajout</h1>
    <form method="post" action="{{route('voitures.store')}}">
        @csrf
      
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">marque</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="marque">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">modèle</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="modele">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">matricule</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="matricule">
  </div> <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">prix</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prix">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection