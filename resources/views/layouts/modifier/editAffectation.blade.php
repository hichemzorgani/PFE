@include('partials.nav')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container mt-2">
    <hr>
    <h2>Modifier Affectation</h2>
    <hr>
  <form action="{{ route('affectation.update',$affectation->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" autocomplete="off" value="{{$affectation->nom}}">
    </div>
    <div class="form-group">
        <label>Type</label>
        <input type="text" class="form-control" name="type" autocomplete="off" value="{{$affectation->type}}">
    </div>
    <div class="form-group">
        <label>Quota projet fin d'étude</label>
        <input type="text" class="form-control" name="quota_pfe" autocomplete="off" value="{{$affectation->quota_pfe}}">
    </div>
    <div class="form-group">
        <label>Quota immersion</label>
        <input type="text" class="form-control" name="quota_im" autocomplete="off" value="{{$affectation->quota_im}}">
    </div>
    <div class="form-group">
        <label>ID école</label>
        <input type="text" class="form-control" name="structure_iap_id" autocomplete="off" value="{{$affectation->structure_iap_id}}">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
    </div>
</form>
</div>
</body>
</html>