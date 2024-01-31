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
                                        @if ($document)
                                        <p>Dokumen saat ini: <a href="{{ asset('documents/' . $document->nama_file) }}">{{ $document->nama_file }}</a></p>
                                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus Dokumen</button>
                                        </form>
                                    @else
                                        <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="file">Pilih Dokumen (format: .doc, .docx)</label>
                                                <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file">
                                                @error('file')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah Dokumen</button>
                                        </form>
                                    @endif                                    
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
