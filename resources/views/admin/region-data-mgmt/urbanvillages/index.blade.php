@extends('layouts._body.admin')

@section('title', 'Data Wilayah - Kelurahan')

@section('content')
<div class="section-body">
    <h2 class="section-title">Kelurahan</h2>
    <p class="section-lead">Daftar referensi Kelurahan yang terdaftar</p>
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
                        action="{{ route('admin.region.urbanvillages.store') }}"
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
                            <label>Kecamatan</label>
                            <select class="form-control" name="subdistrict_id">
                                @foreach ($subdistricts as $subdistrict)
                                    <option value="{{$subdistrict->id}}">{{$subdistrict->name}}</option>
                                @endforeach
                            </select>
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
                    <h4>Daftar Kelurahan </h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.region.urbanvillages.index') }}"
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
                                <th>Kecamatan</th>
                                <th>Kabupaten/Kota</th>
                                <th width="200">Aksi</th>
                            </tr>
                            @foreach ($urban_villages as $urban_village)
                                <tr>
                                    <td class="text-center">
                                        {{ ($urban_villages->currentpage()-1) * $urban_villages->perpage() + $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $urban_village->code }}
                                    </td>
                                    <td>
                                        {{ $urban_village->name }}
                                    </td>
                                    <td>
                                        @if ($urban_village->subdistrict)
                                            <a href="{{ route('admin.region.subdistricts.index') }}?search={{ $urban_village->subdistrict->name }}">
                                                {{ $urban_village->subdistrict->name }}
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($urban_village->subdistrict)
                                            @if ($urban_village->subdistrict->district)
                                                <a href="{{ route('admin.region.districts.index') }}?search={{ $urban_village->subdistrict->district->name }}">
                                                    {{ $urban_village->subdistrict->district->name }}
                                                </a>
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-warning"
                                            onclick="showUrbanVillage({{ $urban_village->id }})"
                                            data-toggle="modal"
                                            data-target="#editUrbanVillage"
                                        >
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $urban_village->id }}, 'urbanvillages')"
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
                            {{ $urban_villages->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.region-data-mgmt.urbanvillages.edit')
@endsection

@section('custom-script')
@include('admin.region-data-mgmt.urbanvillages.script')
@endsection