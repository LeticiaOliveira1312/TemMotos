@extends('layout.main')
@section('title', 'Fornecedores')
@section('content')
    
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }} fornecedores</h4>
                <p class="card-title-desc">Criar ou editar Fornecedores</p>
                <form action="{{ isset($data) ? route('fornecedores.update', $data->id) : route('fornecedores.store') }}" method="POST">
                    @csrf
                    @if (isset($data))
                        @method('PUT')
                    @endif
                    <div class="row">
                        <div class="col-md-8">
                            <label class="col-form-label">Razão Social</label>
                            <input class="form-control" name="name" id="name" value="{{ $data->name ?? '' }}"  type="text" placeholder="Ex: José Maria">
                        </div>
                        <div class="col-md-8">
                            <label class="col-form-label">Nome Fantasia</label>
                            <input class="form-control" name="namef" id="namef" value="{{ $data->namef ?? '' }}"  type="text" placeholder="Ex: Empresa top">
                        </div>
                        <div class="col-md-4">
                            <label class="col-form-label">CNPJ</label>
                            <input class="form-control" name="cnpj" id="cnpj" value="{{ $data->cnpj ?? '' }}" type="text" placeholder="Ex: 00.000.000/0000-00" title="Digite um CNPJ no formato 00.000.000/0000-00">
                        </div>
                        <div class="col-md-2">
                            <label class="col-form-label">Cep</label>
                            <input class="form-control" name="zipCode" id="zipCode" value="{{ $data->zipCode ?? '' }}" type="text" placeholder="37130000">
                        </div>
                        <div class="col-md-4">
                            <label class="col-form-label">Rua</label>
                            <input class="form-control" name="address" id="address" value="{{ $data->address ?? '' }}" type="text" placeholder="Ex: Av. Brasil">
                        </div>
                        <div class="col-md-2">
                            <label class="col-form-label">Número</label>
                            <input class="form-control" name="number" id="number" value="{{ $data->number ?? '' }}" type="text" placeholder="Ex: 0000">
                        </div>
                        <div class="col-md-4">
                            <label class="col-form-label">Bairro</label>
                            <input class="form-control" name="neighborhood" id="neighborhood" value="{{ $data->neighborhood ?? '' }}" type="text" placeholder="Ex: Centro">
                        </div>
                        <div class="col-md-8">
                            <label class="col-form-label">E-mail</label>
                            <input class="form-control" name="email" id="email" value="{{ $data->email ?? '' }}" type="email" placeholder="Ex: josedasilva@email.com">
                        </div>
                        <div class="col-md-4">
                            <label class="col-form-label">Telefone</label>
                            <input class="form-control" name="phone" id="phone" value="{{ $data->phone ?? '' }}" maxlength="15" oninput="mascaraCelular(this)" name="telefone" type="phone" placeholder="Ex: (00) 00000-0000">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">{{ isset($data) ? 'Atualizar' : 'Cadastrar' }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection