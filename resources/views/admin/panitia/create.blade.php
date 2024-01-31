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
                                <h4 class="card-title">Tambah Panitia</h4>
                                <form method="POST" action="{{ route('admin.panitia.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf <!-- Laravel's CSRF token -->
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="{{ old('nama') }}">
                                        @error('nama')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan:</label>
                                        <select class="form-control" id="jabatan" name="jabatan" style="height: 35px">
                                            <option value="" selected disabled>Pilih Jabatan Panitia</option>
                                            <option value="Pengarah" {{ old('jabatan') == 'Pengarah' ? 'selected' : '' }}>Pengarah</option>
                                            <option value="Mentor" {{ old('jabatan') == 'Mentor' ? 'selected' : '' }}>Mentor</option>
                                            <option value="Fasilitator" {{ old('jabatan') == 'Fasilitator' ? 'selected' : '' }}>Fasilitator</option>
                                        </select>
                                        @error('jabatan')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>                                            
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="foto">Foto:</label>
                                        <input type="file" class="form-control-file" id="foto" name="foto">
                                        @error('foto')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success">Simpan</button>
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