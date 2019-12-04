@extends('layouts._body.admin')

@section('title', 'General Data - Zone')

@section('content')
<div class="section-body">
    <h2 class="section-title">Ikhtisar</h2>
    <p class="section-lead">Atur dan sesuaikan semua data umum yang berhubungan dengan wilayah.</p>
    @include('layouts._part.flash')

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="card-body">
                    <h4>Kabupaten/Kota</h4>
                    <p>Referensi untuk Kabupaten/Kota.</p>
                    <a href="features-setting-detail.html" class="card-cta">
                        Selengkapnya
                       <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="card-body">
                    <h4>Kecamatan</h4>
                    <p>Referensi untuk Kecamatan.</p>
                    <a href="features-setting-detail.html" class="card-cta">
                        Selengkapnya
                       <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="card-body">
                    <h4>Kelurahan</h4>
                    <p>Referensi untuk Kelurahan.</p>
                    <a href="features-setting-detail.html" class="card-cta">
                      Selengkapnya
                       <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="card-body">
                    <h4>Topografi</h4>
                    <p>Referensi untuk Topografi.</p>
                    <a href="features-setting-detail.html" class="card-cta">
                      Selengkapnya
                       <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="card-body">
                    <h4>Wilayah</h4>
                    <p>Referensi untuk Wilayah.</p>
                    <a href="features-setting-detail.html" class="card-cta">
                      Selengkapnya
                       <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="card-body">
                    <h4>Kedudukan</h4>
                    <p>Referensi untuk Kedudukan.</p>
                    <a href="features-setting-detail.html" class="card-cta">
                      Selengkapnya
                       <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('custom-include')

@endsection

@section('custom-script')

@endsection