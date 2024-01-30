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
            'gambar_berita' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Aturan validasi untuk gambar
            'tanggal_publikasi' => 'required|date',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('admin-berita.create')
                ->withErrors($validator)
                ->withInput();
        }
    
        // Menyimpan file gambar
        $gambar_berita = $request->file('gambar_berita');
        $nama_gambar = time() . '_' . $gambar_berita->getClientOriginalName();
        $gambar_berita->move(public_path('berita'), $nama_gambar);
    
        // Membuat entri berita di database
        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar_berita' => $nama_gambar, // Menyimpan nama file gambar
            'tanggal_publikasi' => $request->tanggal_publikasi,
        ]);
    
        return redirect()->route('admin-berita')->with('success', 'Berita berhasil ditambahkan');

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
            'tanggal_publikasi' => 'required|date',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('admin-berita.edit', $berita->id)
                        ->withErrors($validator)
                        ->withInput();
        }
    
        // Periksa apakah ada file gambar baru yang diunggah
        if ($request->hasFile('gambar_berita')) {
            // Validasi dan simpan gambar baru
            $request->validate([
                'gambar_berita' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            // Hapus gambar lama sebelum menyimpan yang baru
            if ($berita->gambar_berita) {
                if (file_exists(public_path('berita/' . $berita->gambar_berita))) {
                    unlink(public_path('berita/' . $berita->gambar_berita));
                }
            }
    
            // Simpan gambar baru
            $gambar_berita = $request->file('gambar_berita');
            $nama_gambar = time() . '_' . $gambar_berita->getClientOriginalName();
            $gambar_berita->move(public_path('berita'), $nama_gambar);
            $berita->gambar_berita = $nama_gambar;
        }
    
        // Update data berita
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->tanggal_publikasi = $request->tanggal_publikasi;
        $berita->save();
    
        return redirect()->route('admin-berita')->with('success', 'Berita berhasil diperbarui');
    }
    

    public function destroy(Berita $berita)
    {
        // Pastikan Anda memverifikasi izin akses pengguna di sini
    
        // Lakukan penghapusan berita
        $berita->delete();
    
        // Setelah penghapusan berhasil, arahkan kembali ke halaman indeks berita dengan pesan sukses
        return redirect()->route('admin-berita')->with('success', 'Berita berhasil dihapus');
    }
    
}
