@include('partials.nav')

<style>
    *{
        font-family: Tahoma, sans-serif;
    }
</style>

<div class="container mt-2">

    <style>
        #div{
        margin: 5px; 
        border: 2px solid black; 
        border-radius: 10px; 
        padding: 10px;
    }
    </style>

    <hr>
    <h2>Créer un nouveau compte :</h2>
    <hr>
  <div id="div"> 
  <form action="{{ route('compte.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <h5>Utilisateur :</h5>
        <input type="text" class="form-control" name="utilisateur" autocomplete="off">
    </div>
    <div class="form-group">
        <h5>Mot de passe :</h5>
        <input type="text" class="form-control" name="password" autocomplete="off">
    </div>
    <div class="form-group">
        <h5>Séléctionner le type de compte :</h5>
        <!--<input type="text" class="form-control" name="type_compte" autocomplete="off"> -->
        <select class="form-control" name="type_compte">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
          <br>
    </div>
    <div class="form-group">
        <h5>Séléctionner nom d'école :</h5>
        <!--<input type="text" class="form-control" name="structure_iap_id" autocomplete="off"> -->
        <select class="form-control" name="nom_ecole">
            @foreach ($ecoles as $ecole)
            <option>{{$ecole->nom}}</option>
            @endforeach
          </select>
          <br>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-warning my-2" value="Ajouter" name="ajouter">
    </div>
</form>
</div>
</div>
<div class="container mt-2">
<hr>
    <h2>Tous les comptes :</h2>
<hr>
<table class="table table-dark table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Utilisateur</th>
        <th>Mot de passe</th>
        <th>Type compte</th>
        <th>école</th>
        <th>Modification</th>
        <th>Supression</th>
    </tr>    
@foreach ($comptes as $compte)
    <tr>
        <td>{{$compte->id}}</td>
        <td>{{$compte->utilisateur}}</td>
        <td>{{$compte->passwordh}}</td>
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
<br>
<br>









