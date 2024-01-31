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
                                        <h4 class="card-title">Tinjau Panitia</h4>
                                        <div class="form-group">
                                            <label>Nama:</label>
                                            <p>{{ $panitia->nama }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan:</label>
                                            <p>{{ $panitia->jabatan }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <p>{{ $panitia->email }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto:</label>
                                            @if ($panitia->foto)
                                                <img src="{{ asset('panitia/' . $panitia->foto) }}"
                                                    alt="Foto Panitia" style="max-width: 200px;">
                                            @else
                                                <p>Tidak ada foto.</p>
                                            @endif
                                        </div>
                                        <a href="{{ route('admin-panitia') }}"
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
