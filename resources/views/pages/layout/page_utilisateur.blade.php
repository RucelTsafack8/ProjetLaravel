@extends('base')

@section('title',"Page utilisateur | " . config('app.name'))

@section('content')

        <div class="col-1 py-2 ms-5 mt-1  fixed-top mt-5 py-5">
            <a  class="text-warning float-start bg-success btn " href="/home"><i class="bi bi-arrow-left-short icon-link-hover"></i></a>

        </div>
            <div class="container " style="margin-top: 140px;">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center text-info ">la page utilisateur</h1>
                        <h1 class="text-center text-info">
                           {{session('locataire')->NomPrenom}}
                        </h1>
                    </div>
                    <div class="col-12">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    @if(session('erreur'))
                        <div class="alert alert-success">
                            {{session('erreur')}}
                        </div>
                    @endif
                    </div>
                  
                </div>
            </div>
@endsection