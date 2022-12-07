<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Country;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::pluck('nombre', 'id');
        return view('admin.clients.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ci_pasaporte' => 'required|unique:clients',
            'nombre' => 'required',
            'apPaterno'=> 'required',
            'apMaterno'=> 'required',
            'telefono'=> 'required',
            'country_id'=> 'required',
            'status'
        ]);

        /* dd($request); */

        Client::create($request->all());
        return redirect()->route('admin.clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $countries = Country::pluck('nombre', 'id');
        return view('admin.clients.edit', compact('client','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'ci_pasaporte' => 'required',
            'nombre' => 'required',
            'apPaterno'=> 'required',
            'apMaterno'=> 'required',
            'telefono'=> 'required',
            'country_id'=> 'required',
            'status'
        ]);

        /* dd($request); */

        $client->update($request->all());
        return redirect()->route('admin.clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index');
    }
}
