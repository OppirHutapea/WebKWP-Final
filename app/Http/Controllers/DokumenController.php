<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function index()
    {
        $document = Document::first();
        return view('admin.dokumen.index', compact('document'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:doc,docx|max:2048',
        ]);

        $document = Document::first();
        if ($document) {
            // Hapus dokumen lama
            unlink(public_path('documents/' . $document->nama_file));
            $document->delete();
        }

        $file = $request->file('file');
        $nama_file = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('documents'), $nama_file);

        Document::create(['nama_file' => $nama_file]);

        return redirect()->route('documents.index')->with('success', 'Dokumen berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $document = Document::find($id);
        if ($document) {
            unlink(public_path('documents/' . $document->nama_file));
            $document->delete();
        }

        return redirect()->route('documents.index')->with('success', 'Dokumen berhasil dihapus.');
    }

    public function downloadDokumen()
    {
        $document = Document::first();

        // Periksa apakah ada dokumen yang diunggah
        if ($document) {
            $file = public_path('documents/' . $document->nama_file);

            // Periksa apakah file dokumen ada di direktori
            if (file_exists($file)) {
                return response()->download($file, $document->nama_file);
            }
        }

        // Jika tidak ada dokumen yang diunggah, kembalikan pesan error
        return redirect()->back()->with('error', 'Dokumen tidak tersedia untuk diunduh.');
    }
}