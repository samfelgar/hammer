<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhone;
use App\Person;
use App\Phone;
use App\Professional;
use App\Traits\GenericPersonActions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PhoneController extends Controller
{
    use GenericPersonActions;

    protected $routeSlug = 'phones';

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
        return response()->view('phones.create', [
            'person' => $person,
            'action' => $routeName,
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
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Person $person, Phone $phone)
    {
        $redirect = $request->query('redirectTo');
        $routeName = $this->getActionName($person, 'update');
        return response()->view('phones.edit', [
            'person' => $person,
            'phone' => $phone,
            'redirectTo' => $redirect,
            'action' => $routeName
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
    public function update(StorePhone $request, Person $person, Phone $phone)
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
    public function destroy(Request $request, Person $person, Phone $phone)
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
