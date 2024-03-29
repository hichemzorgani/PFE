@include('partials.nav')

<style>
    *{
        font-family: Tahoma, sans-serif;
    }
</style>

<div class="container mt-2">
    <hr>
    <style>
        #div{
        margin: 5px; 
        border: 2px solid black; 
        border-radius: 10px; 
        padding: 10px;
    }
    </style>
    <h2>Ajouter une nouvelle direction :</h2>
    <hr>
<div id="div">  
  <form action="{{ route('affectation.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <h5>Nom :</h5>
        <input type="text" class="form-control" name="nom" autocomplete="off">
    </div>
    <div class="form-group">
        <h5>Séléctionner le type :</h5>
        <!--<input type="text" class="form-control" name="type" autocomplete="off">-->
        <select class="form-control" name="type">
            <option>direction</option>
            <option>département</option>
          </select>
          <br>
    </div>
    <div class="form-group">
        <h5>Quota projet fin d'étude :</h5>
        <input type="text" class="form-control" name="quota_pfe" autocomplete="off">
    </div>
    <div class="form-group">
        <h5>Quota immersion :</h5>
        <input type="text" class="form-control" name="quota_im" autocomplete="off">
    </div>
    <div class="form-group">
        <h5>Séléctionner le nom d'école :</h5>
        <!--<input type="text" class="form-control" name="structure_iap_id" autocomplete="off"> -->
        <select class="form-control" name="nom_ecole">
            @foreach ($ecoles as $ecole)
            <option>{{$ecole->nom}}</option>
            @endforeach
          </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-warning my-2" value="Ajouter" name="ajouter">
    </div>
</form>
</div>
</div>
<div class="container mt-2">
<hr>
    <h2>Toutes les directions :</h2>
<hr>
<table class="table table-dark table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Type</th>
        <th>quota_pfe</th>
        <th>quota_im</th>
        <th>école</th>
        <th>Modification</th>
        <th>Supression</th>
    </tr>    
    
@foreach ($affectations as $affectation)
      @if($affectation->type == "direction")

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
    @endif
@endforeach
      
</table>
</div>
<br>
<br>