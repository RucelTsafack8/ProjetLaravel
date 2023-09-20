@extends('base')


@section('content')

        <div class="relative mt-4 py-4">
           <h1 class="text-info text-uppercase">Initiation Laravel</h1>
           <h4 class="text-center text-uppercase"> il est a present <?= date('h:i:s A')?>.</h4>
           <h4  class="text-center text-capitalize"> il est a present {{date('h:i:s A')}}....et il fait du beau temps ici au pays</h4>
        </div>
        <script>

        </script>
@endsection

