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
     * @param Person $person
     * @param $action
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
