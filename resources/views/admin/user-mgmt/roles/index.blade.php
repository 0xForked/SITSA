@extends('layouts._body.admin')

@section('title', 'Role')

@section('content')
<div class="section-body">
    <h2 class="section-title">This is Example Page</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Roles List</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button class="btn btn-primary ml-2"><i class="fas fa-plus"></i> Create</button>
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
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->guard_name }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-info"></i> Detail
                                        </a>
                                        <a href="#" class="btn btn-warning">
                                            <i class="fas fa-edit"></i> Update
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
