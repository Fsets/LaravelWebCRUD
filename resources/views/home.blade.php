@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @include('usuario.tablaUsuarios') <!-- hay q incluir el yield para llamar hay q estar logueados para  que funcione sino da error de variable users-->
                
            </div>

        </div>

    </div>
</div>
@endsection

@section('scripts')
<script>
    var url_list_usuarios = "{!! url('list_usuarios') !!}";
</script>

<script src="{{url('assets/js/table.js')}}"></script>
@endsection
