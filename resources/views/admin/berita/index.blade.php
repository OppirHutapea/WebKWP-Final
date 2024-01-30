@include('admin.main')
@include('admin.nav')
      <!-- partial -->
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
                                <h4 class="card-title">Kelola Berita</h4>
                                <a href="{{ route('admin-berita.create') }}" class="btn btn-success btn-icon">Tambah Berita</a>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal Publikasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($beritas as $index => $berita)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $berita->judul }}</td>
                                                <td>{{ $berita->isi }}</td>
                                                <td>{{ $berita->tanggal_publikasi }}</td>
                                                <td>
                                                    <a href="{{ route('admin-berita.show', $berita->id) }}" class="btn btn-info">Tinjau</a>
                                                    <a href="{{ route('admin-berita.edit', $berita->id) }}" class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('admin-berita.destroy', $berita->id) }}" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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