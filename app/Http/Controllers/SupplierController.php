<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $fornecedores = Supplier::all();

        return view('fornecedores.index', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores.form');
    }

    public function edit($id)
    {
        $data = Supplier::findOrFail($id);

        return view('fornecedores.form', compact('data'));
    }

    public function store(Request $request)
    {
        Supplier::create($request->validate([
            'name' => 'required|string|max:255',
            'namef' => 'required|string|max:255',
            'cnpj' => 'nullable|string',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'zipCode' => 'nullable|string|max:10',
            'address' => 'nullable|string|max:255',
            'number' => 'nullable|string|max:10',
            'neighborhood' => 'nullable|string|max:255',
        ]));

        return redirect()->route('fornecedores.index');
    }


    public function update(Request $request, $id)
    {
        $fornecedores = Supplier::findOrFail($id);
        $fornecedores->update($request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'nullable|string',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'zipCode' => 'nullable|string|max:10',
            'address' => 'nullable|string|max:255',
            'number' => 'nullable|string|max:10',
            'neighborhood' => 'nullable|string|max:255',
        ]));

        return redirect()->route('fornecedores.index')->with('success', 'Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $fornecedores = Supplier::findOrFail($id);
        $fornecedores->delete();  

        return redirect()->route('fornecedores.index')->with('success', 'Deletado com sucesso!');
    }
}

