<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::all();
        return view('admin.operators.index', compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.operators.create');
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
            'nombre'=> 'required',
            'apPaterno'=> 'required',
            'apMaterno'=> 'required',
            'telefono'=> 'required',
            'direccion'=> 'required',
            'status'=> 'required'
        ]);
        Operator::create($request->all());
        return redirect()->route('admin.operators.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function show(Operator $operator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function edit(Operator $operator)
    {
        return view('admin.operators.edit', compact('operator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operator $operator)
    {
        $request->validate([
            'nombre'=> 'required',
            'apPaterno'=> 'required',
            'apMaterno'=> 'required',
            'telefono'=> 'required',
            'direccion'=> 'required',
            'status'=> 'required'
        ]);
        $operator->update($request->all());
        return redirect()->route('admin.operators.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operator $operator)
    {
        $operator->delete();
        return redirect()->route('admin.clients.index');
    }
}
