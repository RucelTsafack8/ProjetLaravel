@extends('base')
@section('title',"Acceuil | " .config('app.name'))

@section('content')

      <div class="container ms-5 py-5 mt-5 ">
        <div class="row">
                <div class="col-12">
                        <h1 class="text-center text-uppercase">bienvenue sur notre systeme de gestion de la cite <span class="text-light bg-dark hover:text-primary">E.T.I.N.A</span></h1>
                </div>
                <div class="col-12">
                        <h4 class="text-center text-uppercase text-info">veuillez vous connectez pour poursuivre votre gestion de la maison </h4>
                </div>
                
                <div class="col-12  d-flex justify-content-center align-items-center w-100 mt-3 py-4">
                        <a href="{{route('Connexion')}}" class="w-50 btn btn-outline-warning text-uppercase">se connecter</a>
                </div>
        </div>
      </div>
@endsection

