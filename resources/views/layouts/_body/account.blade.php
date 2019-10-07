@extends('layouts.main')

@section('body-class', 'layout-3')

@section('body')
    <div id="app">
        <div class="main-wrapper container">
            <!-- Main Content -->
            <div class="main-content" style="padding-top:100px !important">
                <section class="section">
                    <div id="back">
                        <a href="@hasrole('admin') {{ route('admin.home') }} @else {{ $route = route('staff.home') }} @endhasrole" class="btn btn-primary mb-5 ml-3">
                            <i class="fas fa-chevron-circle-left"></i>
                            Back to Home
                        </a>
                    </div>

                    <div class="mt-3">
                        @include('layouts._part.breadcrumb')
                    </div>

                    @yield('content')
                </section>
            </div>

            @include('layouts._part.footer')
        </div>
    </div>

    @include('auth.logout')
@endsection
