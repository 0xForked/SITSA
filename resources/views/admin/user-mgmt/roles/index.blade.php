@extends('layouts._body.admin')

@section('title', 'Role')

@section('content')
<div class="section-body">
    <h2 class="section-title">This is Example Page</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    @include('layouts._part.flash')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Roles List</h4>
                    <div class="card-header-form">
                        <form
                            method="GET"
                            action="{{ route('admin.roles.index') }}"
                        >
                            <div class="input-group">
                                <input
                                    type="search"
                                    class="form-control"
                                    placeholder="Search"
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
                    <button
                        class="btn btn-primary ml-2"
                        data-toggle="modal"
                        data-target="#addRole"
                    ><i class="fas fa-plus"></i> Create</button>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Guard</th>
                                <th width="400">Action</th>
                            </tr>
                            @foreach ($roles as $role)
                                <tr>
                                    <td class="text-center">
                                        {{ ($roles->currentpage()-1) * $roles->perpage() + $loop->iteration }}
                                    </td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->guard_name }}</td>
                                    <td>
                                        <a
                                            href="#"
                                            class="btn btn-primary"
                                            data-toggle="modal"
                                            data-target="#detailRole"
                                            data-role="{{ $role }}"
                                        >
                                            <i class="fas fa-info"></i> Detail
                                        </a>
                                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-warning">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a
                                            href="#"
                                            class="btn btn-danger"
                                            onclick="deleteData({{ $role->id }}, 'roles')"
                                            data-toggle="modal"
                                            data-target="#deleteModal"
                                        >
                                            <i class="fas fa-trash"></i> Delete
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
                            {{ $roles->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-include')
@include('admin.user-mgmt.roles.add')
@include('admin.user-mgmt.roles.detail')
@endsection

@section('custom-script')
@include('admin.user-mgmt.roles.script')
@endsection
