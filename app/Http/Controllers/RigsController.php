<?php

namespace App\Http\Controllers;

use App\Models\Rigs;
use App\Models\Certificates;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;


class RigsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certs = Certificates::all();
        $rigs = Rigs::all();
        return view('rigs.index', compact('rigs','certs'));
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
        //Auto generate codes
        // Generate a unique code with the "RG" prefix
        $code = 'RG' . mt_rand(1000, 9999);

        request()->validate([
            'rig_name' => 'required',
            'rig_type' => 'required',
        ]);
        $newRig = new Rigs();
        $newRig->rig_name = Request('rig_name');
        // remember to set creator id and client id
        $newRig->creator_id =  1;
        $newRig->client_id = 1;
        $newRig->rig_serial = $code;
        $newRig->rig_type = Request('rig_type');
        $newRig->rig_status = Request('rig_status');
        $newRig->save();

        return redirect('rigs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rigs $rigs, $id)
    {
        $rig = Rigs::findOrFail($id);
        $certs = Certificates::findOrFail($id);
        return view('rigs.single', compact('rig','certs'));
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
    public function destroy(Rigs $rigs, $id)
    {
        $rigs = Rigs::findOrFail($id);
        $rigs->delete();

        return redirect('rigs');
    }
}
