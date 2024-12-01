<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    //
    
    public function index()
    {
        // Conta o total de pedidos, usuários ativos e clientes cadastrados
        $totalPedidos = $this->getTotalPedidos();
        $activeUsers = $this->getActiveUsers();
        $totalClientes = $this->getTotalClientes(); // Contando os clientes

        // Passando as variáveis para a view
        return view('home.index', compact('totalPedidos', 'activeUsers', 'totalClientes'));
    }

    private function getTotalPedidos()
    {
        return Order::count(); // Conta o número total de pedidos no sistema
    }

    private function getActiveUsers()
    {
        return DB::table('sessions')
            ->whereNotNull('user_id')
            ->distinct('user_id')
            ->count('user_id'); // Conta o número de usuários ativos
    }
    private function getTotalClientes()
    {
        return Client::count(); // Conta o número total de clientes cadastrados
    }
}