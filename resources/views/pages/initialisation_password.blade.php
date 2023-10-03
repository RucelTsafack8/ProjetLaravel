@extends('base')
@section('title',"Initialisation mot de passe | " . config('app.name'))
@section('content')

<div class="container">
    <div class="row mt-5 py-5 justify-content-center align-items-center w-100">
    <div class="col-1 py-2 ms-5 mt-1  fixed-top mt-5 py-5">
        <a  class="text-warning float-start bg-success btn " href="/connexion"><i class="bi bi-arrow-left-short icon-link-hover"></i></a>

    </div>
        <div class="col-12 w-50 bg-secondary">
            <div class="mt-5 py-5">
                <form action="" class="row">
                    <label for="EMAIL" class="form-label text-center">ENTRER VOTRE EMAIL D'ENREGISTREMENT </label>
                    <input type="email" name="EMAIL" id="" class="form-control" placeholder="nomsprenom@gmail.com">
                <div class="col-12 d-flex w-100 justify-content-center text-align-center">
                    <button class="btn btn-info w-25" type="submit">Validé</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection