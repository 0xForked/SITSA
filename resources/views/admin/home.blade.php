@extends('layouts._body.admin')

@section('title', 'Beranda')

@section('content')
<div class="section-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-th-large"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Kolom</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-home"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Keluarga</h4>
                    </div>
                    <div class="card-body">
                        42
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Anggota</h4>
                    </div>
                    <div class="card-body">
                        1,201
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-calendar-week"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Periode Pelayanan</h4>
                    </div>
                    <div class="card-body">
                        2018-2022
                    </div>
                </div>
            </div>
            <div class="card card-statistic-1">
                <div class="card-header mb-4">
                    <span class="lead">
                        <i class="fas fa-male text-primary" style="font-size:50px !important"></i> {total}
                    </span>
                    <span class="lead float-right">
                        {total} <i class="fas fa-female text-primary" style="font-size:50px !important"></i>
                    </span>
                </div>
                <div class="card-body">
                   <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Male</div>
                        <div class="progress-bar bg-success" role="progressbar" style="width:100%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Female</div>
                    </div>
                </div>
                <div class="card-footer">
                    <span class="lead text-muted">{presentase}</span>
                    <span class="lead text-muted float-right">{presentase}</span>
                </div>
            </div>
            <div class="card card-statistic-1">
                <div class="card-header mb-4">
                    <span class="lead">
                        Baptis {total}
                    </span>
                    <span class="lead float-right">
                        {presentase}
                    </span>
                </div>
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer mb-4">
                    <span class="lead text-muted float-right">Belum Baptis {total}</span>
                </div>
            </div>
            <div class="card card-statistic-1">
                <div class="card-header mb-4">
                    <span class="lead">
                        Sidi {total}
                    </span>
                    <span class="lead float-right">
                        {presentase}
                    </span>
                </div>
                <div class="card-body">
                    <div class="progress">
                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="card-footer mb-4">
                    <span class="lead text-muted float-right">Belum Sidi {total}</span>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon">
                            <h5 class="mt-1">Anak</h5>
                        </div>
                        <div class="card-wrap text-right">
                            <div class="card-header">
                                {total}
                            </div>
                            <div class="card-body">
                                {presentase}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon">
                            <h5 class="mt-1">Remaja</h5>
                        </div>
                        <div class="card-wrap text-right">
                            <div class="card-header">
                                {total}
                            </div>
                            <div class="card-body">
                                {presentase}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon">
                            <h5 class="mt-1">Pemuda</h5>
                        </div>
                        <div class="card-wrap text-right">
                            <div class="card-header">
                                {total}
                            </div>
                            <div class="card-body">
                                {presentase}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon">
                            <h5 class="mt-1">Ibu</h5>
                        </div>
                        <div class="card-wrap text-right">
                            <div class="card-header">
                                {total}
                            </div>
                            <div class="card-body">
                                {presentase}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-statistic-1">
                       <div class="card-icon">
                            <h5 class="mt-1">Bapak</h5>
                        </div>
                        <div class="card-wrap text-right">
                            <div class="card-header">
                                {total}
                            </div>
                            <div class="card-body">
                                {presentase}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card card-statistic-1">
                        <div class="card-icon">
                            <h5 class="mt-1">Lansia</h5>
                        </div>
                        <div class="card-wrap text-right">
                            <div class="card-header">
                                {total}
                            </div>
                            <div class="card-body">
                                {presentase}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-statistic-1 p-4">
                        <div class="card-head mb-4">
                            <h5>Grafik Pekerjaan</h5>
                        </div>
                        <div class="card-body text-center mb-3">
                            <canvas id="myChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-script')
  <!-- JS Libraies -->
  <script src="{{ asset('assets/js/modules/chart.min.js') }}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/modules-chartjs.js') }}"></script>
@endsection
