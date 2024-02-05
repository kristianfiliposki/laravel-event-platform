<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorenetflixRequest;
use App\Http\Requests\UpdatenetflixRequest;
use App\Models\netflix;

class NetflixController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenetflixRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(netflix $netflix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(netflix $netflix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenetflixRequest $request, netflix $netflix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(netflix $netflix)
    {
        //
    }
}
