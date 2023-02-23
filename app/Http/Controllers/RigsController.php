<?php

namespace App\Http\Controllers;

use App\Models\Rigs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RigsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rigs = Rigs::all();
        return view('rigs.index', compact('rigs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rigs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rigs $rigs, $id)
    {
        $rig = Rigs::findOrFail($id);
        return view('rigs.single', compact('rig'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rigs $rigs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rigs $rigs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rigs $rigs)
    {
        //
    }
}
