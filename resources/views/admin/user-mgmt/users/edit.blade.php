@extends('layouts._body.admin')

@section('title', 'User')

@section('content')
<div class="section-body">
    <h2 class="section-title">This is Example Page</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    @include('layouts._part.flash')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <form action="{{route('admin.users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                            <div class="col-sm-12 col-md-7">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="email"
                                    value="{{ $user->email}}"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                            <div class="col-sm-12 col-md-7">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="username"
                                    value="{{ $user->username}}"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                            <div class="col-sm-12 col-md-7">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="phone"
                                    value="{{ $user->phone}}"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    value="{{ $user->name}}"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">

                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Roles</label>
                            <div class="col-sm-12 col-md-7">
                                @foreach ($roles as $role)
                                    <div class="custom-control custom-radio">
                                        <input
                                            type="radio"
                                            id="role{{ $role->id }}"
                                            value="{{ $role->id }}"
                                            name="role"
                                            class="custom-control-input"
                                            {{ ($userRole->id === $role->id) ? 'checked' : ''}}
                                        >
                                        <label
                                        class="custom-control-label"
                                        for="role{{ $role->id }}"
                                        >
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
@endsection