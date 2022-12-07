<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Subservice;
use Illuminate\Http\Request;

class SubserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subservices = Subservice::all();
        return view('admin.subservices.index', compact('subservices'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subservice  $subservice
     * @return \Illuminate\Http\Response
     */
    public function show(Subservice $subservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subservice  $subservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Subservice $subservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subservice  $subservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subservice $subservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subservice  $subservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subservice $subservice)
    {
        //
    }
}
