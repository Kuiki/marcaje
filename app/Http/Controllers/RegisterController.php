<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Incidence;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Listamos todos los registros de ese usuario
        $data = Register::where('user_id', 1)->get();
        $incidents = Incidence::where('active', 1)->get();

        $lastRegister = Register::orderBy('id', 'desc')->first();

        if (is_null($lastRegister)) {
            $url = 0;
        }
        elseif(is_null($lastRegister->departureDate)){
            $url = $lastRegister->id;
        }else{
            $url = 0;
        }

        //dd($data);
        return view("users.index")->with([
            'data' => $data,
            'incidents' => $incidents,
            'url' => $url,
        ]);
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
        //return "hola mundo";
        $horaActual =  date('Y-m-d H:i:s');
        //dd($request->all());
        $data = Register::create([
            'entryDate' => $horaActual,
            'entryNote' => $request->input('note'),
            'incidence_entry_id' => $request->input('incidence'),
            'user_id' => 1,
            'ip' => $request->ip()
        ]);

        return redirect('/intranet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //return "hola mundo";
        $horaActual =  date('Y-m-d H:i:s');

        $register->departureDate = $horaActual;
        $register->departureNote = $request->input('note');
        $register->incidence_departure_id = $request->input('incidence');

        $register->save();
        //dd($request->all());
        /*$data = Register::update([
            'entryDate' => $horaActual,
            'entryNote' => $request->input('note'),
            'incidence_id' => $request->input('incidence'),
            'user_id' => 1,
            'ip' => $request->ip()
        ]);*/

        return redirect('/intranet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
