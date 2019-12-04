@extends('layouts._body.admin')

@section('title', 'Data Umum - Strata Pendidikan')

@section('content')
<div class="section-body">
    <h2 class="section-title">Strata Pendidikan</h2>
    <p class="section-lead">Daftar jenis dan lamanya masa pendidikan.</p>
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
                        action="{{ route('admin.general.educations.store') }}"
                    >
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control h-auto" name="description"></textarea>
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
                    <h4>Daftar strata pendidikan ({{ $educations->count() }}) </h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.general.educations.index') }}"
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
                                <th width="200">Aksi</th>
                            </tr>
                            @foreach ($educations as $education)
                                <tr>
                                    <td class="text-center">
                                        {{ ($educations->currentpage()-1) * $educations->perpage() + $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $education->name }}
                                    </td>
                                    <td>
                                        {{ $education->description }}
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-warning"
                                            onclick="showEducation({{ $education->id }})"
                                            data-toggle="modal"
                                            data-target="#editEducation"
                                        >
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $education->id }}, 'educations')"
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
                            {{ $educations->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.general-data-mgmt.educations.edit')
@endsection

@section('custom-script')
@include('admin.general-data-mgmt.educations.script')
@endsection