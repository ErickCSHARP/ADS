@extends('base')
@section('content')
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Produtos Cadastrados</h3>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('produtos.create') }}"> + Novo</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Preço</th>
                    <th width="280px">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nome }}</td>
                        <td>{{ $p->preco }}</td>
                        <td>
                            <form action="{{ route('produtos.destroy',$p->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('produtos.edit',$p->id) }}">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Apagar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
   
    </div>
@endsection
