@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="width:90%">
            <div>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/Logo.png')}}" class="col-md-4  offset-md-4 mb-5">
                </a>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Meus Contatos') }}</div>

                <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>Cidade</th>
                                <th>UF</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$contato)

                            <tr>
                                <td>{{$contato->nome}}</td>
                                <td>{{$contato->idade}}</td>
                                <td>{{$contato->telefone}}</td>
                                <td>{{$contato->email}}</td>
                                <td>{{$contato->cidade}}</td>
                                <td>{{$contato->estado}}</td>
                                <td>
                                    <a type="button" href="{{ route('contato.edit', $contato->id) }}" class="btn btn-outline-secondary">Editar</a>
                                    <a type="button" href="{{ route('contato.delete', $contato->id) }}" class="btn btn-outline-danger">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a type="button" class="btn btn-outline-secondary" href="{{ route('contato.create') }}">Adicionar</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                    url: "{{asset('./js/datatables-br.json')}}"
                },
                dom: '<"toolbar">frtip',
            });
        });
    </script>
    @endsection