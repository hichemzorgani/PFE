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
<nav class="navbar navbar-expand navbar-light bg-dark">
    <div class="nav navbar-nav mr-auto">
        <li class="nav-item nav-link">
            <li class="nav-item nav-link">
                <a href="{{ route ('test.index') }}" class="nav-link text-white">Statistiques Stages</a>
        
            </li>

            <li class="nav-item nav-link">
                <a href="{{ route ('graphe.index') }}" class="nav-link text-white">Graphe de stages</a>
        
            </li>

        <li class="nav-item nav-link">
            <a href="{{ route ('search.index') }}" class="nav-link text-white">La recherche</a>
    
        </li>

        <li class="nav-item nav-link">
        <a href="{{ route ('stage.index') }}" class="nav-link active text-white">Gestion des stages</a>
            
        </li>
        
        <li class="nav-item nav-link">
        <a href="{{ route ('consulterstage.index') }}" class="nav-link text-white">Connecter en tant que (USER) </a>

        </li>
        <li class="nav-item nav-link">
            <a href="{{ route ('login.show') }}" class="nav-link text-white">Se déconnecter</a>
            
        </li>
    </div>
</nav>
</body>
</html>