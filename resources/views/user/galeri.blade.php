@include('user.header-user.header')

<div class="container my-5 py-3" style="margin-top: 100px;"> <!-- Menambahkan margin atas dan bawah pada container -->
    <h1 style="margin-top: 100px;">Galeri</h1>
    <div class="row py-3">
        <div class="col-md-4 mb-4"> <!-- Menambahkan class col-md-4 untuk membuat 3 gambar per baris pada tampilan desktop -->
            <img src="{{asset('assets/img/imag1.jpg')}}" alt="Gambar 1" class="img-fluid rounded-lg" data-toggle="modal" data-target="#gambarModal1"> <!-- Menambahkan data-toggle dan data-target untuk mengaktifkan modal -->
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{asset('assets/img/img2.jpg')}}" alt="Gambar 2" class="img-fluid rounded-lg" data-toggle="modal" data-target="#gambarModal2">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{asset('assets/img/img3.jpg')}}" alt="Gambar 3" class="img-fluid rounded-lg" data-toggle="modal" data-target="#gambarModal3">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <img src="{{asset('assets/img/img4.jpg')}}" alt="Gambar 4" class="img-fluid rounded-lg" data-toggle="modal" data-target="#gambarModal4">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{asset('assets/img/img5.jpg')}}" alt="Gambar 5" class="img-fluid rounded-lg" data-toggle="modal" data-target="#gambarModal5">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{asset('assets/img/img6.jpg')}}" alt="Gambar 6" class="img-fluid rounded-lg" data-toggle="modal" data-target="#gambarModal6">
        </div>
    </div>
</div>
@include('user.footer-user.footer')

<!-- Modals -->
<div class="modal fade" id="gambarModal1" tabindex="-1" role="dialog" aria-labelledby="gambarModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('assets/img/imag1.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gambarModal2" tabindex="-1" role="dialog" aria-labelledby="gambarModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('assets/img/img2.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gambarModal3" tabindex="-1" role="dialog" aria-labelledby="gambarModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('assets/img/img3.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gambarModal4" tabindex="-1" role="dialog" aria-labelledby="gambarModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('assets/img/img4.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gambarModal5" tabindex="-1" role="dialog" aria-labelledby="gambarModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('assets/img/img5.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gambarModal6" tabindex="-1" role="dialog" aria-labelledby="gambarModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('assets/img/img5.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gambarModal7" tabindex="-1" role="dialog" aria-labelledby="gambarModal7Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('assets/img/img6.jpg')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gambarModal8" tabindex="-1" role="dialog" aria-labelledby="gambarModal8Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('assets/img/Business.PNG')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gambarModal9" tabindex="-1" role="dialog" aria-labelledby="gambarModal9Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('assets/img/Business.PNG')}}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

