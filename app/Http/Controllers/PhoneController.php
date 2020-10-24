<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhone;
use App\Person;
use App\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
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
     * @param Request $request
     * @param Person $person
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Person $person)
    {
        $redirectTo = $request->query('redirectTo') ?? null;
        return response()->view('phones.create', [
            'person' => $person,
            'redirectTo' => $redirectTo,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePhone $request
     * @param Person $person
     * @return mixed
     */
    public static function store(StorePhone $request, Person $person)
    {
        try {
            $redirectTo = $request->query('redirectTo') ?? null;
            if (empty($redirectTo)) {
                throw new \Exception('Acesso não permitido.');
            }
            $phone = new Phone();
            $phone->fill($request->validated());
            $person->phones()->save($phone);
            return redirect($redirectTo);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Phone $phone)
    {
        $redirect = $request->query('redirectTo');
        return response()->view('phones.edit', [
            'phone' => $phone,
            'redirectTo' => $redirect,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StorePhone $request
     * @param Phone $phone
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     * @throws \Exception
     */
    public function update(StorePhone $request, Phone $phone)
    {
        try {
            $redirectTo = $request->query('redirectTo') ?? null;
            if (empty($redirectTo)) {
                throw new \Exception('Acesso não permitido.');
            }
            $phone->fill($request->validated());
            $phone->save();
            return redirect($redirectTo);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Phone $phone
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Request $request, Phone $phone)
    {

        try {
            $redirectTo = $request->query('redirectTo');
            if (empty($redirectTo)) {
                throw new \Exception('Acesso não permitido');
            }
            $phone->delete();
            return redirect($redirectTo);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
