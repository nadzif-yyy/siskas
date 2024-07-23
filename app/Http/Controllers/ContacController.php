<?php

namespace App\Http\Controllers;

use App\Models\contac;
use Illuminate\Http\Request;

class ContacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        contac::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return redirect('/')->with('data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(contac $contac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contac $contac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contac $contac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contac $contac)
    {
        //
    }
}
