
@include('partials.nav')
<div class="container mt-2">
    <hr>
    <h2>Ajouter compte</h2>
    <hr>
  <form action="{{ route('compte.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <label>Utilisateur</label>
        <input type="text" class="form-control" name="utilisateur" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Type de compte</label>
        <input type="text" class="form-control" name="type_compte" autocomplete="off">
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
    <h2>Tous les comptes</h2>
<hr>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Utilisateur</th>
        <th>Mot de passe</th>
        <th>Type compte</th>
        <th>école</th>
    </tr>    
@foreach ($comptes as $compte)
    <tr>
        <td>{{$compte->id}}</td>
        <td>{{$compte->utilisateur}}</td>
        <td>{{$compte->password}}</td>
        <td>{{$compte->type_compte}}</td>
        <td>{{$compte->structure_iap_id}}</td>
        <td>
            <form action ="{{route('compte.edit', $compte->id)}}" method="GET">
                @csrf
               <button class="btn btn-success">Modifier</button>
                </form> 
        </td>
        <td>
            <form action ="{{route('compte.destroy', $compte->id)}}" method="POST">
                @csrf
                @method('DELETE')
               <button class="btn btn-danger">Supprimer</button>
                </form> 
        </td>
    </tr> 
@endforeach
</table>
</div>









