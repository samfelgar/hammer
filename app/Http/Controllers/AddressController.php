<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\StoreAddress;
use App\Person;
use Illuminate\Http\Request;

class AddressController extends Controller
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
        return response()->view('addresses.create', [
            'person' => $person,
            'redirectTo' => $redirectTo,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAddress $request
     * @param Person $person
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function store(StoreAddress $request, Person $person)
    {
        try {
            $redirectTo = $request->query('redirectTo') ?? null;
            if (empty($redirectTo)) {
                throw new \Exception('Acesso não permitido.');
            }
            $address = new Address();
            $address->fill($request->validated());
            $person->addresses()->save($address);
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
     * @param Address $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Address $address)
    {
        $redirectTo = $request->query('redirectTo') ?? null;
        return response()->view('addresses.edit', [
            'address' => $address,
            'redirectTo' => $redirectTo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function update(StoreAddress $request, Address $address)
    {
        try {
            $redirectTo = $request->query('redirectTo');
            if (empty($redirectTo)) {
                throw new \Exception('Acesso não permitido');
            }
            $address->fill($request->validated());
            $address->save();
            return redirect($redirectTo);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Address $address
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Request $request, Address $address)
    {
        try {
            $redirectTo = $request->query('redirectTo');
            if (empty($redirectTo)) {
                throw new \Exception('Acesso não permitido.');
            }
            $address->delete();
            return redirect($redirectTo);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
