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
                                <h3>Manage Anggota</h3>
                                <h4>No Passring : <span>{{ $dataPegawai->nopassring }}</span></h4>
                                <p class="mb-0"></p><a class="btn btn-link btn-sm ps-0 mt-2"
                                    href="https://getbootstrap.com/docs/5.1/forms/layout" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-3">

            <div class="col-12">
                <div class="card h-100">
                    @include('sweetalert::alert')
                    <div class="card-header">
                        <h5 class="mb-0">Edit Data Anggota</h5>
                    </div>

                    <div class="card-body bg-light">

                        {{-- Form Foto --}}
                        <form action="{{ route('update.foto', $dataPegawai->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row gx-2">

                                <div class="col-12">
                                    <div class="border-dashed-bottom my-3"><b>DATA FOTO</b></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="card h-md-100">
                                        <div class="card-header pb-0">
                                            <h6 class="mb-0 mt-2">Foto Depan</h6>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div>
                                                @if (
                                                    $dataPegawai &&
                                                        $dataPegawai->siyalem &&
                                                        $dataPegawai->siyalem->data_fotos &&
                                                        $dataPegawai->siyalem->data_fotos->depan_pic)
                                                    <img style="width: 100%; height: 400px; object-position: center; object-fit: cover"
                                                        src="{{ asset($dataPegawai->siyalem->data_fotos->depan_pic) }}"
                                                        alt="no image">
                                                @else
                                                    <img style="width: 100%; height: 400px; object-position: center; object-fit: cover"
                                                        src="{{ asset('default_image.jpg') }}" alt="no image">
                                                @endif
                                                <input type="file" name="depan_pic" id="depan_pic"
                                                    class="form-control mt-2">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="card h-md-100">
                                        <div class="card-header pb-0">
                                            <h6 class="mb-0 mt-2">Foto Kanan</h6>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div>
                                                @if (
                                                    $dataPegawai &&
                                                        $dataPegawai->siyalem &&
                                                        $dataPegawai->siyalem->data_fotos &&
                                                        $dataPegawai->siyalem->data_fotos->kanan_pic)
                                                    <img style="width: 100%; height: 400px; object-position: center; object-fit: cover"
                                                        src="{{ asset($dataPegawai->siyalem->data_fotos->kanan_pic) }}"
                                                        alt="no image">
                                                @else
                                                    <img style="width: 100%; height: 400px; object-position: center; object-fit: cover"
                                                        src="{{ asset('default_image.jpg') }}" alt="no image">
                                                @endif
                                                <input type="file" name="kanan_pic" id="kanan_pic"
                                                    class="form-control mt-2">
                                            </div>

                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="row g-0 h-100 align-items-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="card h-md-100">
                                        <div class="card-header pb-0">
                                            <h6 class="mb-0 mt-2">Foto Kiri</h6>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div>
                                                @if (
                                                    $dataPegawai &&
                                                        $dataPegawai->siyalem &&
                                                        $dataPegawai->siyalem->data_fotos &&
                                                        $dataPegawai->siyalem->data_fotos->kiri_pic)
                                                    <img style="width: 100%; height: 400px; object-position: center; object-fit: cover"
                                                        src="{{ asset($dataPegawai->siyalem->data_fotos->kiri_pic) }}"
                                                        alt="no image">
                                                @else
                                                    <img style="width: 100%; height: 400px; object-position: center; object-fit: cover"
                                                        src="{{ asset('default_image.jpg') }}" alt="no image">
                                                @endif
                                                <input type="file" name="kiri_pic" id="kiri_pic"
                                                    class="form-control mt-2">
                                            </div>

                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="row g-0 h-100 align-items-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="card h-md-100">
                                        <div class="card-header pb-0">
                                            <h6 class="mb-0 mt-2">Sidik Jari</h6>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div>
                                                @if (
                                                    $dataPegawai &&
                                                        $dataPegawai->siyalem &&
                                                        $dataPegawai->siyalem->data_fotos &&
                                                        $dataPegawai->siyalem->data_fotos->sidik_pic)
                                                    <img style="width: 100%; height: 400px; object-position: center; object-fit: cover"
                                                        src="{{ asset($dataPegawai->siyalem->data_fotos->sidik_pic) }}"
                                                        alt="no image">
                                                @else
                                                    <img style="width: 100%; height: 400px; object-position: center; object-fit: cover"
                                                        src="{{ asset('default_image.jpg') }}" alt="no image">
                                                @endif
                                                <input type="file" name="sidik_pic" id="sidik_pic"
                                                    class="form-control mt-2">
                                            </div>

                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="row g-0 h-100 align-items-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 mb-3 mt-2">
                                    <label class="form-label" for="ket_pic">Keterangan Anggota</label>
                                    <input class="form-control datetimepicker" id="ket_pic" name="ket_pic" type="text"
                                        value="{{ $dataPegawai->siyalem ? ($dataPegawai->siyalem->data_fotos ? $dataPegawai->siyalem->data_fotos->ket_pic : '') : '' }}" />
                                    <button class="btn btn-primary mt-3" type="submit">Edit Foto
                                    </button>
                                </div>

                            </div>

                        </form>

                        {{-- Edit Biodata --}}
                        <div class="col-12">
                            <div class="border-dashed-bottom my-3"><b>BIODATA ANGGOTA</b></div>
                        </div>

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Edit Biodata Anggota
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @include('Account.Accordion.Anggota')
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Edit Data Siyalems
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        @include('Account.Accordion.Siyalems')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
