<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet"
            type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12">
                    <h1 class="text-center">
                        SPK Metode SAW
                    </h1>
                    <hr>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-8">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Data Pegawai</h5>

                            <table class="table table-sm table-bordered">
                                <thead>
                                    <th>#</th>
                                    <th>Nama Pegawai</th>
                                    <th>Pendidikan</th>
                                    <th>Usia</th>
                                    <th>Pengalamaan</th>
                                </thead>
                                <tbody>
                                    @php $i = 0; @endphp @foreach ($pegawai as $item)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $item->nama_pegawai }}</td>
                                        <td>{{ $item->pendidikan }}</td>
                                        <td>{{ $item->usia }}</td>
                                        <td>{{ $item->pengalaman }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Kriteria</h5>

                            <table class="table table-sm table-bordered">
                                <thead>
                                    <th>#</th>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Jenis</th>
                                </thead>
                                <tbody>
                                    @php $i = 0; @endphp @foreach ($kriteria as $item)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $item->kriteria }}</td>
                                        <td>{{ $item->bobot }}</td>
                                        <td>{{ $item->jenis }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row mt-5">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Normalisasi</h5>
                            <table class="table table-sm table-bordered">
                                    <thead>
                                        <th>#</th>
                                        <th>Nama Pegawai</th>
                                        <th>Pendidikan</th>
                                        <th>Usia</th>
                                        <th>Pengalamaan</th>
                                    </thead>
                                    <tbody>
                                        @php $i = 0; @endphp @foreach ($normalisasi as $item)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $item['nama_pegawai'] }}</td>
                                            <td>{{ $item['pendidikan'] }}</td>
                                            <td>{{ $item['usia'] }}</td>
                                            <td>{{ $item['pengalaman'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ranking</h5>
                            <table class="table table-sm table-bordered">
                                    <thead>
                                        <th>#</th>
                                        <th>Nama Pegawai</th>
                                        <th>Ranking</th>
                                    </thead>
                                    <tbody>
                                        @php $i = 0; @endphp @foreach ($ranking as $item)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $item['nama_pegawai'] }}</td>
                                            <td>{{ $item['ranking'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>