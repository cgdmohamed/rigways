<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //counters
        
        $projects = Projects::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //return Request()->all();
        request()->validate([
            'name' => 'required',
            'location' => 'required',
            'manager' => 'required'
        ]);
        $newProject = new Projects();
        $newProject->name = Request('name');
        $newProject->location = Request('location');
        $newProject->manager = Request('manager');
        $newProject->save();

        return redirect('projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $projects, $id)
    {
        //
        //return $id;
        $projects = Projects::findOrFail($id);
        return view('projects.single', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $projects, $id)
    {
        //
        $projects = Projects::findOrFail($id);
        return view('projects.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $projects, $id)
    {
        $projects = Projects::findOrFail($id);
        $projects->name = Request('name');
        $projects->location = Request('location');
        $projects->manager = Request('manager');
        $projects->save();
        
        return redirect('/projects');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $projects, $id)
    {
        //
        $projects = Projects::findOrFail($id);
        $projects->delete();

        return redirect()->back();
    }
}
