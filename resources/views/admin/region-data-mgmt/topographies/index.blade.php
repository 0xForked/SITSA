@extends('layouts._body.admin')

@section('title', 'Data Wilayah - Topografi')

@section('content')
<div class="section-body">
    <h2 class="section-title">Topografi</h2>
    <p class="section-lead">Daftar referensi topografi dari wilayah yang terdaftar</p>
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
                        action="{{ route('admin.region.topographies.store') }}"
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
                    <h4>Daftar topografi </h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.region.topographies.index') }}"
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
                            @foreach ($topographies as $topography)
                                <tr>
                                    <td class="text-center">
                                        {{ ($topographies->currentpage()-1) * $topographies->perpage() + $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $topography->name }}
                                    </td>
                                    <td>
                                        {{ $topography->code }}
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-warning"
                                            onclick="showTopography({{ $topography->id }})"
                                            data-toggle="modal"
                                            data-target="#editTopography"
                                        >
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $topography->id }}, 'topographies')"
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
                            {{ $topographies->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.region-data-mgmt.topographies.edit')
@endsection

@section('custom-script')
@include('admin.region-data-mgmt.topographies.script')
@endsection