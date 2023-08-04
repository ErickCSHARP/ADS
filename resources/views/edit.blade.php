@extends('base')
@section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Editar Produto</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('produtos.update', $produto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome produto:</strong>
                        <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control">
                        @error('nome')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Preço:</strong>
                        <input type="text" name="preco" value="{{ $produto->preco }}" class="form-control" placeholder="0,00">
                        @error('preco')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary ml-3">Salvar</button>
            </div>
        </form>
@endsection
