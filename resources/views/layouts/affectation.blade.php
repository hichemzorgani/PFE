@include('partials.nav')
<div class="container my-3" >
    @include('partials.flashbag')
</div>

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
    <h2>@if(request()->has('modifier'))
        Modifier structure d'affectation :
    @else                       
        Ajouter une nouvelle structure d'affectation :
    @endif</h2>
    <hr>
<div id="div"> 
    @if(request()->has('modifier'))
    <form action="{{ route('affectation.update',$affectation->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <h5>Séléctionner ID d'école :</h5>
            <!-- <input type="text" class="form-control" name="structure_iap_id" autocomplete="off" value="{$affectation->structure_iap_id}}"> -->
            <select class="form-control" name="structure_iap_id">
                @foreach($ecoles as $ecole)
                <option @if($ecole->id == $affectation->structure_iap_id) selected @endif>{{$ecole->id}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <h5>Séléctionner le Type :</h5>
               <!--<input type="text" class="form-control" name="type" autocomplete="off" value="{$affectation->type}}"> -->
               <select class="form-control" name="type">
                   <option name="type">direction</option>
                   <option name="type">département</option>
               </select>
        </div>
        <div class="form-group">
            <h5>Nom :</h5>
            <input type="text" class="form-control" name="nom" autocomplete="off" value="{{$affectation->nom}}">
        </div>
        <div class="form-group">
            <h5>Quota projet fin d'étude :</h5>
            <input type="text" class="form-control" name="quota_pfe" autocomplete="off" value="{{$affectation->quota_pfe}}">
        </div>
        <div class="form-group">
            <h5>Quota immersion :</h5>
            <input type="text" class="form-control" name="quota_im" autocomplete="off" value="{{$affectation->quota_im}}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
        </div>
    </form>
    {{--<form action="{{ route('affectation.update',$affectation->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <h5>Séléctionner le nom d'école :</h5>
        <!--<input type="text" class="form-control" name="structure_iap_id" autocomplete="off"> -->
        <select class="form-control" name="nom_ecole">
            @foreach ($ecoles as $ecole)
            <option @if(request()->has('modifier')) @if($ecole->id == $affectation->structure_iap_id) selected @endif @endif>{{$ecole->nom}}</option>
            @endforeach
          </select>
    </div>
    <br>
    <div class="form-group">
        <h5>Séléctionner le type :</h5>
        <select class="form-control" name="type">
            <option @if(request()->has('modifier')) @if($affectation->type == "direction") selected @endif @endif>direction</option>
            <option @if(request()->has('modifier')) @if($affectation->type == "département") selected @endif @endif>département</option>
          </select>    
    </div>
    <div class="form-group">
        <h5>Nom :</h5>
        <input type="text" class="form-control" name="nom" autocomplete="off" @if(request()->has('modifier')) value="{{$affectation->nom}}" @endif>
        @error('nom')
            <small class='text-danger'>{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <h5>Quota projet fin d'étude :</h5>
        <input type="text" class="form-control" name="quota_pfe" autocomplete="off" @if(request()->has('modifier')) value="{{$affectation->quota_pfe}}" @endif>
        @error('quota_pfe')
            <small class='text-danger'>{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <h5>Quota immersion :</h5>
        <input type="text" class="form-control" name="quota_im" autocomplete="off" @if(request()->has('modifier')) value="{{$affectation->quota_im}}" @endif>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
        <input type="submit" class="btn btn-danger" value="Annuler" name="modifier">
    </div>
</form>--}}
    @else
    <form action="{{ route('affectation.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <h5>Séléctionner le nom d'école :</h5>
        <!--<input type="text" class="form-control" name="structure_iap_id" autocomplete="off"> -->
        <select class="form-control" name="nom_ecole">
            @foreach ($ecoles as $ecole)
            <option>{{$ecole->nom}}</option>
            @endforeach
          </select>
    </div>
    <br>
    <div class="form-group">
        <h5>Séléctionner le type :</h5>
        <select class="form-control" name="type">
            <option>direction</option>
            <option>département</option>
          </select>    
    </div>
    <div class="form-group">
        <h5>Nom :</h5>
        <input type="text" class="form-control" name="nom" autocomplete="off">
        @error('nom')
            <small class='text-danger'>{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <h5>Quota projet fin d'étude :</h5>
        <input type="text" class="form-control" name="quota_pfe" autocomplete="off">
        @error('quota_pfe')
            <small class='text-danger'>{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <h5>Quota immersion :</h5>
        <input type="text" class="form-control" name="quota_im" autocomplete="off">
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
               <button class="btn btn-success" name="modifier">Modifier</button>
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
<br>
<br>