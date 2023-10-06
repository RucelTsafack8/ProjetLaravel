@extends('base')
@section('title',"Connexion | " . config('app.name'))
@section('content')
@session_start
<div class="container">
       <div class="row mt-5 py-5  justify-content-center align-items-center w-100">
        <div class="col-1 py-2 ms-5 mt-1  fixed-top mt-5 py-5">
            <a  class="text-warning float-start bg-success btn " href="/home"><i class="bi bi-arrow-left-short icon-link-hover"></i></a>

        </div> 
        <form action="/connect/admin" method="post" class="w-50 bg-secondary mt-3 py-4">
            @csrf
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                @if(session('erreur'))
                    <div class="alert alert-danger">
                        {{session('erreur')}}
                    </div>
                @endif
                <h1 class="text-center text-info text-uppercase">connexion</h1>
                <h5 class="text-center text-danger mt-4"></h5>
                <div class="mt-3">
                  
                </div>
                <div class="mt-3">
                    <label for="Email" class="form-label">EMAIL DE CONNEXION</label>
                    <input type="email" name="Email" id="Email" class="form-control" value="{{old('Email')}}">
                    <p class="text-center text-danger"></p>
                </div>
                
                <div class="mt-3">
                    <label for="MOT_DE_PASSE" class="form-label">MOT DE PASSE</label>
                    
                  
                    <input type="password" name="MotDePasse" id="MOT_DE_PASSE" class="form-control">
                    <p class="text-center text-danger"></p>
                </div>
                
                <div class="mt-3 d-flex justify-content-center  justify-content-center align-items-center w-100">
                    <input type="submit" value="valider" class="btn btn-success w-50" name="envoi">
                </div>
                <div class="row">
                    <div class="col-6 float-start">
                        <a href="{{route('modifier_mot_de_passe')}}" class="text-hover-info">mot de passe oublier</a>
                    </div>
                    <div class="col-6 float-end">
                        <a href="/formulaire">s'enregistrer</a>

                    </div>
                </div>
            </form>
       </div>
    </div>   
@endsection