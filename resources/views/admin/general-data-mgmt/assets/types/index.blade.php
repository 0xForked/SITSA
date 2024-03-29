@extends('layouts._body.admin')

@section('title', 'Data Umum - Tipe Asset')

@section('content')
<div class="section-body">
    <h2 class="section-title">Tipe Asset</h2>
    <p class="section-lead">Daftar tipe asset.</p>
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
                        action="{{ route('admin.general.assets.types.store') }}"
                    >
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tipe</label>
                            <select class="form-control" name="type">
                                <option value="NONE">Pilih Tipe</option>
                                <option value="BERGERAK">Bergerak</option>
                                <option value="TIDAK_BERGERAK">Tidak Bergerak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control h-auto" name="description"></textarea>
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
                    <h4>Daftar tipe asset  </h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.general.assets.types.index') }}"
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
                                <th>Deskripsi</th>
                                <th>Tipe</th>
                                <th width="200">Aksi</th>
                            </tr>
                            @foreach ($types as $type)
                                <tr>
                                    <td class="text-center">
                                        {{ ($types->currentpage()-1) * $types->perpage() + $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $type->name }}
                                    </td>
                                    <td>
                                        {{ $type->description }}
                                    </td>
                                    <td>
                                        {{ $type->type }}
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-warning"
                                            onclick="showAssetType({{ $type->id }})"
                                            data-toggle="modal"
                                            data-target="#editAssetType"
                                        >
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $type->id }}, 'types')"
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
                            {{ $types->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.general-data-mgmt.assets.types.edit')
@endsection

@section('custom-script')
@include('admin.general-data-mgmt.assets.types.script')
@endsection