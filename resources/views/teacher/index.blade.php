@extends('template.app')
@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3">
            <div class="col">
                <div class="card card-body shadow rounded rounded-4">
                    <div class="card-body">
                        <span class="top-header-widget fw-bold fs-4">Jumlah Siswa</span>
                        <div class="row">
                            <div class="col-6 my-auto">
                                <h1 class="total-header-widget">10</h1>
                            </div>
                            <div class="col-5 my-auto text-end">
                                <span class="badge bg-main p-2">Siswa</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-body shadow rounded rounded-4">
                    <div class="card-body">
                        <span class="top-header-widget fw-bold fs-4">Jumlah Kelas</span>
                        <div class="row">
                            <div class="col-6 my-auto">
                                <h1 class="total-header-widget">7</h1>
                            </div>
                            <div class="col-5 my-auto text-end">
                                <span class="badge bg-main p-2">Kelas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-body shadow rounded rounded-4">
                    <div class="card-body">
                        <span class="top-header-widget fw-bold fs-4">Soal Dibuat</span>
                        <div class="row">
                            <div class="col-6 my-auto">
                                <h1 class="total-header-widget">15</h1>
                            </div>
                            <div class="col-5 my-auto text-end">
                                <span class="badge bg-main p-2">Soal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body shadow mt-5 mb-5 rounded ronded-3">
            <div id="columnchart_material" style="width: 100%; height: 500px;"></div>
        </div>
    </div>

    @push('top-script')
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['bar']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Tahun', 'X-RPL3', 'X-RPL2', 'XI-RPL2', 'XI-RPL3', 'XII-RPL2',
                        'XII-1'
                    ],
                    ['2022', 10, 4, 2, 7, 5, 6]
                ]);

                var options = {
                    chart: {
                        title: 'Grafik Pengumpulan Semua Tugas',
                        subtitle: 'Kelas yang di ajar',
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>
    @endpush
@endsection
