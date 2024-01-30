@extends('admin.main')
@include('admin.nav')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit Berita</h4>
                                        <form method="POST" action="{{ route('admin-berita.update', $berita->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="judul">Judul:</label>
                                                <input type="text" class="form-control" id="judul" name="judul"
                                                    value="{{ old('judul', $berita->judul) }}" required>
                                                @error('judul')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="isi">Isi Berita:</label>
                                                <textarea class="form-control" id="isi" name="isi"
                                                rows="10" style="height: 200px;">{{ old('isi', $berita->isi) }}</textarea>
                                                @error('isi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="gambar_berita">Gambar Berita:</label>
                                                <input type="file" class="form-control-file" id="gambar_berita" name="gambar_berita">
                                                @error('gambar_berita')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                @if ($berita->gambar_berita)
                                                    <img src="{{ asset('berita/' . $berita->gambar_berita) }}" alt="Gambar Berita" style="max-width: 200px;">
                                                    <input type="hidden" name="gambar_berita_lama" value="{{ $berita->gambar_berita }}">
                                                @endif
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="tanggal_publikasi">Tanggal Publikasi:</label>
                                                <input type="datetime-local" class="form-control"
                                                    id="tanggal_publikasi" name="tanggal_publikasi"
                                                    value="{{ old('tanggal_publikasi', date('Y-m-d\TH:i', strtotime($berita->tanggal_publikasi))) }}"
                                                    required>
                                                @error('tanggal_publikasi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</div>
