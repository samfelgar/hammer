<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ClientController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Client::class, 'client');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Client $client
     * @return \Illuminate\View\View
     */
    public function show(Client $client)
    {
        return view('clients.show', ['client' => $client]);
    }

    public function dashboard(Request $request)
    {
        $client = $request->user();
        $this->authorize('dashboard', $client);
        return view('clients.dashboard', [
            'client' => $client,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Client $client
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, Client $client)
    {
        $this->authorize('update', $client);
        $data = $request->validate([
            'password' => 'nullable|confirmed',
            'nome' => 'required',
            'email' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'nascimento' => ['required', 'date_format:d/m/Y'],
        ]);
        $data['password'] = Hash::make($data['password']);
        $data['nascimento'] = \DateTime::createFromFormat('d/m/Y', $data['nascimento']);

        $client->fill($data)->save();

        return redirect()->route('clients.show', [$client])->with('success', 'O cliente foi atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function admin(Client $client)
    {
        return view('admin.cliente', ['cliente' => $client]);
    }
}
