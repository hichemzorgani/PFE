@include('partials.nav')
<div class="container mt-2">
    <hr>
    <h2>Ajouter Affectation</h2>
    <hr>
  <form action="{{ route('affectation.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Type</label>
        <input type="password" class="form-control" name="type" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Quota projet fin d'étude</label>
        <input type="text" class="form-control" name="quota_pfe" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Quota immersion</label>
        <input type="text" class="form-control" name="quota_im" autocomplete="off">
    </div>
    <div class="form-group">
        <label>ID école</label>
        <input type="text" class="form-control" name="structure_iap_id" autocomplete="off">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
    </div>
</form>
</div>
<div class="container mt-2">
<hr>
    <h2>Toutes les directions</h2>
<hr>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Type</th>
        <th>quota_pfe</th>
        <th>quota_im</th>
        <th>école</th>
    </tr>    
@foreach ($affectations as $affectation)
    <tr>
        <td>{{$affectation->id}}</td>
        <td>{{$affectation->nom}}</td>
        <td>{{$affectation->type}}</td>
        <td>{{$affectation->quota_pfe}}</td>
        <td>{{$affectation->quota_im}}</td>
        <td>{{$affectation->structure_iap_id}}</td>
        <td>
            <form action ="{{route('affectation.edit', $affectation->id)}}" method="GET">
                @csrf
               <button class="btn btn-success">Modifier</button>
                </form> 
        </td>
        <td>
            <form action ="{{route('affectation.destroy', $affectation->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <button class="btn btn-danger">Supprimer</button>
                </form> 
        </td>
        
    </tr> 
@endforeach
</table>
</div>