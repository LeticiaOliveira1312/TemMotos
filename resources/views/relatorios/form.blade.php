@extends('layout.main')
@section('title', 'Clientes')
@section('content')
    
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ isset($data) ? 'Atualizar' : 'Criar' }} Relatórios</h4>
                <p class="card-title-desc">Emitir Relatórios</p>
                <form action="{{ isset($data) ? route('clientes.update', $data->id) : route('clientes.store') }}" method="POST">
                    @csrf
                    @if (isset($data))
                        @method('PUT')
                    @endif
                    <div class="container">
    <div class="header">4. RELATÓRIOS</div>

    <div class="tabs">
      <div class="tab">Relatório Rápido</div>
      <div class="tab">Relatório Sintético</div>
      <div class="tab">Relatório de Produtos</div>
    </div>

    <div class="report-section">
      <h2>RELATÓRIOS DISPONÍVEIS</h2>
      <div class="report-buttons">
        <a href="#" class="report-button">RELATÓRIO GERAL</a>
        <a href="#" class="report-button">RELATÓRIO SINTÉTICO</a>
      </div>
    </div>
  </div>
                     
                    <div class="row mt-4">
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">{{ isset($data) ? 'Atualizar' : 'Criar' }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection