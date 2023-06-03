@extends('layouts.app')
@section('content')

<div class="container">
    <div>
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/Logo.png')}}" class="col-md-4  offset-md-4 mb-5">
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="text-center">Bem vindos! A principal função deste site é fazer o registro e armazenamento de seus contatos pessoais, basicamente uma agenda telefônica eletrônica.</h5>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="card border-dark mb-3">
            <div class="card-header row justify-content-center">
                <h4 class="text-center mt-1 mb-1">Duvidas gerais.</h4>
            </div>
            <div class="card-body">
                <ul>
                    <li>Para acessar sua pagina de contatos basta clicar no botão abaixo: <b>Meus Contatos</b></li>
                    <li>Para adicionar um novo contato a sua agenda de contatos, através da pagina de contatos, basta clicar no botão: <b>Adicionar.</b></li>
                    <li>Para editar/excluir um contato de sua agenda, através pagina de contatos, basta clicar no botão: <b>Editar ou Excluir.</b> Para que a função solicitada seja executada!</li>
                    <li>Caso deseja buscar por um contato especifico em sua agenda telefônica, basta digitar o <b>(Nome/Sobrenome/Telefone ou E-mail)</b> do contato desejado na barra de busca que está localizada em sua pagina de contatos!</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto">
    <div class="row justify-content-center">
        <div class="col-md-2 mt-4">
            <a type="button" class="btn btn-secondary" href="{{ route('contato.index') }}">
                <i class="fa-2x fa-regular fa-address-book align-middle"></i> Meus Contatos
            </a>
        </div>
    </div>
</div>
@endsection
@section('scripts')


@endsection