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
                                <h3>Export iDesign <img src={{ asset('assets/img/main_logo.png') }} width="150px"></h3>
                                <p class="mb-0"></p><a class="btn btn-link btn-sm ps-0 mt-2"
                                    href="https://getbootstrap.com/docs/5.1/forms/layout" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body bg-light">
                        <div class="tab-content">
                            <form action="/dashboard/export/file" method="GET">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-nama">Scan No Pass Ring</label>
                                    <input class="form-control @error('nopassring') is-invalid @enderror" id="nopassring"
                                        name="nopassring" type="text" placeholder="Scan No Pass Ring"
                                        value="{{ old('nopassring') }}" autofocus autocomplete />
                                    @error('nopassring')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </form>
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
                            </div>

                            <div class="mb-3 d-flex justify-content-end">
                                <a type="button" href="/dashboard/export/file" class="btn btn-danger me-2">Clear</a>
                                <button type="button" id="exportBtn" class="btn btn-primary">Export</button>
                            </div>
                            <div class="table-responsive scrollbar">
                                <table id="table" class="display nowrap table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NO PASSRING</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Pangkat</th>
                                            <th class="text-center">NRP</th>
                                            <th class="text-center">Jabatan_1</th>
                                            <th class="text-center">Kesatuan</th>
                                            <th class="text-center">Tempat dan Tanggal Pembuatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $dataPegawai->nopassring }}</td>
                                            <td class="text-center">{{ $dataPegawai->nama }}</td>
                                            <td class="text-center">{{ $dataPegawai->pangkat }}</td>
                                            <td class="text-center">{{ $dataPegawai->NRP }}</td>
                                            <td class="text-center">{{ $dataPegawai->jabatan }}</td>
                                            <td class="text-center">{{ $dataPegawai->kesatuan }}</td>
                                            <td id="ttp" class="text-center">
                                                {{ \Carbon\Carbon::parse($dataPegawai->created_at)->locale('id-ID')->isoFormat('LL') }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <!-- Add this to the <head> section of your HTML file -->
    <script src={{ asset('assets/js/xlsx.core.min.js') }}></script>
    <script>
        document.getElementById("exportBtn").addEventListener("click", function() {

            let wilayah = prompt("Masukan wilayah cetak?", "Jakarta")

            if (wilayah != null) {
                const ttp = document.getElementById("ttp")
                const ttpText = ttp.innerText
                ttp.innerText = wilayah + ', ' + ttpText
            }

            // Select the table element
            const table = document.getElementById("table");

            // Convert the table to a worksheet
            const ws = XLSX.utils.table_to_sheet(table, {
                raw: true,
                cellText: true
            });

            // Create a workbook with the worksheet
            const wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "Sheet1");

            // Export the workbook to .xls format
            XLSX.writeFile(wb, "{{ $dataPegawai->nopassring }}.xls");
        });
    </script>
@endpush
