@extends('layout.main')
@section('title', 'Dashboard')
@section('content')
    <div class="container"> <!-- Adiciona um container para alinhar tudo -->
        <!-- Primeira Linha: Dois Cards -->
        <div class="row">
            <!-- Primeiro Card -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-user-circle text-primary" style="font-size: 24px;"></i>
                            Usuários
                           
</h4>
                        <p class="text-muted">Usuários logados: <strong>{{ $activeUsers }}</strong></p>

                    </div>
                </div>
            </div>

            <!-- Segundo Card -->
            <div class="col-md-6"> <!-- Outra coluna que ocupa a metade da largura -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-box text-success" style="font-size: 24px;"></i>
                                Pedidos
                            </h4>
                            <p class="card-title-desc">Quantidade total de pedidos: <strong>{{ $totalPedidos }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>


        <!-- Segunda Linha: Dois Novos Cards -->
        <div class="row mt-4"> <!-- mt-4 adiciona margem acima da linha -->
                <!-- Terceiro Card -->
                <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-chart-bar text-success" style="font-size: 24px;"></i>
                                Relatórios
                        </h4>
                        <p class="card-title-desc"> Em construção
                        
                    </div>
                </div>
            </div>    
           <!-- Quarto Card -->
           <div class="col-md-6"> <!-- Ocupa metade da largura na tela média ou maior -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-users text-primary" style="font-size: 24px;"></i>
                            Clientes
                        </h4>
                        <p class="card-title-desc">Quantidade total de clientes cadastrados: <strong>{{ $totalClientes }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection