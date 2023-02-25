<?php

namespace App\Http\Controllers;

use App\Models\Certificates;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class CertificatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rigs.certs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'serial_no' => 'required',
            'certificate_file' => 'required|mimes:pdf|max:5120', // max size is 5MB
        ]);
        $certificateFile = $request->file('certificate_file');
        $fileName = $request->input('serial_no') . '.' . $certificateFile->getClientOriginalExtension();
        $certificateFile->storeAs('certificates', $fileName);

        $new_cert = new Certificates();
        $new_cert->serial_no = Request('serial_no');
        // remember to set creator id and client id
        $new_cert->project_id =  1;
        $new_cert->user_id = 1;
        $new_cert->rig_id = 1;
        $new_cert->issue_date = Request('issue_date');
        $new_cert->expiry_date = Request('expiry_date');
        $new_cert->cert_status = "Vaild";
        $new_cert->certificate_file = $fileName;
        $new_cert->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificates $certificates, $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificates $certificates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificates $certificates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificates $certificates)
    {
        //
    }
// uploading method
    public function upload(Request $request)
{
    $path = $request->file('file')->store('public/certificates');
    return response()->json(['path' => $path]);
}

public function downloadCertificate($id)
{
    $certificate = Certificates::findOrFail($id);
    $pathToFile = storage_path('app/certificates/' . $certificate->certificate_file);
    return response()->download($pathToFile);
}

}
