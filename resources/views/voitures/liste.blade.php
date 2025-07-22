
   @extends('layouts.app')
   @section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">marque</th>
      <th scope="col">model</th>
      <th scope="col">matricule</th>
      <th scope="col">prix</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($ressultadatabase as $voiture)
    <tr>
      <th scope="row">{{$voiture->id}}</th>
      <td>{{$voiture->marque}}</td>
      <td>{{$voiture->modele}}</td>
      <td>{{$voiture->matricule}}</td>
      <td>{{$voiture->prix}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection