<form action="/dashboard/update/siyalems/{{ $dataPegawai->id }}" method="post">
    @csrf

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="lembaga">Lembaga (Adegan)</label>
        <select class="form-select" id="basic-form-gender" name="lembaga" aria-label="Default select example">
            <option selected disabled>--Pilih Lembaga--</option>
            <option value="Kuat"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->lembaga === 'Kuat' ? 'selected' : '' }}>
                Kuat
            </option>
            <option value="Tegak"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->lembaga === 'Tegak' ? 'selected' : '' }}>
                Tegak
            </option>
            <option value="Lempai"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->lembaga === 'Lempai' ? 'selected' : '' }}>
                Lempai
            </option>
            <option value="Lemah"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->lembaga === 'Lemah' ? 'selected' : '' }}>
                Lemah
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->lembaga === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>


    <div class="col-sm-12 mb-3">
        <label class="form-label" for="sikap">Sikap</label>
        <select class="form-select" id="basic-form-gender" name="sikap" aria-label="Default select example">
            <option selected disabled>--Pilih Sikap--</option>
            <option value="Tegak"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->sikap === 'Tegak' ? 'selected' : '' }}>
                Tegak
            </option>
            <option value="Gagah"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->sikap === 'Gagah' ? 'selected' : '' }}>
                Gagah
            </option>
            <option value="Bungkok"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->sikap === 'Bungkok' ? 'selected' : '' }}>
                Bungkok
            </option>
            <option value="Kepal Tunduk Kaku"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->sikap === 'Kepal Tunduk Kaku' ? 'selected' : '' }}>
                Kepal Tunduk Kaku
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->sikap === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>


    <div class="mb-3">
        <label class="form-label" for="basic-form-gender">Langkah</label>
        <select class="form-select" id="basic-form-gender" name="langkah" aria-label="Default select example">
            <option selected disabled>--Pilih Langkah--</option>
            <option value="lenting"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->langkah === 'lenting' ? 'selected' : '' }}>
                lenting
            </option>
            <option value="tenang"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->langkah === 'tenang' ? 'selected' : '' }}>
                tenang
            </option>
            <option value="Langkah Panjang"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->langkah === 'Langkah Panjang' ? 'selected' : '' }}>
                Langkah Panjang
            </option>
            <option value="Langkah Pendek"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->langkah === 'Langkah Pendek' ? 'selected' : '' }}>
                Langkah Pendek
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->langkah === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain</option>
        </select>
        @error('langkah')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="bangun_kepala">Bangun Kepala</label>
        <select class="form-select" id="basic-form-gender" name="bangun_kepala" aria-label="Default select example">
            <option selected disabled>--Pilih Bangun Kepala--</option>
            <option value="Sebagai Pangkal"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bangun_kepala === 'Sebagai Pangkal' ? 'selected' : '' }}>
                Sebagai Pangkal
            </option>
            <option value="Belah Ketupat"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bangun_kepala === 'Belah Ketupat' ? 'selected' : '' }}>
                Belah Ketupat
            </option>
            <option value="Bulat"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bangun_kepala === 'Bulat' ? 'selected' : '' }}>
                Bulat
            </option>
            <option value="Lonjong"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bangun_kepala === 'Lonjong' ? 'selected' : '' }}>
                Lonjong
            </option>
            <option value="Jorong"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bangun_kepala === 'Jorong' ? 'selected' : '' }}>
                Jorong
            </option>
            <option value="Panjang"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bangun_kepala === 'Panjang' ? 'selected' : '' }}>
                Panjang
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bangun_kepala === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="rambut">Rambut</label>
        <select class="form-select" id="basic-form-gender" name="rambut" aria-label="Default select example">
            <option selected disabled>--Pilih Rambut--</option>
            <option value="Lebat/Jarang"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->rambut === 'Lebat/Jarang' ? 'selected' : '' }}>
                Lebat/Jarang
            </option>
            <option value="Berombak/Kejur"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->rambut === 'Berombak/Kejur' ? 'selected' : '' }}>
                Berombak/Kejur
            </option>
            <option value="Kejur/Keriting"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->rambut === 'Kejur/Keriting' ? 'selected' : '' }}>
                Kejur/Keriting
            </option>
            <option value="Tegak"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->rambut === 'Tegak' ? 'selected' : '' }}>
                Tegak
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->rambut === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="kening">Kening</label>
        <select class="form-select" id="basic-form-gender" name="kening" aria-label="Default select example">
            <option selected disabled>--Pilih Kening--</option>
            <option value="Rata"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->kening === 'Rata' ? 'selected' : '' }}>
                Rata
            </option>
            <option value="Miring"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->kening === 'Miring' ? 'selected' : '' }}>
                Miring
            </option>
            <option value="KeAtas/KeBawah"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->kening === 'KeAtas/KeBawah' ? 'selected' : '' }}>
                Ke Atas / KeBawah
            </option>
            <option value="Bertemu seteu dengan yang lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->kening === 'Bertemu seteu dengan yang lain' ? 'selected' : '' }}>
                Bertemu seteu dengan yang lain
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->kening === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="dahi">Dahi</label>
        <select class="form-select" id="basic-form-gender" name="dahi" aria-label="Default select example">
            <option selected disabled>--Pilih Dahi--</option>
            <option value="Loncos Ke Belakang/Lurus Kebawah"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->dahi === 'Loncos Ke Belakang/Lurus Kebawah' ? 'selected' : '' }}>
                Loncos Ke Belakang/Lurus Kebawah
            </option>
            <option value="Cenderung ke belakang"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->dahi === 'Cenderung ke belakang' ? 'selected' : '' }}>
                Cenderung ke belakang
            </option>
            <option value="Melengkung Keras"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->dahi === 'Melengkung Keras' ? 'selected' : '' }}>
                Melengkung Keras
            </option>
            <option value="tinggi/rendah lebar ciut"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->dahi === 'tinggi/rendah lebar ciut' ? 'selected' : '' }}>
                tinggi/rendah lebar ciut
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->dahi === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="hidung">Hidung</label>
        <select class="form-select" id="basic-form-gender" name="hidung" aria-label="Default select example">
            <option selected disabled>--Pilih Hidung--</option>
            <option value="Pangkalnya Rata/Masuk kedalam"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->hidung === 'Pangkalnya Rata/Masuk kedalam' ? 'selected' : '' }}>
                Pangkalnya Rata/Masuk kedalam
            </option>
            <option value="Batangnya : Membentuk kedalam/keluar lurus, alasnya menuju ke atas"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->hidung === 'Batangnya : Membentuk kedalam/keluar lurus, alasnya menuju ke atas' ? 'selected' : '' }}>
                Batangnya : Membentuk kedalam/keluar lurus, alasnya menuju ke atas
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->hidung === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="bibir">Bibir</label>
        <select class="form-select" id="basic-form-gender" name="bibir" aria-label="Default select example">
            <option selected disabled>--Pilih Bibir--</option>
            <option value="Tebal"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bibir === 'Tebal' ? 'selected' : '' }}>
                Tebal
            </option>
            <option value="Tipis"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bibir === 'Tipis' ? 'selected' : '' }}>
                Tipis
            </option>
            <option value="Sumbing"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bibir === 'Sumbing' ? 'selected' : '' }}>
                Sumbing
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->bibir === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="telinga">Telinga</label>
        <select class="form-select" id="basic-form-gender" name="telinga" aria-label="Default select example">
            <option selected disabled>--Pilih Telinga--</option>
            <option value="Bulat bujur tiga penjuru dari belakang"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->telinga === 'Bulat bujur tiga penjuru dari belakang' ? 'selected' : '' }}>
                Bulat bujur tiga penjuru dari belakang
            </option>
            <option value="Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->telinga === 'Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang' ? 'selected' : '' }}>
                Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang
            </option>
            <option value="bentuk cuping berupa baja persegi/melengkukng/bergonta-ganti rata/tebal/benar"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->telinga === 'bentuk cuping berupa baja persegi/melengkukng/bergonta-ganti rata/tebal/benar' ? 'selected' : '' }}>
                bentuk cuping berupa baja persegi/melengkukng/bergonta-ganti rata/tebal/benar
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->telinga === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>

    <div class="col-sm-12 mb-3">
        <label class="form-label" for="urusan_polisi_militer">Urusan Polisi Militer</label>
        <select class="form-select" id="basic-form-gender" name="urusan_polisi_militer"
            aria-label="Default select example">
            <option selected disabled>--Pilih Urusan Polisi Militer--</option>
            <option value="Pernah"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->urusan_polisi_militer === 'Pernah' ? 'selected' : '' }}>
                Pernah
            </option>
            <option value="Tidak Pernah"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->urusan_polisi_militer === 'Tidak Pernah' ? 'selected' : '' }}>
                Tidak Pernah
            </option>
            <option value="Lain-Lain"
                {{ isset($dataPegawai->siyalem) && $dataPegawai->siyalem->urusan_polisi_militer === 'Lain-Lain' ? 'selected' : '' }}>
                Lain-Lain
            </option>
        </select>
    </div>

    <button class="btn btn-primary" type="submit">Edit
        Siyalemens
    </button>
</form>
