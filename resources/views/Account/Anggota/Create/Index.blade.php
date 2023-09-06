@extends('layouts.main')

@section('content')
    <style>
        .my-element {
            background: url('path/to/font-awesome/fontawesome-webfont.svg#your-icon') no-repeat;
        }

        * {
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
        }

        /*Background color*/
        #grad1 {
            background-color: : #9C27B0;
            background-image: linear-gradient(120deg, #FF4081, #81D4FA);
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }

        #msform input,
        #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: sans-serif;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px;
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0;
        }

        /*Blue Buttons*/
        #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
        }

        /*Previous Buttons*/
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
        }

        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }

        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #000000;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 25%;
            float: left;
            position: none;
        }

        /*Icons in the ProgressBar*/
        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f0c0";
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f083";
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: skyblue;
        }

        /*Imaged Radio Buttons*/
        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px;
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }

        /*Fit image in bootstrap div*/
        .fit-image {
            width: 100%;
            object-fit: cover;
        }
    </style>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">


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
                                <h3>Input Anggota</h3>
                                <p class="mb-0"></p><a class="btn btn-link btn-sm ps-0 mt-2"
                                    href="https://getbootstrap.com/docs/5.1/forms/layout" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MultiStep Form -->
                <div class="container">
                    <div class="row justify-content-center mt-0">
                        <div class="col-12 col-sm-9 col-md-7 col-md-12 text-center p-0 mt-3 mb-2">
                            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                <div class="row">
                                    <div class="col-md-12 mx-0">
                                        <form id="msform">
                                            <!-- progressbar -->
                                            <ul id="progressbar">
                                                <li class="active" id="account">
                                                    <strong>Data Anggota</strong>
                                                </li>
                                                <li id="personal"><strong>Sinyalemens</strong></li>
                                                <li id="payment"><strong>Foto</strong></li>
                                                <li id="confirm"><strong>Finish</strong></li>
                                            </ul>
                                            <!-- fieldsets -->
                                            <fieldset>

                                                <div class="form-card">
                                                    <h2 class="fs-title">Data Anggota</h2>
                                                    <div class="dropdown-divider"></div>

                                                    <input class="@error('NRP') is-invalid @enderror" id="basic-form-nrp"
                                                        name="NRP" type="text" placeholder="No NRP"
                                                        value="{{ old('NRP') }}" autofocus />
                                                    @error('NRP')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('nama') is-invalid @enderror" id="basic-form-nama"
                                                        name="nama" type="text" placeholder="Nama Lengkap"
                                                        value="{{ old('nama') }}" />
                                                    @error('nama')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('pangkat') is-invalid @enderror"
                                                        id="basic-form-pangkat" name="pangkat" type="text"
                                                        placeholder="Pangkat" value="{{ old('pangkat') }}" />
                                                    @error('pangkat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('nopassring') is-invalid @enderror"
                                                        id="basic-form-nopassring" name="nopassring" type="text"
                                                        placeholder="No. Pass Ring" value="{{ old('nopassring') }}" />
                                                    @error('nopassring')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('jabatan') is-invalid @enderror"
                                                        id="basic-form-jabatan" name="jabatan" type="text"
                                                        placeholder="Jabatan" value="{{ old('jabatan') }}" />
                                                    @error('jabatan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('kesatuan') is-invalid @enderror"
                                                        id="basic-form-kesatuan" name="kesatuan" type="text"
                                                        placeholder="Kesatuan" value="{{ old('kesatuan') }}" />
                                                    @error('kesatuan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('tandajasa') is-invalid @enderror"
                                                        id="basic-form-tandajasa" name="tandajasa" type="text"
                                                        placeholder="Tanda Jasa" value="{{ old('tandajasa') }}" />
                                                    @error('tandajasa')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <label class="form-label" for="basic-form-dob">Tempat, Tanggal Lahir dan
                                                        Umur</label>
                                                    <input class="@error('tgl') is-invalid @enderror" name="tgl"
                                                        id="basic-form-dob" type="text"
                                                        placeholder="Contoh: Jakarta, 01-01-1990 , (30)"
                                                        value="{{ old('tgl') }}" />
                                                    @error('tgl')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('warnakulit') is-invalid @enderror"
                                                        name="warnakulit" id="basic-form-kulit" type="text"
                                                        placeholder="Warna Kulit" value="{{ old('warnakulit') }}" />
                                                    @error('warnakulit')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('mata') is-invalid @enderror" id="basic-form-mata"
                                                        type="text" name="mata" placeholder="Mata"
                                                        value="{{ old('mata') }}" />
                                                    @error('mata')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('rambut') is-invalid @enderror"
                                                        id="basic-form-rambut" type="text" name="rambut"
                                                        placeholder="Rambut" value="{{ old('rambut') }}" />
                                                    @error('rambut')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <input class="@error('goldarah') is-invalid @enderror"
                                                        id="basic-form-goldarah" type="text" name="goldarah"
                                                        placeholder="Gol. Darah" value="{{ old('goldarah') }}" />
                                                    @error('goldarah')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Jenis
                                                            Kelamin</label>
                                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                                            id="basic-form-gender" name="jenis"
                                                            aria-label="Default select example">
                                                            <option disabled>--Jenis Kelamin--</option>
                                                            <option value="Laki-laki"
                                                                {{ old('jenis') == 'Laki-laki' ? 'selected' : '' }}>
                                                                Laki-Laki</option>
                                                            <option value="Perempuan"
                                                                {{ old('jenis') == 'Perempuan' ? 'selected' : '' }}>
                                                                Perempuan</option>
                                                            <option value="Lain-Lain"
                                                                {{ old('jenis') == 'Lain-Lain' ? 'selected' : '' }}>
                                                                Lain-Lain</option>
                                                        </select>
                                                        @error('jenis')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <label class="form-label" for="basic-form-alamat">Alamat</label>
                                                    <textarea class="@error('alamatsekarang') is-invalid @enderror" id="basic-form-alamat" name="alamatsekarang"
                                                        rows="3" placeholder="Contoh: Jakarta Pusat, Jl.Tanah Abang no 01"
                                                        aria-valuemax="{{ old('alamatsekarang') }}">{{ old('alamatsekarang') }}</textarea>
                                                    @error('alamatsekarang')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <label class="form-label" for="basic-form-suku">Suku Bangsa</label>
                                                    <input class="@error('suku') is-invalid @enderror"
                                                        id="basic-form-suku" type="text" name="suku"
                                                        placeholder="Suku Bangsa" value="{{ old('suku') }}" />
                                                    @error('suku')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Agama</label>
                                                        <select class="form-select @error('agama') is-invalid @enderror"
                                                            aria-valuetext="{{ old('agama') }}" id="basic-form-gender"
                                                            name="agama" aria-label="Default select example">
                                                            <option disabled>--Pilih Agama--</option>
                                                            <option value="Islam"
                                                                {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam
                                                            </option>
                                                            <option value="Kristen Protestan"
                                                                {{ old('agama') == 'Kristen Protestan' ? 'selected' : '' }}>
                                                                Kristen
                                                                Protestan</option>
                                                            <option value="Katolik"
                                                                {{ old('agama') == 'Katolik' ? 'selected' : '' }}>
                                                                Katolik</option>
                                                            <option value="Hindu"
                                                                {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu
                                                            </option>
                                                            <option value="Budha"
                                                                {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha
                                                            </option>
                                                            <option value="Konghucu"
                                                                {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>
                                                                Konghucu</option>
                                                            <option value="Lain-Lain"
                                                                {{ old('agama') == 'Lain-Lain' ? 'selected' : '' }}>
                                                                Lain-Lain</option>
                                                        </select>
                                                        @error('agama')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <input class="@error('tinggi') is-invalid @enderror"
                                                        id="basic-form-tinggi" type="text" name="tinggi"
                                                        placeholder="Tinggi dan Berat Badan"
                                                        value="{{ old('tinggi') }}" />
                                                    @error('tinggi')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <div class="card-header">
                                                        <div class="row flex-between-end">
                                                            <div class="col-auto align-self-center">
                                                                <h5 class="mb-0">Data Orang Tua</h5>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-divider"></div>
                                                    </div>

                                                    <label class="form-label" for="basic-form-namaayah">Nama Ayah &
                                                        Alamat</label>
                                                    <textarea class="@error('ayahalamat') is-invalid @enderror" id="basic-form-namaayah" name="ayahalamat"
                                                        rows="3" type="text" placeholder="Contoh: Nama Ayah, Jakarta Pusat, Jl.Tanah Abang no 01"
                                                        aria-valuetext="{{ old('ayahalamat') }}">{{ old('ayahalamat') }}</textarea>
                                                    @error('ayahalamat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <label class="form-label" for="basic-form-namaibu">Nama Ibu &
                                                        Alamat</label>
                                                    <textarea class="@error('ibualamat') is-invalid @enderror" id="basic-form-namaibu" name="ibualamat" rows="3"
                                                        type="text" placeholder="Contoh: Nama Ibu, Jakarta Pusat, Jl.Tanah Abang no 01"
                                                        aria-valuetext="{{ old('ibualamat') }}">{{ old('ibualamat') }}</textarea>
                                                    @error('ibualamat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <div class="card-header">
                                                        <div class="row flex-between-end">
                                                            <div class="col-auto align-self-center">
                                                                <h5 class="mb-0">Data Keluarga</h5>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-divider"></div>
                                                    </div>

                                                    <label class="form-label" for="basic-form-namapasangan">Nama
                                                        Istri/Suami dan
                                                        Alamat</label>
                                                    <textarea class="@error('istrialamat') is-invalid @enderror" id="basic-form-namapasangan" rows="3"
                                                        name="istrialamat" placeholder="Contoh: Nama istri/suami, Jakarta Pusat, Jl.Tanah Abang no 01 "
                                                        aria-valuetext="{{ old('istrialamat') }}">{{ old('istrialamat') }}</textarea>
                                                    @error('istrialamat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <label class="form-label" for="basic-form-aktenikah">Tempat/No Akte
                                                        Nikah</label>
                                                    <textarea class="@error('tempatnikah') is-invalid @enderror" id="basic-form-aktenikah" rows="3"
                                                        name="tempatnikah" type="text" placeholder="Tempat/No Akte Nikah" aria-valuetext="{{ old('tempatnikah') }}">{{ old('tempatnikah') }}</textarea>
                                                    @error('tempatnikah')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror

                                                    <label class="form-label" for="basic-form-anak">Nama Anak
                                                        Kandung</label>
                                                    <div class="col">
                                                        <textarea type="text" class=" @error('namaanak') is-invalid @enderror" name="namaanak"
                                                            placeholder="Contoh: Budi, Wahyu, Intan" rows="3" aria-label="Nama Anak Kandung"
                                                            aria-valuetext="{{ old('namaanak') }}">{{ old('namaanak') }}</textarea>
                                                    </div>

                                                    <label class="form-label" for="basic-form-password">Nama Orang Tua
                                                        Dari
                                                        Suami/Istri</label>
                                                    <textarea class="@error('ortuistrialamat') is-invalid @enderror" id="basic-form-password" name="ortuistrialamat"
                                                        rows="3" type="text"
                                                        placeholder="Contoh: Nama Orang Tua Dari Suami/Istri, Jakarta Pusat, Jl.Tanah Abang no 01"
                                                        aria-valuetext="{{ old('ortuistrialamat') }}">{{ old('ortuistrialamat') }}</textarea>
                                                    @error('ortuistrialamat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror


                                                </div>
                                                <input type="button" name="next" class="next action-button"
                                                    value="Next Step" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Sinyalemens</h2>
                                                    <div class="dropdown-divider"></div>

                                                    <div style="display:none" class="form-group mb-3">
                                                        <label for="datapegawai_id">ID Pemohon</label>
                                                        <input type="text" class="form-control" id="datapegawai_id"
                                                            name="datapegawai_id" value="{{ (int) $dataPegawai->id }}">
                                                        {{-- <input type="text" class="form-control" id="datapegawai_id"
                                                            name="datapegawai_id" value="" readonly> --}}
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Lembaga
                                                            (Adegan)</label>
                                                        <select class="form-select @error('lembaga') is-invalid @enderror"
                                                            id="basic-form-gender" name="lembaga"
                                                            aria-label="Default select example" required>
                                                            <option selected disabled>Lembaga...</option>
                                                            <option value="Kuat">Kuat</option>
                                                            <option value="Tegak">Tegak</option>
                                                            <option value="Lempai">Lempai</option>
                                                            <option value="Lemah">Lemah</option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('lembaga')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Sikap</label>
                                                        <select class="form-select @error('sikap') is-invalid @enderror"
                                                            id="basic-form-gender" name="sikap"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Sikap...</option>
                                                            <option value="Tegak">Tegak</option>
                                                            <option value="Gagah">Gagah</option>
                                                            <option value="Bungkok">Bungkok</option>
                                                            <option value="Kepal Tunduk Kaku">Kepal Tunduk Kaku</option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('sikap')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">langkah</label>
                                                        <select class="form-select @error('langkah') is-invalid @enderror"
                                                            id="basic-form-gender" name="langkah"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Langkah...</option>
                                                            <option value="Lenting">Lenting</option>
                                                            <option value="Tenang">Tenang</option>
                                                            <option value="Langkah Panjang">Langkah Panjang</option>
                                                            <option value="Langkah Pendek">Langkah Pendek</option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('langkah')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Bangun
                                                            Kepala</label>
                                                        <select
                                                            class="form-select @error('bangun kepala') is-invalid @enderror"
                                                            id="basic-form-gender" name="bangun kepala"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Bangun Kepala...</option>
                                                            <option value="Sebagai Pangkal">Sebagai Pangkal</option>
                                                            <option value="Belah Ketupat">Belah Ketupat</option>
                                                            <option value="Bulat">Bulat</option>
                                                            <option value="Jorong">Jorong</option>
                                                            <option value="Lonjong">Lonjong</option>
                                                            <option value="Panjang">Panjang</option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('bangun kepala')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Rambut</label>
                                                        <select class="form-select @error('rambut') is-invalid @enderror"
                                                            id="basic-form-gender" name="rambut"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Rambut...</option>
                                                            <option value="Lebat/Jarang">Lebat/Jarang</option>
                                                            <option value="Berombak/Kejur">Berombak/Kejur</option>
                                                            <option value="Kejur/Keriting">Kejur/Keriting</option>
                                                            <option value="Tegak">Tegak</option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('rambut')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Kening</label>
                                                        <select class="form-select @error('kening') is-invalid @enderror"
                                                            id="basic-form-gender" name="kening"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Kening</option>
                                                            <option value="Rata">Rata</option>
                                                            <option value="Miring">Miring</option>
                                                            <option value="KeAtas/KeBawah">Ke Atas/Ke Bawah</option>
                                                            <option value="Bertemu seteu dengan yang lain">Bertemu seteu
                                                                dengan yang lain
                                                            </option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('kening')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Dahi</label>
                                                        <select class="form-select @error('dahi') is-invalid @enderror"
                                                            id="basic-form-gender" name="dahi"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Dahi...</option>
                                                            <option value="Loncos Ke Belakang/Lurus Kebawah">Loncos Ke
                                                                Belakang/Lurus
                                                                Kebawah
                                                            </option>
                                                            <option value="Cenderung ke belakang">Cenderung ke belakang
                                                            </option>
                                                            <option value="Melengkung Keras">Melengkung Keras</option>
                                                            <option value="Tinggi/Rendah lebar ciut">Tinggi/Rendah lebar
                                                                ciut</option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('dahi')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Hidung</label>
                                                        <select class="form-select @error('hidung') is-invalid @enderror"
                                                            id="basic-form-gender" name="hidung"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Hidung...</option>
                                                            <option value="Pangkalnya Rata/Masuk kedalam">Pangkalnya
                                                                Rata/Masuk kedalam
                                                            </option>
                                                            <option
                                                                value="Batangnya : Membentuk kedalam/keluar lurus, alasnya menuju ke atas">
                                                                Batangnya : Membentuk kedalam/keluar lurus, alasnya menuju
                                                                ke atas
                                                            </option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('hidung')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Bibir</label>
                                                        <select class="form-select @error('bibir') is-invalid @enderror"
                                                            id="basic-form-gender" name="bibir"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Bibir...</option>
                                                            <option value="Tebal">Tebal</option>
                                                            <option value="Tipis">Tipis</option>
                                                            <option value="Sumbing">Sumbing</option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('bibir')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Telinga</label>
                                                        <select class="form-select @error('telinga') is-invalid @enderror"
                                                            id="basic-form-gender" name="telinga"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Telinga...</option>
                                                            <option value="Bulat bujur tiga penjuru dari belakang">Bulat
                                                                bujur tiga penjuru
                                                                dari belakang
                                                            </option>
                                                            <option
                                                                value="Berlengket dengan kepala dengan kepala bagian atas mengenai kepala belakang">
                                                                Berlengket dengan kepala dengan kepala bagian atas mengenai
                                                                kepala belakang
                                                            </option>
                                                            <option
                                                                value="Bentuk cuping berupa baja persegi/melengkukng/bergonta-ganti rata/tebal/benar">
                                                                Bentuk cuping berupa baja persegi/melengkukng/bergonta-ganti
                                                                rata/tebal/benar
                                                            </option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('telinga')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="basic-form-gender">Urusan Polisi
                                                            Militer</label>
                                                        <select
                                                            class="form-select @error('urusan_polisi_militer') is-invalid @enderror"
                                                            id="basic-form-gender" name="urusan_polisi_militer"
                                                            aria-label="Default select example">
                                                            <option selected disabled>Urusan Polisi Militer...</option>
                                                            <option value="Pernah">Pernah</option>
                                                            <option value="Tidak Pernah">Tidak Pernah</option>
                                                            <option value="Lain-Lain">Lain-Lain</option>
                                                        </select>
                                                        @error('urusan_polisi_militer')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <input type="button" name="previous"
                                                    class="previous action-button-previous" value="Previous" />
                                                <input type="button" name="next" class="next action-button"
                                                    value="Next Step" />
                                            </fieldset>

                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Upload Foto</h2>
                                                    <div class="dropdown-divider"></div>

                                                    <input style="display: none" name="siyalem_id" class="form-control"
                                                        type="text" value="{{ (int) $dataPegawai->siyalem }}"
                                                        readonly>

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
                                                        <input
                                                            class="form-control @error('depan_pic') is-invalid @enderror"
                                                            id="uploadImage" type="file" name="depan_pic"
                                                            onchange="PreviewImage();" autofocus />
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
                                                        <input
                                                            class="form-control @error('kanan_pic') is-invalid @enderror"
                                                            id="uploadImage2" type="file" name="kanan_pic"
                                                            onchange="Preview2Image();" />
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
                                                        <input
                                                            class="form-control @error('kiri_pic') is-invalid @enderror"
                                                            id="uploadImage3" type="file" name="kiri_pic"
                                                            onchange="Preview3Image();" />
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
                                                        <input
                                                            class="form-control @error('sidik_pic') is-invalid @enderror"
                                                            id="uploadImage4" type="file" name="sidik_pic"
                                                            onchange="Preview4Image();" />
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
                                                        <label class="form-label" for="basic-form-namaayah">Keterangan
                                                            Anggota</label>
                                                        <textarea class="form-control @error('ket_pic') is-invalid @enderror" id="basic-form-namaayah" name="ket_pic"
                                                            rows="3" type="text" placeholder="Masukan Keterangan"></textarea>
                                                        @error('ket_pic')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <input type="button" name="previous"
                                                    class="previous action-button-previous" value="Previous" />
                                                <input type="button" name="nextFinish" class="next action-button"
                                                    value="Confirm" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title text-center">Success !</h2>
                                                    <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-3">
                                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                                class="fit-image">
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-7 text-center">
                                                            <h5>You Have Successfully Signed Up</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
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
    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function() {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function() {
                return false;
            })

        });

        // Local storage

        // Function to save form data to local storage
        function saveFormDataToLocalStorage() {
            // Get all form input elements
            const formInputs = document.querySelectorAll('input, select');

            // Create an object to store form data
            const formData = {};

            // Loop through form inputs and store their values in the formData object
            formInputs.forEach((input) => {
                formData[input.name] = input.value;
            });

            // Convert the formData object to a JSON string
            const formDataJSON = JSON.stringify(formData);

            // Save the JSON string to local storage
            localStorage.setItem('formData', formDataJSON);
        }

        function saveImageToLocalStorage(inputId, key) {
            var fileInput = document.getElementById(inputId);
            var file = fileInput.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var imageData = e.target.result;
                    localStorage.setItem(key, imageData);
                };

                reader.readAsDataURL(file);
            }
        }

        // Function to load an image from local storage and display it
        function loadImageFromLocalStorage(imageId, key) {
            var imageData = localStorage.getItem(key);

            if (imageData) {
                var imgElement = document.getElementById(imageId);
                imgElement.src = imageData;
            }
        }

        // Add an event listener to the "Confirm" button to call the saveFormDataToLocalStorage function
        const confirmButton = document.querySelector('input[name="nextFinish"]');
        if (confirmButton) {
            confirmButton.addEventListener('click', saveFormDataToLocalStorage);
        }
    </script>
@endsection
