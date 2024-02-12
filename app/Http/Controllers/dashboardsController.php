<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Boletos;
use App\Models\Chargebacks;
use App\Models\Pedidos;
use App\Models\Pixs;
use App\Models\Tickets;
use App\Models\Vendas;
use App\Models\User;


class dashboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $boletos = Boletos::count();
        $chargebacks = Chargebacks::count();
        $pedidos = Pedidos::count();
        $pixs = Pixs::count();
        $tickets = Tickets::count();
        $vendas = Vendas::count();

        $usuarios = User::selectRaw('LEFT(name, 1) as primeiro_caractere')->first();
        //return $usuarios;


        return view('dashboard/dashboard', compact('boletos','chargebacks','pedidos','pixs','tickets','vendas','usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
