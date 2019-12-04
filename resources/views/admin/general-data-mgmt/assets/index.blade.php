@extends('layouts._body.admin')

@section('title', 'General Data - Assets')

@section('content')
<div class="section-body">
    <h2 class="section-title">Ikhtisar</h2>
    <p class="section-lead">Atur dan sesuaikan semua data umum yang berhubungan dengan aset.</p>
    @include('layouts._part.flash')

    <div class="row">
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="card-body">
                    <h4>Kondisi</h4>
                    <p>Referensi untuk kodisi aset.</p>
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
                    <h4>Pengelola</h4>
                    <p>Referensi untuk pengelola aset.</p>
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
                    <h4>Cara dapat</h4>
                    <p>Referensi untuk cara dapat aset.</p>
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
                    <h4>Tipe</h4>
                    <p>Referensi untuk tipe aset.</p>
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