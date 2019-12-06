@extends('layouts._body.admin')

@section('title', 'Data Wilayah - Kabupaten/Kota')

@section('content')
<div class="section-body">
    <h2 class="section-title">Kabupaten/Kota</h2>
    <p class="section-lead">Daftar referensi Kabupaten/Kota yang terdaftar</p>
    @include('layouts._part.flash')

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah baru</h4>
                </div>
                <div class="card-body">
                    <form
                        method="post"
                        action="{{ route('admin.region.districts.store') }}"
                    >
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kode</label>
                            <input type="number" name="code" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control h-auto" name="description"></textarea>
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary float-right"
                        >
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Kabupaten/Kota </h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.region.districts.index') }}"
                        >
                            <div class="input-group">
                                <input
                                    type="search"
                                    class="form-control"
                                    placeholder="Cari"
                                    name="search"
                                    value="{{ (app('request')->input('search')) ? app('request')->input('search') : ''}}"
                                >
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" value="search">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th rowspan="2" class="text-center">#</th>
                                <th rowspan="2">Kode</th>
                                <th rowspan="2">Nama</th>
                                <th colspan="2" class="text-center">TOTAL</th>
                                <th rowspan="2" width="200">Aksi</th>
                            </tr>
                            <tr>
                                <th>Kec.</th>
                                <th>Kel.</th>
                            </tr>
                            @foreach ($districts as $district)
                                <tr>
                                    <td class="text-center">
                                        {{ ($districts->currentpage()-1) * $districts->perpage() + $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $district->code }}
                                    </td>
                                    <td>
                                        {{ $district->name }}
                                    </td>
                                    <td>
                                        {{ $district->subdistricts->count() }}
                                    </td>
                                    <td>
                                        @php $urban_village_count = 0; @endphp
                                        @foreach ($district->subdistricts as $subdistrict)
                                            @php $urban_village_count += $subdistrict->urban_village_count @endphp
                                        @endforeach
                                        {{$urban_village_count}}
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-warning"
                                            onclick="showDistrict({{ $district->id }})"
                                            data-toggle="modal"
                                            data-target="#editDistrict"
                                        >
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $district->id }}, 'districts')"
                                            data-toggle="modal"
                                            data-target="#deleteModal"
                                        >
                                            <i class="fas fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-whitesmoke text-center">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            {{ $districts->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.region-data-mgmt.districts.edit')
@endsection

@section('custom-script')
@include('admin.region-data-mgmt.districts.script')
@endsection