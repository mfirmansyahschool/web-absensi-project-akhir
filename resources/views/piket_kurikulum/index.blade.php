@extends('layouts.main')

@section('sidebar')
    @include('layouts._sidebar._piketkurikulum')
@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
            @foreach ($angkatans as $angkatan)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon" style="background: linear-gradient(60deg, #f857f2, #ec09e4)">
                                <i class="material-icons">{{ $angkatan->angkatan }}</i>
                            </div>
                            <p class="card-category">Jumlah Siswa</p>
                            <h3 class="card-title">{{ $angkatan->rombels->load('students')->count() }}
                                <small>siswa</small>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-dark">info_outline</i>
                                <a href="#see-detail" data-toggle="modal">Lihat lebih lanjut...</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon">
                        <div class="card-icon w-100" style="background: #f6f6f6;">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card" style="background: linear-gradient(60deg, #f857f2, #ec09e4)">
                                        <div class="card-body text-white">
                                            <table>
                                                <tr>
                                                    <td>Keterangan</td>
                                                    <td></td>
                                                    <td>Rata-Rata*</td>
                                                </tr>
                                                <tr>
                                                    <td>Masuk</td>
                                                    <td style="padding: 0 10px;">:</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakit</td>
                                                    <td style="padding: 0 10px;">:</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanpa Keterangan</td>
                                                    <td style="padding: 0 10px;">:</td>
                                                    <td>1</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="background: linear-gradient(60deg, #09b8f9, #0baae5)">
                                        <div class="card-body text-white">
                                            <table>
                                                <tr>
                                                    <td>Keterangan</td>
                                                    <td></td>
                                                    <td>Rata-Rata*</td>
                                                </tr>
                                                <tr>
                                                    <td>Masuk</td>
                                                    <td style="padding: 0 10px;">:</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakit</td>
                                                    <td style="padding: 0 10px;">:</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanpa Keterangan</td>
                                                    <td style="padding: 0 10px;">:</td>
                                                    <td>1</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card" style="background: linear-gradient(60deg, #f8ff39, #d9e10a)">
                                        <div class="card-body text-white font-weight-bold">
                                            <table>
                                                <tr>
                                                    <td>Keterangan</td>
                                                    <td></td>
                                                    <td>Rata-Rata*</td>
                                                </tr>
                                                <tr>
                                                    <td>Masuk</td>
                                                    <td style="padding: 0 10px;">:</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakit</td>
                                                    <td style="padding: 0 10px;">:</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanpa Keterangan</td>
                                                    <td style="padding: 0 10px;">:</td>
                                                    <td>1</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">*Selama satu minggu</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="see-detail">
    <div class="modal-dialog">
            <div class="modal-content card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon" style="background: linear-gradient(60deg, #f8ff39, #d9e10a)">
                        <i class="material-icons">XII</i>
                    </div>
                    <p class="card-category">Hadir hari ini</p>
                    <h3 class="card-title">49/50
                        <small>siswa</small>
                    </h3>
                </div>
                <div class="card-body text-left">
                    <table class="table table-responsive-md table-borderless">
                        <thead>
                            <th>Rombel</th>
                            <th class="text-center">M</th>
                            <th class="text-center">S</th>
                            <th class="text-center">A</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rekayasa Perangkat Lunak</td>
                                <td class="text-center">30</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td>Teknik Komputer Jaringan</td>
                                <td class="text-center">30</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td>Otomatisasi Tatakelola Perkantoran</td>
                                <td class="text-center">30</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td>Bisnis Daring dan Pemasaran</td>
                                <td class="text-center">30</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td>Multimedia</td>
                                <td class="text-center">30</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td>Tataboga</td>
                                <td class="text-center">30</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <td>Perhotelan</td>
                                <td class="text-center">30</td>
                                <td class="text-center">1</td>
                                <td class="text-center">0</td>
                            </tr>
                        </tbody>
                        <tfoot class="border-top">
                            <th></th>
                            <td class="text-center font-weight-bold">30</td>
                            <td class="text-center font-weight-bold">1</td>
                            <td class="text-center font-weight-bold">0</td>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer" style="margin-top: -30px;">
                    <button class="btn btn-sm btn-danger" data-dismiss="modal" style="right: 0; display: block">Close</button>
                </div>
            </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{asset('js/chart.js')}}"></script>
    <script>

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ['23', '24', '25', '26', '27'],
                datasets: [{
                    label: 'X',
                    backgroundColor: '#f857f2',
                    borderColor: '#ec09e4',
                    data: [20, 20, 20, 18, 19]
                },
                {
                    label: 'XI',
                    backgroundColor: '#09b8f9',
                    borderColor: '#0baae5',
                    data: [19, 18, 17, 19, 19]
                },
                {
                    label: 'XII',
                    backgroundColor: '#f8ff39',
                    borderColor: '#d9e10a',
                    data: [18, 13, 16, 0, 18]
                }]
            },
            // Configuration options go here
            options: {
                
            }
        });

    </script>
@endsection