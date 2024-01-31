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
                            <div class="card-title">Kelola Panitia</div>
                            <a href="{{ route('admin.panitia.create') }}" class="btn btn-success btn-icon">
                                Tambah Panitia
                            </a>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Email</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($panitias as $panitia)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $panitia->nama }}</td>
                                            <td>{{ $panitia->jabatan }}</td>
                                            <td>{{ $panitia->email }}</td>
                                            <td style="text-align: center">
                                                <img src="{{ asset('panitia/' . $panitia->foto) }}" alt="Foto Panitia">
                                            </td>
                                            <td>
                                              <a href="{{ route('admin-panitia.show', $panitia->id) }}" class="btn btn-info">Tinjau</a>
                                              <a href="{{ route('admin.panitia.edit', $panitia->id) }}" class="btn btn-warning">Edit</a>
                                              <form action="{{ route('admin.panitia.destroy', $panitia->id) }}" method="POST" style="display: inline-block;">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this panitia?')">Hapus</button>
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