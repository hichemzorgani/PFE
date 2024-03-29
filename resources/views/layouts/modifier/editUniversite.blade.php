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
    <h2>Modifier Université</h2>
    <hr>
  <form action="{{ route('universite.update',$universite->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" autocomplete="off" value="{{$universite->nom}}">
    </div>
    <div class="form-group">
        <label>Wilaya</label>
        <input type="text" class="form-control" name="wilaya" autocomplete="off" value="{{$universite->wilaya}}">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
    </div>    
</form>
</div>
</body>
</html>