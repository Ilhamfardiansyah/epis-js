<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('paper.css') }}">

    <style>
        @page {
            size: A4
        }

        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }
    </style>
    <title>Print Data Pegawai</title>
</head>


<body class="A4"
    style="font-family: Arial, sans-serif;
font-size: 12pt;
line-height: 1.5;
margin: 0;
padding: 0;
position:relative;">

    <section class="sheet padding-10mm">

        <div style="margin:0 1rem; display: flex; justify-content: end; align-items:center">
            <span style="padding: 0.5rem 1rem; border:1px solid #000000">No Pass :
                {{ $dataPegawai->nopassring ?? '' }}</span>
        </div>
        <br>
        <h3 style="text-align: center">BIODATA PERSONEL</h3>
        <div style="margin:0 1rem; display: flex; justify-content: center; align-items:center">
            <table style="padding: 0.5rem 1rem; border:1px solid #000000">
                <tr>
                    <td><img src="{{ asset($dataPegawai->siyalem->data_fotos->depan_pic ?? 'not found') }}"
                            alt="Not Image" width="108px"></td>
                    <td><img src="{{ asset($dataPegawai->siyalem->data_fotos->kanan_pic ?? 'not found') }}"
                            alt="Not Image" width="108px"></td>
                    <td><img src="{{ asset($dataPegawai->siyalem->data_fotos->kiri_pic ?? 'not found') }}"
                            alt="Not Image" width="108px"></td>
                    <td><img src="{{ asset($dataPegawai->siyalem->data_fotos->sidik_pic ?? 'not found') }}"
                            alt="Not Image" width="108px"></td>
                </tr>
            </table>
        </div>
        <table style="margin: 25px">
            <tr>
                <td style="width: 1em; vertical-align: top;">1.</td>
                <td style="width: 20em; vertical-align: top;">Nama</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->nama ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">2.</td>
                <td style="width: 20em; vertical-align: top;">Pangkat</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->pangkat ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">3.</td>
                <td style="width: 20em; vertical-align: top;">NRP</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->NRP ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">4.</td>
                <td style="width: 20em; vertical-align: top;">Jabatan</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->jabatan ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">5.</td>
                <td style="width: 20em; vertical-align: top;">Kesatuan</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->kesatuan ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">6.</td>
                <td style="width: 20em; vertical-align: top;">No Passring</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->nopassring ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">7.</td>
                <td style="width: 20em; vertical-align: top;">Tanda Jasa</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->tandajasa ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">8.</td>
                <td style="width: 20em; vertical-align: top;">TGL / Umur</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->tgl ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">9.</td>
                <td style="width: 20em; vertical-align: top;">Suku Bangsa</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->suku ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">10.</td>
                <td style="width: 20em; vertical-align: top;">Agama</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->agama ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">11.</td>
                <td style="width: 20em; vertical-align: top;">Tinggi / Berat</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->tinggi ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">12.</td>
                <td style="width: 20em; vertical-align: top;">Warna Kulit</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->warnakulit ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">13.</td>
                <td style="width: 20em; vertical-align: top;">Mata</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->mata ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">14.</td>
                <td style="width: 20em; vertical-align: top;">Rambut</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->rambut ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">15.</td>
                <td style="width: 20em; vertical-align: top;">Gol Darah</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->goldarah ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">16.</td>
                <td style="width: 20em; vertical-align: top;">Alamat Sekarang</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->alamatsekarang ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">17.</td>
                <td style="width: 20em; vertical-align: top;">Nama Ayah/Alamat</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->ayahalamat ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">18.</td>
                <td style="width: 20em; vertical-align: top;">Nama Ibu/Alamat</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->ibualamat ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">19.</td>
                <td style="width: 20em; vertical-align: top;">Nama Istri/Alamat</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->istrialamat ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">20.</td>
                <td style="width: 20em; vertical-align: top;">Tempat/No Akte Nikah</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->tempatnikah ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">21.</td>
                <td style="width: 20em; vertical-align: top;">Nama Anak Kandung</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->namaanak ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">22.</td>
                <td style="width: 20em; vertical-align: top;">Nama Ortu Istri/Suami</td>
                <td style="width: 1em; vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->ortuistrialamat ?? '' }}</td>
            </tr>


        </table>

    </section>

    <section class="sheet padding-10mm">
        <br>
        <h3 style="text-align: center">SIYALEMENS</h3>
        <br>
        <table style="margin: 25px">
            <tr>
                <td style="width: 1em; vertical-align: top;">1.</td>
                <td style="width: 20em; vertical-align: top;">Lembaga</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->lembaga ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">2.</td>
                <td style="width: 20em; vertical-align: top;">Sikap</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->sikap ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">3.</td>
                <td style="width: 20em; vertical-align: top;">Langkah</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->langkah ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">4.</td>
                <td style="width: 20em; vertical-align: top;">Bangun Kepala</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->bangun_kepala ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">5.</td>
                <td style="width: 20em; vertical-align: top;">Rambut</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->rambut ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">6.</td>
                <td style="width: 20em; vertical-align: top;">Kening</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->kening ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">7.</td>
                <td style="width: 20em; vertical-align: top;">Dahi</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->dahi ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">8.</td>
                <td style="width: 20em; vertical-align: top;">Hidung</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->hidung ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">10.</td>
                <td style="width: 20em; vertical-align: top;">Telinga</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->telinga ?? '' }}</td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;; vertical-align: top;">11.</td>
                <td style="width: 20em; vertical-align: top;">Sudah Pernah Tersangkut Urusan Polisi Militer</td>
                <td style="vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->urusan_polisi_militer ?? '' }}
                </td>
            </tr>
            <tr>
                <td style="width: 1em; vertical-align: top;">12.</td>
                <td style="width: 20em; vertical-align: top;">Keterangan Foto</td>
                <td style="width: 1em; vertical-align: top">:</td>
                <td style="width: 35em; vertical-align: top;">{{ $dataPegawai->siyalem->data_fotos->ket_pic ?? '' }}
                </td>
            </tr>
        </table>
        <button onclick="window.print();" class="btn btn-success no-print"
            style="position: fixed; bottom:35px; right:10em;">Print</button>
        <form action="/home" method="get">
            <button class="btn btn-primary no-print" style="position: fixed; bottom:35px; right:5em;">Back</button>
        </form>
    </section>
</body>

</html>
