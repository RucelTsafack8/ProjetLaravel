@extends('base')
@section('title',"Inscription | " . config('app.name'))
@section('content')
   <div class="container d-flex w-100 justify-content-center align-items-center ms-5 py-5 mt-5">
   <div class="col-1 py-2 ms-5 mt-1  fixed-top mt-5 py-5">
        <a  class="text-warning float-start bg-success btn " href="/home"><i class="bi bi-arrow-left-short icon-link-hover"></i></a>

    </div>
        <form class="row g-3 needs-validation w-50 bg-secondary">
            <h1 class="text-info text-center text-uppercase">enregistrement</h1>
            <div class="row">
                <!-- entrer le nom et prenoms -->
                <div class="mt-3">
                    <label for="NOMS" class="form-label"> Noms et Prenoms </label>
                    <input type="text" name="NOMS" id="NOMS" class="form-control" placeholder="nom prenom">
                </div>
                <!-- l'email de la personne -->
               
                <!-- le numero de telephone -->
                <div class="mt-3">
                    <label for="PHONE" class="form-label"> NUMERO DE TELEPHONE </label>
                    <input type="number" name="PHONE" id="PHONE" class="form-control" placeholder="237656317630">
                </div>
                <!-- la profession de la personne -->
                <div class="mt-3">
                    <label for="PROFESSION" class="form-label"> Professions</label>
                    <input type="text" name="PROFESSION" id="PROFESSION" class="form-control" placeholder="nom prenom">
                </div>
                <!-- la date d'entrer possible -->
                <div class="mt-3">
                    <label for="DATE_ENTER" class="form-label"> Date entrer possible </label>
                    <input type="date" name="DATE_ENTER" id="DATE_ENTER" class="form-control" >
                </div>
                <!-- la date de sortie possible -->
                <div class="mt-3">
                    <label for="DATE_OUT" class="form-label">Date de sortie Possible</label>
                    <input type="date" name="DATE_OUT" id="DATE_OUT" class="form-control" >
                </div>
                <!-- le nombre de personne qui doivent resté durant le sejour -->
                <div class="mt-3">
                    <label for="NBRE_PERSON" class="form-label"> NOMBRE DE PERSONNE </label>
                    <input type="number" name="NBRE_PERSON" id="NBRE_PERSON" class="form-control" placeholder="001">
                </div>
            </div>
            <div class="row mt-3 py-3">
                <div class="col-12 d-flex w-100 justify-content-center text-align-center">
                    <button class="btn btn-info w-25" type="submit">Validé</button>
                </div>
            </div>
            
        </form>
   </div>
@endsection