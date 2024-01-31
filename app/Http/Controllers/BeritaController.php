<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'isi' => 'nullable|string',
            'gambar_berita' => 'required|string',
            'tanggal_publikasi' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('berita.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        Berita::create($request->all());

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function show(Berita $berita)
    {
        return view('admin.berita.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'isi' => 'nullable|string',
            'gambar_berita' => 'required|string',
            'tanggal_publikasi' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('berita.edit', $berita->id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $berita->update($request->all());

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
