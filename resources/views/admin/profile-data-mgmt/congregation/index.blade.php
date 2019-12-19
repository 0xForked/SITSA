@extends('layouts._body.admin')

@section('title', 'Profil - Jemaat')

@section('content')
<div class="section-body">
    <h2 class="section-title">Profil Jemaat</h2>
    <p class="section-lead">Profil Jemaat {nama jemaat yang akan dikelola}.</p>
    @include('layouts._part.flash')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Informasi Umum</h4>
                    <div class="card-header-form">
                        <button class="btn btn-primary" ><i class="fas fa-edit"></i> Perbaharui</button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Periode Pelayanan</h4>
                            <div class="card-header-form">
                                <a
                                    class="btn btn-primary"
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#addCongregationPeriode"
                                >
                                    <i class="fas fa-plus"></i> Tambah baru
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Periode</th>
                                        <th>Status</th>
                                        <th width="200">Aksi</th>
                                    </tr>
                                    @foreach ($data->service_period as $period)
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>{{ $period->from }}-{{ $period->to }}</td>
                                            <td>
                                                <div class="badge badge-{{
                                                    ($period->status == 'ACTIVE') ? 'primary' : 'light'
                                                }}">
                                                    {{ $period->status }}
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href="#"
                                                    class="btn btn-warning"
                                                    onclick="loadPeriodeDetail({{$period->id}})"
                                                    data-toggle="modal"
                                                    data-target="#editCongregationPeriode"
                                                >
                                                    <i class="fas fa-edit"></i> Ubah
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card-footer bg-whitesmoke text-center">

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Sejarah Jemaat</h4>
                            <div class="card-header-form">
                                <a
                                    class="btn btn-primary"
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#editCongregationHistory"
                                >
                                    <i class="fas fa-edit"></i> Perbaharui
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="bg-whitesmoke ml-3 mr-3 mb-3 p-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error reiciendis aut suscipit excepturi tenetur ea inventore corporis esse dolor facilis veritatis dicta perferendis, expedita odio praesentium. Fugit, non? Incidunt, temporibus?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom-include')
@include('admin.profile-data-mgmt.congregation.modal.add-periode')
@include('admin.profile-data-mgmt.congregation.modal.edit-periode')
@include('admin.profile-data-mgmt.congregation.modal.edit-histories')
@endsection

@section('custom-script')
@include('admin.profile-data-mgmt.congregation.script')
@endsection