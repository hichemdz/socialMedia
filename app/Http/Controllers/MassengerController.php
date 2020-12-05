<?php

namespace App\Http\Controllers;

use App\Models\Massenger;
use App\Models\Message;
use Illuminate\Http\Request;

class MassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return dump('hello');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return dump('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return dump($massenger);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Massenger  $massenger
     * @return \Illuminate\Http\Response
     */
    public function show($massenger)
    {
        return dump($massenger);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Massenger  $massenger
     * @return \Illuminate\Http\Response
     */
    public function edit(Massenger $massenger)
    {
        return dump($massenger);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Massenger  $massenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Massenger $massenger)
    {
        return dump($massenger);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Massenger  $massenger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Massenger $massenger)
    {
        //
    }
}
