@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/Logo.png')}}" class="col-md-4  offset-md-4 mb-5">
                </a>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Editar contato') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('contato.save', $contato->id) }}">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome</label>
                            <input name="nome" value="{{$contato->nome}}" class="form-control">
                            @if($errors->has('nome'))
                            {{ $errors->first('nome') }}
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Idade</label>
                            <input name="idade" value="{{$contato->idade}}" class="form-control">
                            @if($errors->has('idade'))
                            {{ $errors->first('idade') }}
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telefone</label>
                            <input type="number" name="telefone" value="{{$contato->telefone}}" class="form-control">
                            @if($errors->has('telefone'))
                            {{ $errors->first('telefone') }}
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" name="email" value="{{$contato->email}}" class="form-control">
                            @if($errors->has('email'))
                            {{ $errors->first('email') }}
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Cidade</label>
                            <input name="cidade" value="{{$contato->cidade}}" class="form-control">
                            @if($errors->has('cidade'))
                            {{ $errors->first('cidade') }}
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Estado</label>
                            <input name="estado" value="{{$contato->estado}}" class="form-control">
                            @if($errors->has('estado'))
                            {{ $errors->first('estado') }}
                            @endif
                        </div>
                        <button type="submit" class="btn btn-secondary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection