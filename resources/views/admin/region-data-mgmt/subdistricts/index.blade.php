@extends('layouts._body.admin')

@section('title', 'Data Wilayah - Kecamatan')

@section('content')
<div class="section-body">
    <h2 class="section-title">Kecamatan</h2>
    <p class="section-lead">Daftar referensi Kecamatan yang terdaftar</p>
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
                        action="{{ route('admin.region.subdistricts.store') }}"
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
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <select class="form-control" name="district_id">
                                @foreach ($districts as $district)
                                    <option value="{{$district->id}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button
                            onclick="showLoading()"
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
                    <h4>Daftar Kecamatan </h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.region.subdistricts.index') }}"
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
                                <th class="text-center">#</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Kab/Kota</th>
                                <th>Total Desa/Kel.</th>
                                <th width="200">Aksi</th>
                            </tr>
                            @foreach ($subdistricts as $subdistrict)
                                <tr>
                                    <td class="text-center">
                                        {{ ($subdistricts->currentpage()-1) * $subdistricts->perpage() + $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $subdistrict->code }}
                                    </td>
                                    <td>
                                        {{ $subdistrict->name }}
                                    </td>
                                    <td>
                                        @if ($subdistrict->district)
                                            <a href="{{ route('admin.region.districts.index') }}?search={{ $subdistrict->district->name }}">
                                                {{ $subdistrict->district->name }}
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $subdistrict->urban_village_count }}
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-warning"
                                            onclick="showSubdistrict({{ $subdistrict->id }})"
                                            data-toggle="modal"
                                            data-target="#editSubdistrict"
                                        >
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $subdistrict->id }}, 'subdistricts')"
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
                            {{ $subdistricts->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.region-data-mgmt.subdistricts.edit')
@endsection

@section('custom-script')
@include('admin.region-data-mgmt.subdistricts.script')
@endsection