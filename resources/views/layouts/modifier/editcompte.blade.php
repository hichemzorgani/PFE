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
    <h2>Modifier compte</h2>
    <hr>
  <form action="{{ route('compte.update',$compte->id) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <label>Utilisateur</label>
        <input type="text" class="form-control" name="utilisateur" autocomplete="off" value="{{$compte->utilisateur}}">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" autocomplete="off" value="{{$compte->password}}">
    </div>
    <div class="form-group">
        <label>Type de compte</label>
        <input type="text" class="form-control" name="type_compte" autocomplete="off" value="{{$compte->type_compte}}">
    </div>
    <div class="form-group">
        <label>ID école</label>
        <input type="text" class="form-control" name="structure_iap_id" autocomplete="off" value="{{$compte->structure_iap_id}}">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Enregistrer" name="modifier">
    </div>
</form>
</div>
</body>
</html>



