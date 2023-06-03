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
                <div class="card-header">{{ __('Adicionar novo contato') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('contato.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control">
                            <div class="row justify-content-center">
                                @if($errors->has('nome'))
                                {{ $errors->first('nome') }}
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Idade</label>
                            <input type="number" name="idade" class="form-control">
                            <div class="row justify-content-center">
                                @if($errors->has('idade'))
                                {{ $errors->first('idade') }}
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telefone</label>
                            <input type="number" name="telefone" class="form-control">
                            <div class="row justify-content-center">
                                @if($errors->has('telefone'))
                                {{ $errors->first('telefone') }}
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control">
                            <div class="row justify-content-center">
                                @if($errors->has('email'))
                                {{ $errors->first('email') }}
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Cidade</label>
                            <input type="text" name="cidade" class="form-control">
                            <div class="row justify-content-center">
                                @if($errors->has('cidade'))
                                {{ $errors->first('cidade') }}
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">UF</label>
                            <input type="text" name="estado" class="form-control">
                            <div class="row justify-content-center">
                                @if($errors->has('estado'))
                                {{ $errors->first('estado') }}
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center" >
                                <button type="submit" class="btn btn-secondary" style="width: 25%;" >Salvar</button>
                            </div>
                        </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection