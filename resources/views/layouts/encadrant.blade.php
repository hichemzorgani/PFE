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
        Modifier Encadrant :
    @else                       
        Ajouter un nouveau encadrant :
    @endif</h2>
    <hr>
  <div id="div">  
    @if(request()->has('modifier'))
    <form action="{{ route('encadrant.update',$encadrant->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <h5>Nom :</h5>
            <input type="text" class="form-control" name="nom" autocomplete="off" value="{{$encadrant->nom}}">
        </div>
        <div class="form-group">
            <h5>Prenom :</h5>
            <input type="text" class="form-control" name="prenom" autocomplete="off" value="{{$encadrant->prenom}}">
        </div>
        <div class="form-group">
            <h5>Matricule :</h5>
            <input type="text" class="form-control" name="matricule" autocomplete="off" value="{{$encadrant->matricule}}">
        </div>
        <div class="form-group">
            <h5>Email :</h5>
            <input type="text" class="form-control" name="email" autocomplete="off" value="{{$encadrant->email}}">
        </div>
        <div class="form-group">
            <h5>ID Département :</h5>
            <!-- <input type="text" class="form-control" name="structure_affectation_id" autocomplete="off" value="{$encadrant->structure_affectation_id}}"> -->
            <select class="form-control" name="structure_affectation_id">
                @foreach($affectations as $affectation)
                <option @if($affectation->id == $encadrant->structure_affectation_id) selected @endif>{{$affectation->id}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
        </div>
    </form>
    @else
  <form action="{{ route('encadrant.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <h5>Séléctionner le nom de la structure d'affectation :</h5>
        <!-- <input type="text" class="form-control" name="structure_affectation_id" autocomplete="off"> -->
        <select class="form-control" name="affectation_nom">
            @foreach ($affectations as $affectation)
            <option>{{$affectation->nom}}</option>
            @endforeach
          </select>
    </div>
    <div class="form-group">
        <h5>Nom :</h5>
        <input type="text" class="form-control" name="nom" autocomplete="off">
    </div>
    <div class="form-group">
        <h5>Prenom :</h5>
        <input type="text" class="form-control" name="prenom" autocomplete="off">
    </div>
    <div class="form-group">
        <h5>Matricule :</h5>
        <input type="text" class="form-control" name="matricule" autocomplete="off">
    </div>
    <div class="form-group">
        <h5>Email :</h5>
        <input type="text" class="form-control" name="email" autocomplete="off">
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
    <h2>Tous les Encadrants :</h2>
<hr>
<table class="table table-dark table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Matricule</th>
        <th>Email</th>
        <th>ID département</th>
        <th>Modification</th>
        <th>Supression</th>
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
               <button class="btn btn-success" name="modifier" >Modifier</button>
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
<br>
<br>