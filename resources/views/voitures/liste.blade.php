
   @extends('layouts.app')
   @section('content')

  <a href="{{route('voitures.create')}}" class="btn btn-success">Ajouter </a>
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
      <td>
        <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-primary">Modifier</a>
        <a href="{{ route('voitures.show', $voiture->id) }}" class="btn btn-info">Voir</a>
        <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>

      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection