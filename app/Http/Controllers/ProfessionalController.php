<?php

namespace App\Http\Controllers;

use App\Contracts\HasPhoneInterface;
use App\Http\Requests\StoreProfessional;
use App\Professional;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class ProfessionalController extends Controller
{
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('professionals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProfessional $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProfessional $request)
    {
        $professional = Professional::create($request->validated());
        return redirect()->route('professionals.show', [$professional])->with('success', 'Dados salvos com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Professional $professional
     * @return \Illuminate\Http\Response
     */
    public function show(Professional $professional)
    {
        return response()->view('professionals.show', [
            'professional' => $professional,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Professional $professional
     * @return \Illuminate\Http\Response
     */
    public function edit(Professional $professional)
    {
        return response()->view('professionals.edit', [
            'professional' => $professional
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Professional $professional
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Professional $professional)
    {
        $data = $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'nascimento' => 'required|date',
            'rg' => 'required',
            'cpf' => 'required',
            'telefone' => 'nullable',
            'celular' => 'nullable',
            'senha' => 'nullable|confirmed'
        ]);
        if (empty($data['senha'])) {
            unset($data['senha']);
            unset($data['senha_confirmation']);
        }
        $professional->fill($data);
        $professional->save();
        return redirect()->route('professionals.show', [$professional])->with('success', 'Dados alterados com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Professional $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        //
    }
}