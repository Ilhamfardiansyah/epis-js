<?php

namespace App\Http\Controllers\Account;

use Alert;
use Dotenv\Validator;
use App\Models\Siyalem;
use App\Models\DataFoto;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PegawaiContrroller extends Controller
{
    public function index()
    {
        return view('Account.Anggota.Create');
    }


    // Input Anggota
    public function create()
    {
        return view('Account.Anggota.Create.Index');
    }

    public function store(Request $request): RedirectResponse
    {
        $validateData = $request->validate([
            'nopassring' => 'required|unique:data_pegawais',
            'nama' => 'required',
            'pangkat' => 'required',
            'NRP' => 'required|unique:data_pegawais',
            'jabatan' => 'required',
            'kesatuan' => 'required',
            'tandajasa' => 'required',
            'tgl' => 'required',
            'warnakulit' => 'required',
            'mata' => 'required',
            'rambut' => 'required',
            'goldarah' => 'required',
            'jenis' => 'required',
            'alamatsekarang' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'tinggi' => 'required',
            'ayahalamat' => 'required',
            'ibualamat' => 'required',
            'istrialamat' => 'required',
            'tempatnikah' => 'required',
            'namaanak' => 'required',
            'ortuistrialamat' => 'required'
        ]);

        $pegawai = DataPegawai::create($validateData);
        Alert::info('Jangan Kembali Dari Halaman Ini', 'Lanjutkan jika ada salah penginputan lakukan edit data');
        return redirect()->route('siyalemen.create', $pegawai->id);
    }


    // Create Data Siyalemen
    public function create_sylm(DataPegawai $dataPegawai)
    {
        return view('Account.Anggota.Create.Siyalemen', compact('dataPegawai'));
    }

    // Store Data Siyalem
    public function store_sylm(Request $request, DataPegawai $dataPegawai)
    {
        $validateData = $request->validate([
            'datapegawai_id' => 'required',
            'lembaga' => 'required',
            'sikap' => 'required',
            'langkah' => 'required',
            'bangun_kepala' => 'required',
            'rambut' => 'required',
            'kening' => 'required',
            'dahi' => 'required',
            'hidung' => 'required',
            'bibir' => 'required',
            'telinga' => 'required',
            'urusan_polisi_militer' => 'required',
        ]);

        $siyalem = Siyalem::create($validateData);
        Alert::info('Jangan Kembali Dari Halaman Ini', 'Lanjutkan jika ada salah penginputan lakukan edit data');

        return redirect()->route('photo.create', $siyalem->id);
    }

    public function create_foto(Siyalem $siyalem)
    {
        $data = DataPegawai::all();
        return view('Account.Anggota.Create.Foto', compact('siyalem', 'data'));
    }

    public function store_photo(Request $request, Siyalem $siyalem)
    {
        // dd($siyalem->all());
        $validateData = $request->validate([
            'siyalem_id' => 'required',
            'ket_pic' => 'required',
            'depan_pic' => 'required|image|mimes:png,jpg,jpeg',
            'kanan_pic' => 'required|image|mimes:png,jpg,jpeg',
            'kiri_pic' => 'required|image|mimes:png,jpg,jpeg',
            'sidik_pic' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        // upload foto depan
        $fotoDepan = $this->storeImage($request->file('depan_pic'), 'foto_depan');
        $validateData['depan_pic'] = $fotoDepan;

        // upload foto kanan
        $fotoKanan = $this->storeImage($request->file('kanan_pic'), 'foto_kanan');
        $validateData['kanan_pic'] = $fotoKanan;

        // upload foto kiri
        $fotoKiri = $this->storeImage($request->file('kiri_pic'), 'foto_kiri');
        $validateData['kiri_pic'] = $fotoKiri;

        // upload sidik jari
        $fotoSidik = $this->storeImage($request->file('sidik_pic'), 'sidik_kiri');
        $validateData['sidik_pic'] = $fotoSidik;

        // create
        $datafoto = DataFoto::create($validateData);
        toast('Data berhasil tersimpan', 'success');
        return redirect()->route('cetak.pegawai', $datafoto->id);
    }

    // Hapus Data Pegawai
    public function destroy($id)
    {
        DB::table('data_pegawais')->where('id', $id)->delete();
        toast('Data Pegawai Berhasil Dihapus', 'error');
        return back();
    }



    // View Data Pegawai
    public function edit(DataPegawai $dataPegawai)
    {
        return view('Account/Anggota/Create/Edit', compact('dataPegawai'));
    }


    public function update_foto(Request $request, DataPegawai $dataPegawai): RedirectResponse
{
    // Retrieve or create the Siyalem data for the given DataPegawai
    $siyalem = Siyalem::firstOrCreate(['datapegawai_id' => $dataPegawai->id]);

    // Validasi data
    $validated = $this->validate($request, [
        'kanan_pic' => 'image|mimes:png,jpg,jpeg',
        'kiri_pic' => 'image|mimes:png,jpg,jpeg',
        'sidik_pic' => 'image|mimes:png,jpg,jpeg',
        'depan_pic' => 'image|mimes:png,jpg,jpeg',
        'ket_pic' => ''
    ]);

    // Upload foto depan
    if ($request->file('depan_pic')) {
        $fotoDepanUpdate = $this->storeImage($request->file('depan_pic'), 'foto_depan');
        $validated['depan_pic'] = $fotoDepanUpdate;
    }

    // Upload foto kanan
    if ($request->file('kanan_pic')) {
        $fotoKananUpdate = $this->storeImage($request->file('kanan_pic'), 'foto_kanan');
        $validated['kanan_pic'] = $fotoKananUpdate;
    }

    // Upload foto kiri
    if ($request->file('kiri_pic')) {
        $fotoKiriUpdate = $this->storeImage($request->file('kiri_pic'), 'foto_kiri');
        $validated['kiri_pic'] = $fotoKiriUpdate;
    }

    // Upload sidik jari
    if ($request->file('sidik_pic')) {
        $fotoSidikUpdate = $this->storeImage($request->file('sidik_pic'), 'sidik_pic');
        $validated['sidik_pic'] = $fotoSidikUpdate;
    }

    // Update data_fotos or create if it doesn't exist
    $siyalem->data_fotos()->updateOrCreate([], $validated);

    // Return
    alert()->success('Data Foto', 'Berhasil Di Edit');
    return back();
}



    public function update_data(Request $request, $id)
    {
        // Validasi data yang dikirim dari form
        $validatedData = $request->validate([
            'nopassring' => 'required',
            'nama' => 'required',
            'pangkat' => 'required',
            'NRP' => 'required',
            'jabatan' => 'required',
            'kesatuan' => 'required',
            'tandajasa' => 'required',
            'tgl' => 'required',
            'warnakulit' => 'required',
            'mata' => 'required',
            'rambut' => 'required',
            'goldarah' => 'required',
            'jenis' => 'required',
            'alamatsekarang' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'tinggi' => 'required',
            'ayahalamat' => 'required',
            'ibualamat' => 'required',
            'istrialamat' => 'required',
            'tempatnikah' => 'required',
            'namaanak' => 'required',
            'ortuistrialamat' => 'required'
        ]);

        // Cari data dengan id tertentu yang akan diupdate
        $dataPegawai = DataPegawai::findOrFail($id);
        // Update data dengan data yang diterima dari form
        $dataPegawai->update($validatedData);

        alert()->success('Data Pegawai', 'Berhasil Di Edit');

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->back();
    }

    public function update_siyalem(Request $request, $id)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'lembaga' => 'required',
            'sikap' => 'required',
            'langkah' => 'required',
            'bangun_kepala' => 'required',
            'rambut' => 'required',
            'kening' => 'required',
            'dahi' => 'required',
            'hidung' => 'required',
            'bibir' => 'required',
            'telinga' => 'required',
            'urusan_polisi_militer' => 'required',
        ]);
        // dd($validateData);

        $siyalem = Siyalem::findOrFail($id);

        $siyalem->update($validateData);

        alert()->success('Data Siyalems', 'Berhasil Di Edit');

        return back();
    }

    private function storeImage($request, $route): string
    {
        // dapatkan extensi file
        $filenameExt = $request->getClientOriginalExtension();
        // dapatkan nama asli file
        $filenameWithExt = $request->getClientOriginalName();
        // nama tanpa ext
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // gabungkan nama yg telah di encode + waktu saat ini + ext file
        $filenameToStore = $filename . '_' . time() . '.' . $filenameExt;
        // path
        $path = 'public/' . $route;
        // upload image
        $request->storeAs($path, $filenameToStore);
        // return
        return 'storage/' . $route . '/' . $filenameToStore;
        // nb2: cara input ke db adalah, $nama->cover_image = $filenameToStore;
    }
}
