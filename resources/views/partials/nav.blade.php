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
                <a href="{{ route ('ecole.index') }}" class="nav-link active text-white">Gestion des écoles</a>
            </li>
            <li class="nav-item nav-link">
                <a href="{{ route ('affectation.index') }}" class="nav-link text-white">Gestion des directions </a>
            </li>
            <li class="nav-item nav-link">
                <a href="{{ route ('affectations.index') }}" class="nav-link text-white">Gestion des départements</a>
            </li>
            <li class="nav-item nav-link">
                <a href="{{ route ('encadrant.index') }}" class="nav-link text-white">Gestion des encadrants</a>
            </li>
            <li class="nav-item nav-link">
                <a href="{{ route ('universite.index') }}" class="nav-link text-white">Gestion des universités</a>
            </li>
            <li class="nav-item nav-link">
                <a href="{{ route ('compte.index') }}" class="nav-link text-white">Gestion des comptes</a>
            </li>
            <li class="nav-item nav-link">
                <a href="{{ route ('statistique.index') }}" class="nav-link text-white">Consulter les Statistiques</a>
            </li>
            <li class="nav-item nav-link">
                <a href="{{ route ('statistique2.index') }}" class="nav-link text-white">Connecter en tant que (ADMIN)</a>
            </li>
            <li class="nav-item nav-link">
                <a href="{{ route ('login.show') }}" class="nav-link text-white">Se déconnecter</a>
            </li>  
        </div>
    </nav>
</body>
</html>









