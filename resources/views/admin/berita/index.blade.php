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
                                    <th>
                                      No
                                    </th>
                                    <th>
                                      Judul
                                    </th>
                                    <th>
                                      Deskripsi
                                    </th>
                                    <th>
                                      Tanggal Publikasi
                                    </th>
                                    <th>
                                      Aksi
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      1
                                    </td>
                                    <td>
                                      Herman Beck
                                    </td>
                                    <td>
                                      <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </td>
                                    <td>
                                        May 15, 2015
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info">Tinjau</button>
                                        <button type="button" class="btn btn-warning">Edit</button>
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </td>
                                  </tr>
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