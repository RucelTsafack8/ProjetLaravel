<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Laravel</title>
</head>
<body>
    <header>
        <div class="">
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('Acceuil')}}">Logo...</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-end me-3" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active fs-3" aria-current="page" href="{{route('Acceuil')}}">Acceuil</a>
                            <a class="nav-link  fs-3" href="{{route('formulaire')}}">Connexion</a>
                            
                        </div>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    
</body>
</html>