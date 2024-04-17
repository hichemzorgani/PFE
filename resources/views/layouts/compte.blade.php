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
    <h2>@if(request()->has('modifier'))
        Modifier Compte :
    @else                       
        Créer un nouveau compte :
    @endif</h2>
    <hr>
  <div id="div"> 
    @if(request()->has('modifier'))
    <form action="{{ route('compte.update',$compte->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <h5>Utilisateur :</h5>
            <input type="text" class="form-control" name="utilisateur" autocomplete="off" value="{{$compte->utilisateur}}">
        </div>
        <div class="form-group">
            <h5>Mot de passe :</h5>
            <input type="text" class="form-control" name="password" autocomplete="off" value="{{$compte->password}}">
        </div>
        <div class="form-group">
            <h5>Type de compte :</h5>
            <!-- <input type="text" class="form-control" name="type_compte" autocomplete="off" value="{$compte->type_compte}}"> -->
            <select class="form-control" name="type_compte">
                <option @if($compte->type_compte == 1) selected @endif>1</option>
                <option @if($compte->type_compte == 2) selected @endif>2</option>
                <option @if($compte->type_compte == 3) selected @endif>3</option>
              </select>
        </div>
        <div class="form-group">
            <h5>ID école :</h5>
            <!-- <input type="text" class="form-control" name="structure_iap_id" autocomplete="off" value="{$compte->structure_iap_id}}"> -->
            <select class="form-control" name="structure_iap_id">
                @foreach($ecoles as $ecole)
                <option @if($compte->structure_iap_id == $ecole->id) selected @endif>{{$ecole->id}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
        </div>
    </form>
    @else
  <form action="{{ route('compte.store') }}" method="POST">
    @csrf 
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
        <input type="submit" class="btn btn-warning my-2" value="Ajouter" name="ajouter">
    </div>
</form>
@endif
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
               <button class="btn btn-success" name="modifier">Modifier</button>
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









