<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\StoreAddress;
use App\Person;
use App\Traits\GenericPersonActions;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    use GenericPersonActions;

    protected $routeSlug = 'addresses';

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @param Person $person
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function create(Request $request, Person $person)
    {
        $redirectTo = $request->query('redirectTo') ?? null;
        $routeName = $this->getActionName($person, 'store');
        return response()->view('addresses.create', [
            'person' => $person,
            'action' => $routeName,
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
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Address $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Person $person, Address $address)
    {
        $redirectTo = $request->query('redirectTo') ?? null;
        $routeName = $this->getActionName($person, 'update');
        return response()->view('addresses.edit', [
            'address' => $address,
            'redirectTo' => $redirectTo,
            'action' => $routeName,
            'person' => $person
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
    public function update(StoreAddress $request, Person $person, Address $address)
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
    public function destroy(Request $request, Person $person, Address $address)
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
