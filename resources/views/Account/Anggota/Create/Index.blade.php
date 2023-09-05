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
            font-family: montserrat;
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
                                                    <strong>Account</strong>
                                                </li>
                                                <li id="personal"><strong>Personal</strong></li>
                                                <li id="payment"><strong>Payment</strong></li>
                                                <li id="confirm"><strong>Finish</strong></li>
                                            </ul>
                                            <!-- fieldsets -->
                                            <fieldset>
                                                <div class="form-card">

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
                                                    <h2 class="fs-title">Personal Information</h2>
                                                    <input type="text" name="fname" placeholder="First Name" />
                                                    <input type="text" name="lname" placeholder="Last Name" />
                                                    <input type="text" name="phno" placeholder="Contact No." />
                                                    <input type="text" name="phno_2"
                                                        placeholder="Alternate Contact No." />
                                                </div>
                                                <input type="button" name="previous"
                                                    class="previous action-button-previous" value="Previous" />
                                                <input type="button" name="next" class="next action-button"
                                                    value="Next Step" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Payment Information</h2>
                                                    <div class="radio-group">
                                                        <div class='radio' data-value="credit"><img
                                                                src="https://i.imgur.com/XzOzVHZ.jpg" width="200px"
                                                                height="100px"></div>
                                                        <div class='radio' data-value="paypal"><img
                                                                src="https://i.imgur.com/jXjwZlj.jpg" width="200px"
                                                                height="100px"></div>
                                                        <br>
                                                    </div>
                                                    <label class="pay">Card Holder Name*</label>
                                                    <input type="text" name="holdername" placeholder="" />
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <label class="pay">Card Number*</label>
                                                            <input type="text" name="cardno" placeholder="" />
                                                        </div>
                                                        <div class="col-3">
                                                            <label class="pay">CVC*</label>
                                                            <input type="password" name="cvcpwd" placeholder="***" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="pay">Expiry Date*</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <select class="list-dt" id="month" name="expmonth">
                                                                <option selected>Month</option>
                                                                <option>January</option>
                                                                <option>February</option>
                                                                <option>March</option>
                                                                <option>April</option>
                                                                <option>May</option>
                                                                <option>June</option>
                                                                <option>July</option>
                                                                <option>August</option>
                                                                <option>September</option>
                                                                <option>October</option>
                                                                <option>November</option>
                                                                <option>December</option>
                                                            </select>
                                                            <select class="list-dt" id="year" name="expyear">
                                                                <option selected>Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="button" name="previous"
                                                    class="previous action-button-previous" value="Previous" />
                                                <input type="button" name="make_payment" class="next action-button"
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

        // Add an event listener to the "Next" button to call the saveFormDataToLocalStorage function
        const nextButton = document.querySelector('.next button');
        if (nextButton) {
            nextButton.addEventListener('click', saveFormDataToLocalStorage);
        }
    </script>
@endsection
