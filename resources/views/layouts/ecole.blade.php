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
        Modifier Ecole :
    @else                       
        Ajouter une nouvelle ecole :
    @endif</h2> 
    <hr>
    <div id="div">
    @if(request()->has('modifier'))
    <form action="{{ route('ecole.update',$ecole->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom" autocomplete="off" value="{{ $ecole->nom }}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
            <button type="button" class="btn btn-danger" onclick="goBack()">Annuler</button>
        </div>    
    </form>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    @else
        <form action="{{ route('ecole.store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <h5>Nom :</h5>
                <input type="text" class="form-control" name="nom" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning my-2" value="Ajouter" name="ajouter">
            </div>    
        </form>
    @endif
    </div>
    
    <hr>
    <h3>Listes des écoles :</h3>
    <hr>

<table class="table table-dark table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Modification</th>
        <th>Supression</th>
    </tr>    
@foreach ($ecoles as $ecole)
    <tr>
        <td>{{$ecole->id}}</td>
        <td>{{$ecole->nom}}</td>
        <td>
            <form action ="{{route('ecole.edit', $ecole->id)}}" method="GET">
                @csrf
               <button class="btn btn-success" name="modifier">Modifier</button>
                </form> 
            </td>
            <td>       
            <form action ="{{route('ecole.destroy', $ecole->id)}}" method="POST">
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