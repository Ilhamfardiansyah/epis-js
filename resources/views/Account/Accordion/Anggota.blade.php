<form action="/dashboard/update/data/{{ $dataPegawai->id }}" method="post">
    @csrf
    <div class="col-12 mb-3">
        <label class="form-label" for="nopassring">No
            Passring</label>
        <input class="form-control" id="basic-form-nopassring" name="nopassring"
            value="{{ $dataPegawai->nopassring ?? '' }}" type="text" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="nama">Nama
            Lengkap</label>
        <input class="form-control datetimepicker" id="nama" name="nama" type="text"
            value="{{ $dataPegawai->nama }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="pangkat">Pangkat</label>
        <input class="form-control datetimepicker" id="pangkat" name="pangkat" type="text"
            value="{{ $dataPegawai->pangkat }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="NRP">NRP</label>
        <input class="form-control datetimepicker" id="basic-form-nrp" name="NRP" type="text"
            value="{{ $dataPegawai->NRP }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="jabatan">Jabatan</label>
        <input class="form-control datetimepicker" id="jabatan" name="jabatan" type="text"
            value="{{ $dataPegawai->jabatan }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="kesatuan">Kesatuan</label>
        <input class="form-control datetimepicker" id="kesatuan" name="kesatuan" type="text"
            value="{{ $dataPegawai->kesatuan }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="tandajasa">tandajasa</label>
        <input class="form-control datetimepicker" id="tandajasa" name="tandajasa" type="text"
            value="{{ $dataPegawai->tandajasa }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="tgl">tgl</label>
        <input class="form-control datetimepicker" id="tgl" name="tgl" type="text"
            value="{{ $dataPegawai->tgl }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="suku">Suku</label>
        <input class="form-control datetimepicker" id="suku" name="suku" type="text"
            value="{{ $dataPegawai->suku }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="agama">Agama</label>
        <select class="form-select" id="basic-form-gender" name="agama" aria-label="Default select example">
            <option selected disabled>--Pilih Agama--
            </option>
            <option value="Islam" {{ $dataPegawai->agama === 'Islam' ? 'selected' : '' }}>
                Islam
            </option>
            <option value="Kristen Protestan" {{ $dataPegawai->agama === 'Kristen Protestan' ? 'selected' : '' }}>
                Kristen Protestan
            </option>
            <option value="Katolik" {{ $dataPegawai->agama === 'Katolik' ? 'selected' : '' }}>
                Katolik
            </option>
            <option value="Hindu" {{ $dataPegawai->agama === 'Hindu' ? 'selected' : '' }}>
                Hindu
            </option>
            <option value="Budha" {{ $dataPegawai->agama === 'Budha' ? 'selected' : '' }}>
                Budha
            </option>
            <option value="Konguchu" {{ $dataPegawai->agama === 'Konguchu' ? 'selected' : '' }}>
                Konguchu
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="tinggi">Tinggi</label>
        <input class="form-control datetimepicker" id="tinggi" name="tinggi" type="text"
            value="{{ $dataPegawai->tinggi }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="warnakulit">Warna
            Kulit</label>
        <input class="form-control datetimepicker" id="warnakulit" name="warnakulit" type="text"
            value="{{ $dataPegawai->warnakulit }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="mata">Mata</label>
        <input class="form-control datetimepicker" id="mata" name="mata" type="text"
            value="{{ $dataPegawai->mata }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="rambut">Rambut</label>
        <input class="form-control datetimepicker" id="rambut" name="rambut" type="text"
            value="{{ $dataPegawai->rambut }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="mata">Mata</label>
        <input class="form-control datetimepicker" id="mata" name="mata" type="text"
            value="{{ $dataPegawai->mata }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="goldarah">goldarah</label>
        <input class="form-control datetimepicker" id="goldarah" name="goldarah" type="text"
            value="{{ $dataPegawai->goldarah }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="alamatsekarang">Alamat
            Sekarang</label>
        <input class="form-control datetimepicker" id="alamatsekarang" name="alamatsekarang" type="text"
            value="{{ $dataPegawai->alamatsekarang }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="ayahalamat">Ayah dan
            Alamat</label>
        <input class="form-control datetimepicker" id="ayahalamat" name="ayahalamat" type="text"
            value="{{ $dataPegawai->ayahalamat }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="ibualamat">Ibu dan
            Alamat</label>
        <input class="form-control datetimepicker" id="ibualamat" name="ibualamat" type="text"
            value="{{ $dataPegawai->ibualamat }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="istrialamat">Istri
            dan
            Alamat</label>
        <input class="form-control datetimepicker" id="istrialamat" name="istrialamat" type="text"
            value="{{ $dataPegawai->istrialamat }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="tempatnikah">Tempat &
            Akte
            Nikah</label>
        <input class="form-control datetimepicker" id="tempatnikah" name="tempatnikah" type="text"
            value="{{ $dataPegawai->tempatnikah }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="namaanak">Nama
            Anak</label>
        <input class="form-control datetimepicker" id="namaanak" name="namaanak" type="text"
            value="{{ $dataPegawai->namaanak }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="ortuistrialamat">Ortu
            Istri dan
            Alamat</label>
        <input class="form-control datetimepicker" id="ortuistrialamat" name="ortuistrialamat" type="text"
            value="{{ $dataPegawai->ortuistrialamat }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="tempatnikah">Istri
            Alamat</label>
        <input class="form-control datetimepicker" id="tempatnikah" name="tempatnikah" type="text"
            value="{{ $dataPegawai->tempatnikah }}" />
    </div>

    <div class="col-12 sm-6 mb-3">
        <label class="form-label" for="jenis">Jenis
            Kelamin</label>
        <select class="form-select" id="basic-form-gender" name="jenis" aria-label="Default select example">
            <option selected disabled>--Pilih Jenis
                Kelamin--
            </option>
            <option value="Laki-laki" {{ $dataPegawai->jenis === 'Laki-laki' ? 'selected' : '' }}>
                Laki-Laki
            </option>
            <option value="Perempuan" {{ $dataPegawai->jenis === 'Perempuan' ? 'selected' : '' }}>
                Perempuan
            </option>
            <option value="Lain-Lain">Lain-Lain</option>
        </select>
    </div>
    <button class="btn btn-primary" type="submit">Edit
        Data
    </button>
</form>
