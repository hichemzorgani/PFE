@include('partials.nav')
<div class="container mt-2">
    <hr>
        <h2>Tous les Stages</h2>
    <hr>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>theme</th>
            <th>type_stage</th>
            <th>date_debut</th>
            <th>date_fin</th>
            <th>niveau</th>
            <th>structure_affectation_id </th>
            <th>encadrant_id</th>
            <th>université_id</th>
            <th>spécialité_id </th>
        </tr>  
        @foreach ($stages as $stage)
    <tr>
        <td>{{$stage->id}}</td>
        <td>{{$stage->theme}}</td>
        <td>{{$stage->type_stage}}</td>
        <td>{{$stage->date_debut}}</td>
        <td>{{$stage->date_fin}}</td>
        <td>{{$stage->niveau}}</td>
        <td>{{$stage->structure_affectation_id}}</td>
        <td>{{$stage->encadrant_id}}</td>
        <td>{{$stage->université_id}}</td>
        <td>{{$stage->spécialité_id}}</td>
    
    </tr> 
@endforeach  
    </table>
</div>