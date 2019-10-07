@extends('layouts.main')

@section('body-class', 'none')

@section('body')
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            @include('layouts._part.toolbar-2')

            @include('layouts._part.sidebar')

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

