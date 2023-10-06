@extends('base')
@section('title',"Liste locataires | " . config('app.name'))
@section('content')

<div class="container mt-5 py-5">
    <div class="row text-center">
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <div class="row">
        <div class="col-12 text-center">
            <a href="{{route('Formulaire')}}" class="btn btn-info float-end">Ajouter</a>
        </div>
    </div>
        <table class="table border">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NOMS PRENOMS</th>
                    <th>EMAIL</th>
                    <th>TELEPHONE</th>
                    <th>Profession</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <!-- la boucle de selection des elements de la base de donnees -->
                @php
                    $ide = 1;
                @endphp
                @foreach($locataires as $local)
                <tr>
                    <td>{{$ide}}</td>
                    <td>{{$local->NomPrenom}}</td>
                    <td>{{$local->Email}}</td>
                    <td>{{$local->Telephone}}</td>
                    <td>{{$local->Profession}}</td>
                    <td>
                        <a href="/modifier/{{$local->id}}" class="btn btn-success">modifier</a>
                        <a href="/supprimer/{{$local->id}}" class="btn btn-danger">supprimer</a>
                    </td>
                </tr>
                @php
                    $ide+=1;
                @endphp
                @endforeach
            </tbody>
        </table>
       
    </div>
</div>