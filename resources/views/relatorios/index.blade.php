@extends('layout.main')
@section('title', 'relatorios')
@section('content')

    <div class="col-12">
        <div class="card">
            <div class="container">
                 <h1>Relatório Geral</h1>
                 <p>Bem-vindo, área de relatórios</p>
            </div>

            <div class="d-flex">
            <button 
                type="button" 
                class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2" 
                style="width: 300px; height: 90px; font-size: 18px;" 
                onclick="showMessageAndGoBack()">
                Relatório Geral
            </button>

            <script>
                function showMessageAndGoBack() {
                    alert('O relatório está sendo construído, aguarde...');
                    window.location = '{{ route("relatorios.index") }}';
                }
            </script>

            <button 
                type="button" 
                class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2" 
                style="width: 300px; height: 90px; font-size: 18px;" 
                onclick="showMessageAndGoBack()">
                Relatório Geral Clientes
            </button>
            <script>
                function showMessageAndGoBack() {
                    alert('O relatório está sendo construído, aguarde...');
                    window.location = '{{ route("relatorios.index") }}';
                }
            </script>
                        
            <button 
                type="button" 
                class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2" 
                style="width: 300px; height: 90px; font-size: 18px;" 
                onclick="showMessageAndGoBack()">
                Relatório Geral Produtos
            </button>
            <script>
                function showMessageAndGoBack() {
                    alert('O relatório está sendo construído, aguarde...');
                    window.location = '{{ route("relatorios.index") }}';
                }
            </script>

            </div>
            
            <div class="d-flex">
            <button 
                type="button" 
                class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2" 
                style="width: 300px; height: 90px; font-size: 18px;" 
                onclick="showMessageAndGoBack()">
                Relatório Geral Serviços
            </button>
            <script>
                function showMessageAndGoBack() {
                    alert('O relatório está sendo construído, aguarde...');
                    window.location = '{{ route("relatorios.index") }}';
                }
            </script>

            <button 
                type="button" 
                class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2" 
                style="width: 300px; height: 90px; font-size: 18px;" 
                onclick="showMessageAndGoBack()">
                Relatório Geral Fornecedores
            </button>
            <script>
                function showMessageAndGoBack() {
                    alert('O relatório está sendo construído, aguarde...');
                    window.location = '{{ route("relatorios.index") }}';
                }
            </script>
            <button 
                type="button" 
                class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2" 
                style="width: 300px; height: 90px; font-size: 18px;" 
                onclick="showMessageAndGoBack()">
                Relatório Geral Pedidos
            </button>
            <script>
                function showMessageAndGoBack() {
                    alert('O relatório está sendo construído, aguarde...');
                    window.location = '{{ route("relatorios.index") }}';
                }
            </script>
           </div>

@endsection