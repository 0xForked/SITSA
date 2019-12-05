@extends('layouts._body.admin')

@section('title', 'Data Wilayah - Wilayah')

@section('content')
<div class="section-body">
    <h2 class="section-title">Wilayah</h2>
    <p class="section-lead">Daftar referensi wilayah yang terdaftar</p>
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
                        action="{{ route('admin.region.regions.store') }}"
                    >
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Kode</label>
                            <input type="number" name="code" class="form-control">
                        </div>.
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
                    <h4>Daftar wilayah </h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.region.regions.index') }}"
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
                                <th>Nama</th>
                                <th>Kode</th>
                                <th width="200">Aksi</th>
                            </tr>
                            @foreach ($regions as $region)
                                <tr>
                                    <td class="text-center">
                                        {{ ($regions->currentpage()-1) * $regions->perpage() + $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $region->name }}
                                    </td>
                                    <td>
                                        {{ $region->code }}
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-warning"
                                            onclick="showRegion({{ $region->id }})"
                                            data-toggle="modal"
                                            data-target="#editRegion"
                                        >
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $region->id }}, 'regions')"
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
                            {{ $regions->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.region-data-mgmt.regions.edit')
@endsection

@section('custom-script')
@include('admin.region-data-mgmt.regions.script')
@endsection