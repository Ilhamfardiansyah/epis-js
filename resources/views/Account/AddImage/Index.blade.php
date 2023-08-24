@extends('layouts.main')

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
                                <h3>Manage Aplication</h3>
                                <p class="mb-0"></p><a class="btn btn-link btn-sm ps-0 mt-2"
                                    href="https://getbootstrap.com/docs/5.1/forms/layout" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body bg-light">
                        <div class="tab-content">
                            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                                aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                                id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                                @include('sweetalert::alert')
                                <form action="{{ route('uploadimage') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Dapatkan id --}}

                                    <div class="card-header">
                                        <div class="row flex-between-end">
                                            <div class="col-auto align-self-center">
                                                <h5 class="mb-0">Input</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="mb-3">
                                        <img class="col-md-6 offset-md-3 mb-3" id="uploadPreview"
                                            style="width: 150px; height: 180px"
                                            src="{{ asset('assets/img/img_212915.png') }}" /><br />
                                        <input class="form-control @error('logo') is-invalid @enderror" id="uploadImage"
                                            type="file" name="logo" onchange="PreviewImage();" autofocus />
                                        <script type="text/javascript">
                                            function PreviewImage() {
                                                var oFReader = new FileReader();
                                                oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
                                                oFReader.onload = function(oFREvent) {
                                                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                                                };
                                            }
                                        </script>
                                        @error('logo')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-namaayah">Nama Kesatuan</label>
                                        <input class="form-control @error('nama') is-invalid @enderror"
                                            id="basic-form-namaayah" name="nama" rows="3" type="text"
                                            placeholder="Masukan Nama Kesatuan">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-namaayah">Alamat Kesatuan</label>
                                        <input class="form-control @error('alamat') is-invalid @enderror"
                                            id="basic-form-namaayah" name="alamat" rows="3" type="text"
                                            placeholder="Masukan Alamat Kesatuan">
                                        @error('alamat')
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
