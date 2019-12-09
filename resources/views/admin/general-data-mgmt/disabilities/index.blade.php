@extends('layouts._body.admin')

@section('title', 'Data Umum - Jenis Disabilitas')

@section('content')
<div class="section-body">
    <h2 class="section-title">Jenis Disabilitas</h2>
    <p class="section-lead">Daftar referensi jenis Disabilitas.</p>
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
                        action="{{ route('admin.general.disabilities.store') }}"
                    >
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control">
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
                    <h4>Daftar Jenis Disabilitas </h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.general.disabilities.index') }}"
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
                                <th width="200">Nama</th>
                                <th>Deskripsi</th>
                                <th width="200">Aksi</th>
                            </tr>
                            @foreach ($disabilities as $disability)
                                <tr>
                                    <td class="text-center">
                                        {{ ($disabilities->currentpage()-1) * $disabilities->perpage() + $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $disability->name }}
                                    </td>
                                    <td>
                                        {{ $disability->description }}
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-warning"
                                            onclick="showDisability({{ $disability->id }})"
                                            data-toggle="modal"
                                            data-target="#editDisability"
                                        >
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $disability->id }}, 'disabilities')"
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
                            {{ $disabilities->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.general-data-mgmt.disabilities.edit')
@endsection

@section('custom-script')
@include('admin.general-data-mgmt.disabilities.script')
@endsection