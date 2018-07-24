@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Produto') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('atualizar.produto',$produto) }}" aria-label="{{ __('Editar Produto') }}" class="form-group" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{$produto->name}}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>

                                <div class="col-md-6">
                                    <input id="preco" type="number" class="form-control" name="preco" value="{{$produto->preco}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                                <div class="col-md-6">
                                    <select id="input" class="form-control" name="categoria">

                                        @foreach ($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="imagem" class="col-md-4 col-form-label text-md-right">{{ __('Imagem') }}</label>

                                <div class="col-md-6">
                                    <output style="border: 0px" class="form-control" name="nome"><img style="width: 200px; heigth: 200px;" src="{{asset("storage/images/$produto->photo")}}" alt=""></output>
                                    <input id="imagem" type="file" class="form-control" name="imagem"  accept="image/*" autofocus>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Editar') }}
                                    </button>

                                    <a class="btn btn-danger" href="{{URL::previous()}}">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
