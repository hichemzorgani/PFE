
@include('partials.nav')
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
<a href="/compte/create" class="btn btn-primary">+ Nouveau Compte</a> 
</div>









