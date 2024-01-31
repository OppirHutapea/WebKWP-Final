<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Panitia;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class PanitiaController extends Controller
{
    public function index()
    {
        $panitias = Panitia::all();
        return view('admin.panitia.index', compact('panitias'));
    }

    public function create()
    {
        return view('admin.panitia.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'email' => 'required|email',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules for the image
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('admin.panitia.create')
                ->withErrors($validator)
                ->withInput();
        }
    
        // Store the uploaded photo
        $photo = $request->file('foto');
        $photoName = time() . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('panitia'), $photoName);
    
        // Create a new entry in the database for the Panitia
        Panitia::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'foto' => $photoName, // Save the filename in the database
        ]);
    
        return redirect()->route('admin-panitia')->with('success', 'Panitia berhasil ditambahkan');
    }    

    public function edit(Panitia $panitia)
    {
        return view('admin.panitia.edit', compact('panitia'));
    }

    public function update(Request $request, Panitia $panitia)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'email' => 'required|email',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Update validation rules for the image
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('admin.panitia.edit', $panitia->id)
                ->withErrors($validator)
                ->withInput();
        }
    
        // Check if a new photo is uploaded
        if ($request->hasFile('foto')) {
            // Delete the existing photo
            if ($panitia->foto) {
                unlink(public_path('panitia/' . $panitia->foto));
            }
            // Store the new photo
            $photo = $request->file('foto');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('panitia'), $photoName);
            // Update the 'foto' field in the database
            $panitia->foto = $photoName;
        }
    
        // Update other fields
        $panitia->nama = $request->nama;
        $panitia->jabatan = $request->jabatan;
        $panitia->email = $request->email;
        $panitia->save();
    
        return redirect()->route('admin-panitia')->with('success', 'Panitia updated successfully');
    }
    

    public function show(Panitia $panitia)
{
    return view('admin.panitia.show', compact('panitia'));
}


    public function destroy(Panitia $panitia)
    {
        $panitia->delete();
        return redirect()->route('admin-panitia')->with('success', 'Panitia deleted successfully');
    }
}


