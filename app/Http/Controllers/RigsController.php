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
        /*
        $rigs = Rigs::all();
        $content = view('rigs.index', ['rigs' => $rigs])->render();

        $response = new Response($content, 200);
        $response->header('Content-Type', 'text/html');

        return $response;
        */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        return view('rigs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Rigs $rigs, $id): Response
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rigs $rigs): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rigs $rigs): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rigs $rigs): RedirectResponse
    {
        //
    }
}
