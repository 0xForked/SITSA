<div class="section-header">
    <h1>@yield('title')</h1>
    <div class="section-header-breadcrumb">
        @foreach (Request::segments() as $segment)
            <div class="breadcrumb-item">
                @if ($loop->last == count(Request::segments()))
                    {{ ucfirst($segment) }}
                @else
                    <a href="{{ URL::to("/$segment") }}">{{ ucfirst($segment) }}</a>
                @endif
            </div>
        @endforeach
    </div>
</div>
