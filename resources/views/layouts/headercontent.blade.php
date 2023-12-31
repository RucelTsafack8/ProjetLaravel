<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Laravel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <div class="fixed-top">
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('Enregistrement_Admin')}}">E.T.I.N.A</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse me-3" id="navbarNavAltMarkup">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="navbar-item">
                                <a class="nav-link active fs-3" aria-current="page" href="{{route('Acceuil')}}">Acceuil</a>

                            </li>
                            <li class="navbar-item">
                                @if(session('adminisrateur'))
                                    <a class="nav-link  fs-3" href="{{route('Deconnexionadmin')}}">Logout</a>
                                @else
                                    <a class="nav-link  fs-3" href="{{route('Deconnexion')}}">Deconnexion</a>
                                @endif
                            </li> 
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    
</body>
</html>