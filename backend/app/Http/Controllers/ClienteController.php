<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Emulando base de dados de clientes
    private $clientes = [
        ['id'=>1,'nome'=>'Matheus'],
        ['id'=>2,'nome'=>'Carla'],
        ['id'=>3,'nome'=>'Luccas'],
        ['id'=>4,'nome'=>'Claudenice'],
        ['id'=>5,'nome'=>'Eduardo'],
    ];

    public function __construct()
    {
        if (!session()->has('clientes')) {
            session(['clientes' => $this->clientes]);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = session('clientes');
        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        $id = empty($clientes) ? 1 : end($clientes)['id'] + 1;
        $dados = ['id' => $id, 'nome' => $request->nome];
        $clientes[] = $dados;
        session(['clientes' => $clientes]);

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];

        session(['clientes' => $clientes]);
        return view('clientes.info', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];

        return view('clientes.edit', compact(['cliente']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clientes = session('clientes');
        $clientes[$id - 1]['nome'] = $request->nome;

        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }       

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientes = session('clientes'); 
        $index = $this->getIndex($id, $clientes);

        array_splice($clientes, $index, 1);
        session(['clientes' => $clientes]);
    
        return redirect()->route('clientes.index');

    }

    private function getIndex($id, $clientes) {
        $clientes = session('clientes');
        $ids = array_column($clientes, 'id');  
        $index = array_search($id, $ids);

        return $index;
    }
    
}
