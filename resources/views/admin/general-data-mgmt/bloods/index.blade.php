@extends('layouts._body.admin')

@section('title', 'Data Umum - Tipe Darah')

@section('content')
<div class="section-body">
    <h2 class="section-title">Tipe Darah</h2>
    <p class="section-lead">Daftar referensi Tipe Darah.</p>
    @include('layouts._part.flash')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Tipe Darah  </h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.general.bloods.index') }}"
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
                                <th width="200">Tipe</th>
                                <th>Deskripsi</th>
                                <th width="200">Aksi</th>
                            </tr>
                            @foreach ($bloods as $blood)
                                <tr>
                                    <td class="text-center">
                                        {{ ($bloods->currentpage()-1) * $bloods->perpage() + $loop->iteration }}
                                    </td>
                                    <td>
                                        Golongan: {{ ucfirst($blood->name) }} Rh: {{$blood->type}}
                                    </td>
                                    <td>
                                        {{ $blood->description }}
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-warning"
                                            onclick="showBlood({{ $blood->id }})"
                                            data-toggle="modal"
                                            data-target="#editBlood"
                                        >
                                            <i class="fas fa-edit"></i> Ubah
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $blood->id }}, 'bloods')"
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
                            {{ $bloods->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.general-data-mgmt.bloods.edit')
@endsection

@section('custom-script')
@include('admin.general-data-mgmt.bloods.script')
@endsection