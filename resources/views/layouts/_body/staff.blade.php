@extends('layouts.main')

@section('body-class', 'layout-3')

@section('body')
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>

            @include('layouts._part.toolbar')

            @include('layouts._part.navbar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @include('layouts._part.breadcrumb')

                    @yield('content')
                </section>
            </div>

            @include('layouts._part.footer')
        </div>
    </div>

    @include('auth.logout')
@endsection
