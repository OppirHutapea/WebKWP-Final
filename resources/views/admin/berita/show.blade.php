@include('admin.main')
@include('admin.nav')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                            aria-labelledby="overview">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tinjau Berita</h4>
                                        <div class="form-group">
                                            <label>Judul:</label>
                                            <p>{{ $berita->judul }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Berita:</label>
                                            <p>{{ $berita->isi }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar Berita:</label>
                                            @if ($berita->gambar_berita)
                                                <img src="{{ asset('berita/' . $berita->gambar_berita) }}"
                                                    alt="Gambar Berita" style="max-width: 200px;">
                                            @else
                                                <p>Tidak ada gambar berita.</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Publikasi:</label>
                                            <p>{{ $berita->tanggal_publikasi }}</p>
                                        </div>
                                        <a href="{{ route('admin-berita') }}"
                                            class="btn btn-primary">Kembali</a>
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
