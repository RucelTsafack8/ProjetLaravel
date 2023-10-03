@extends('base')

@section('title',"Page utilisateur | " . config('app.name'))

@section('content')
    <div class="fixed-top " style="margin-top: 20px;">
        <nav class="navbar navbar-expand-lg mt-5 " style="background-color: #e3f2fd;">
                <div class="container-fluid">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse me-3" id="navbarNavAltMarkup">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="navbar-item">
                                <button type="button" class="btn btn-info position-relative" style=" margin-top: 7px; margin-right: 40px; ">
                                <i class="bi bi-envelope" ></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </button>
                            </li>
                            <li class="navbar-item">
                                <a class="nav-link  fs-3" href="{{route('Acceuil')}}">Deconnexion</a>

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
        <div class="col-1 py-2 ms-5 mt-1  fixed-top mt-5 py-5">
            <a  class="text-warning float-start bg-success btn " href="/home"><i class="bi bi-arrow-left-short icon-link-hover"></i></a>

        </div>
            <div class="container " style="margin-top: 140px;">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">la page utilisateur</h1>
                    </div>
                    <div class="col-12">
                    @if(session('status'))
                        <div class="alert alert-danger">
                            {{session('status')}}
                        </div>
                    @endif
                    </div>
                  
                    
                </div>
            </div>
@endsection