@include('partials.nav')
<div class="container mt-2">
    <hr>
    <h2>Ajouter Encadrant</h2>
    <hr>
  <form action="{{ route('encadrant.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Prenom</label>
        <input type="text" class="form-control" name="prenom" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Matricule</label>
        <input type="text" class="form-control" name="matricule" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" autocomplete="off">
    </div>
    <div class="form-group">
        <label>ID Département</label>
        <input type="text" class="form-control" name="structure_affectation_id" autocomplete="off">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
    </div>
</form>
</div>
<div class="container mt-2">
<hr>
    <h2>Tous les Encadrants</h2>
<hr>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Matricule</th>
        <th>Email</th>
        <th>ID département</th>
    </tr>    
@foreach ($encadrants as $encadrant)
    <tr>
        <td>{{$encadrant->id}}</td>
        <td>{{$encadrant->nom}}</td>
        <td>{{$encadrant->prenom}}</td>
        <td>{{$encadrant->matricule}}</td>
        <td>{{$encadrant->email}}</td>
        <td>{{$encadrant->structure_affectation_id}}</td>
        <td>
            <form action ="{{route('encadrant.edit', $encadrant->id)}}" method="GET">
                @csrf
               <button class="btn btn-success">Modifier</button>
                </form> 
        </td>
        <td>
            <form action ="{{route('encadrant.destroy', $encadrant->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <button class="btn btn-danger">Supprimer</button>
                </form> 
        </td>
    </tr> 
@endforeach
</table>
</div>