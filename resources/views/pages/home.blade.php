@extends('base')
@section('title',"Acceuil | " .config('app.name'))

@section('content')

        <div class="relative mt-4 py-4 flex">
           <h1 class="text-info text-uppercase text-center">Initiation Laravel</h1>
           <h2 class="text-center">La formation en programmation web et mobile chez 3IA_SIR_TECH</h2>
           <p class=" justify-content-center align-items-center"><img src="{{asset('/images\Image3ia2.png')}}" alt="logo 3ia" style="width:200px;heigth:185px;"></p>
           <h4 class="text-center text-lowercase"> il est a present <?= date('h:i:s A')?>.</h4>
           <h4  class="text-center text-capitalize"> il est a present {{date('h:i:s A')}}....et il fait du beau temps ici au pays</h4>
        </div>
        <script>

        </script>
@endsection

