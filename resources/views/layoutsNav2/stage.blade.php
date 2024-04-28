@include('partials.nav2')
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
        <td>{{$stage->start_date}}</td>
        <td>{{$stage->end_date}}</td>
        <td>{{$stage->niveau}}</td>
        <td>{{$stage->structuresAffectation_id}}</td>
        <td>{{$stage->encadrant->nom}}</td>
        <td>{{$stage->etablissement_id}}</td>
        <td>{{$stage->speciality_id}}</td>
    
    </tr> 
@endforeach  
    </table>
</div>