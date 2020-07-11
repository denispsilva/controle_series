@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection


@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col col-8">
                <div class="form-group">
                    <label for="nome">Nome da Série</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>
            </div>

            <div class="col col-2">
                <div class="form-group">
                    <label for="qtd_temporadas">Nº de Temporadas</label>
                    <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas">
                </div>
            </div>

            <div class="col col-2">
                <div class="form-group">
                    <label for="ep_por_temporada">Nº de Episódios</label>
                    <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">
                </div>
            </div>
        </div>

        <button class="btn btn-primary mt-3">Adicionar</button>
    </form>
@endsection