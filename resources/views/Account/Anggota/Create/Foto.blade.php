@extends('layouts.maincreate')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mb-3">
                    <div class="bg-holder d-none d-lg-block bg-card"
                        style="background-image:url(../../../assets/img/corner-4.png);">
                    </div>
                    <!--/.bg-holder-->

                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>Input Foto</h3>
                                <p class="mb-0"></p><a class="btn btn-link btn-sm ps-0 mt-2"
                                    href="https://getbootstrap.com/docs/5.1/forms/layout" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-danger" role="alert">
                    Jangan keluar dari halaman ini, jika ada salah penginputan lakukan pengeditan data..
                </div>

                <div class="card mb-3">
                    <div class="card-body bg-light">
                        <div class="tab-content">
                            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                                aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                                id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                                @include('sweetalert::alert')
                                <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Dapatkan id --}}
                                    <input style="display: none" name="siyalem_id" class="form-control" type="text"
                                        value="{{ (int) $siyalem->id }}" readonly>

                                    <div class="card-header">
                                        <div class="row flex-between-end">
                                            <div class="col-auto align-self-center">
                                                <h5 class="mb-0">Tampak Foto Depan</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="mb-3">
                                        <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview"
                                            style="width: 150px; height: 180px"
                                            src="{{ asset('assets/img/add-user3.png') }}" /><br />
                                        <input class="form-control @error('depan_pic') is-invalid @enderror"
                                            id="uploadImage" type="file" name="depan_pic" onchange="PreviewImage();"
                                            autofocus />
                                        <script type="text/javascript">
                                            function PreviewImage() {
                                                var oFReader = new FileReader();
                                                oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
                                                oFReader.onload = function(oFREvent) {
                                                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                                                };
                                            }
                                        </script>
                                        @error('depan_pic')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="card-header">
                                        <div class="row flex-between-end">
                                            <div class="col-auto align-self-center">
                                                <h5 class="mb-0">Tampak Foto Samping Kanan</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="mb-3">
                                        <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview2"
                                            style="width: 150px; height: 180px"
                                            src="{{ asset('assets/img/add-user3.png') }}" /><br />
                                        <input class="form-control @error('kanan_pic') is-invalid @enderror"
                                            id="uploadImage2" type="file" name="kanan_pic" onchange="Preview2Image();" />
                                        <script type="text/javascript">
                                            function Preview2Image() {
                                                var oFReader = new FileReader();
                                                oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);
                                                oFReader.onload = function(oFREvent) {
                                                    document.getElementById("uploadPreview2").src = oFREvent.target.result;
                                                };
                                            }
                                        </script>
                                        @error('kanan_pic')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="card-header">
                                        <div class="row flex-between-end">
                                            <div class="col-auto align-self-center">
                                                <h5 class="mb-0">Tampak Foto Samping Kiri</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="mb-3">
                                        <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview3"
                                            style="width: 150px; height: 180px"
                                            src="{{ asset('assets/img/add-user3.png') }}" /><br />
                                        <input class="form-control @error('kiri_pic') is-invalid @enderror"
                                            id="uploadImage3" type="file" name="kiri_pic" onchange="Preview3Image();" />
                                        <script type="text/javascript">
                                            function Preview3Image() {
                                                var oFReader = new FileReader();
                                                oFReader.readAsDataURL(document.getElementById("uploadImage3").files[0]);
                                                oFReader.onload = function(oFREvent) {
                                                    document.getElementById("uploadPreview3").src = oFREvent.target.result;
                                                };
                                            }
                                        </script>
                                        @error('kiri_pic')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="card-header">
                                        <div class="row flex-between-end">
                                            <div class="col-auto align-self-center">
                                                <h5 class="mb-0">Upload Sidik Jari</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="mb-3">
                                        <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview4"
                                            style="width: 150px; height: 180px"
                                            src="{{ asset('assets/img/addfinger.png') }}" /><br />
                                        <input class="form-control @error('sidik_pic') is-invalid @enderror"
                                            id="uploadImage4" type="file" name="sidik_pic" onchange="Preview4Image();" />
                                        <script type="text/javascript">
                                            function Preview4Image() {
                                                var oFReader = new FileReader();
                                                oFReader.readAsDataURL(document.getElementById("uploadImage4").files[0]);
                                                oFReader.onload = function(oFREvent) {
                                                    document.getElementById("uploadPreview4").src = oFREvent.target.result;
                                                };
                                            }
                                        </script>
                                        @error('sidik_pic')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-namaayah">Keterangan Anggota</label>
                                        <textarea class="form-control @error('ket_pic') is-invalid @enderror" id="basic-form-namaayah" name="ket_pic"
                                            rows="3" type="text" placeholder="Masukan Keterangan"></textarea>
                                        @error('ket_pic')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
