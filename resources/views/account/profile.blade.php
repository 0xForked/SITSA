@extends('layouts._body.account')

@section('title', 'My Profile')

@section('content')
<div class="section-body">
    <h2 class="section-title">Profile</h2>
    <p class="section-lead">This page is show user profile.</p>

    <div class="card">
        <div class="card-header">
            <h4>My Profile</h4>
        </div>

        <div class="card-footer bg-whitesmoke">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium nulla beatae fugit sequi omnis exercitationem illo enim culpa, ducimus earum eos et? Iste harum ex nihil soluta vero deleniti sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolor maiores accusamus sint amet sed voluptates est, quaerat veniam quis facilis, maxime dolore laboriosam ratione sunt sapiente obcaecati quo illo!
            <br>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias hic consequuntur temporibus, nemo ipsum ipsa, officiis commodi tempora accusamus corrupti autem. A dolorem eaque molestiae qui deserunt numquam officiis soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium adipisci numquam voluptatum sed, at labore maxime doloribus. Deleniti soluta dolore molestias tempore eaque ea hic voluptatibus minima. Officia, aperiam aspernatur.
            <br>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sapiente illo eligendi perspiciatis quasi nemo architecto, doloremque recusandae consectetur, quo iure eius, nihil culpa rem. Vel maxime nam maiores odio! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae modi recusandae quibusdam aut totam voluptatem dolorem, quod blanditiis, tempore consectetur nam ullam! Tempora blanditiis iusto reiciendis esse quod illum voluptas.

        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    <h4>Last Activity</h4>
                </div>
                <div class="card-body">
                     <table class="w-100">
                        <tbody>
                            @if ($activities_count < 1)
                                Access log activities not available
                            @endif
                            @foreach ($activities as $activity)
                                <tr>
                                    <td>
                                        @php
                                            switch (strtolower($activity->methodType)) {
                                                case 'get':
                                                    $methodClass = 'info';
                                                    break;

                                                case 'post':
                                                    $methodClass = 'warning';
                                                    break;

                                                case 'put':
                                                    $methodClass = 'warning';
                                                    break;

                                                case 'delete':
                                                    $methodClass = 'danger';
                                                    break;

                                                default:
                                                    $methodClass = 'info';
                                                    break;
                                            }
                                        @endphp
                                        Action
                                        <span class="badge badge-{{ $methodClass }}">
                                            {{ $activity->methodType }}
                                        </span>
                                        on <span href="#" class="badge badge-light">{{ cleanRouteUrl($activity->route) }}</span>
                                        @php
                                            $eventTime = \Carbon\Carbon::parse($activity->created_at);
                                            $timePassed = $eventTime->diffForHumans();
                                        @endphp
                                        at  {{ $timePassed }}

                                    </td>
                                </tr>
                            @endforeach
                        <tbody>

                    </table>

                </div>
                <div class="card-footer bg-whitesmoke">
                    <a href="{{ route('account.activity') }}"> Show all detail ({{$activities_count}}) </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    <h4>Last login</h4>
                </div>

                <div class="card-body bg-whitesmoke">
                    <p>
                        <b> {{login_activity()->ip_address}} </b>
                        <span>
                            ({{ date('D, M Y', strtotime(login_activity()->created_at)) }}) -
                        </span>
                        @php
                            $userAgentDetails = user_agent_details(login_activity()->user_agent);
                            $platform       = $userAgentDetails['platform'];
                            $browser        = $userAgentDetails['browser'];
                            $browserVersion = $userAgentDetails['version'];

                            switch ($platform) {
                                case 'Windows':
                                    $platformIcon = 'fab fa-windows';
                                    break;
                                case 'iPad':
                                    $platformIcon = 'fas fa-apple-alt';
                                    break;

                                case 'iPhone':
                                    $platformIcon = 'fas fa-apple-alt';
                                    break;

                                case 'Macintosh':
                                    $platformIcon = 'fas fa-apple-alt';
                                    break;

                                case 'Android':
                                    $platformIcon = 'fab fa-android';
                                    break;

                                case 'Linux':
                                    $platformIcon = 'fab fa-linux';
                                    break;

                                default:
                                    $platformIcon = 'fa-';
                                    break;
                            }

                            switch ($browser) {
                                case 'Chrome':
                                    $browserIcon  = 'fab fa-chrome';
                                    break;
                                case 'Firefox':
                                    $browserIcon  = 'fab fa-firefox';
                                    break;
                                case 'Opera':
                                    $browserIcon  = 'fab fa-opera';
                                    break;
                                case 'Safari':
                                    $browserIcon  = 'fab fa-safari';
                                    break;
                                case 'Internet Explorer':
                                    $browserIcon  = 'fab fa-internet-explore';
                                    break;
                                case 'Edge':
                                    $browserIcon  = 'fab fa-edge';
                                    break;
                                default:
                                    $browserIcon  = 'fa-';
                                    break;
                            }
                        @endphp
                        <i class="{{ $browserIcon }} fa-fw" aria-hidden="true">
                            <span class="sr-only">
                                {{ $browser }}
                            </span>
                        </i>
                        <sup>
                            <small>
                                {{ $browserVersion }}
                            </small>
                        </sup>
                        <i class="{{ $platformIcon }} fa-fw" aria-hidden="true">
                            <span class="sr-only">
                                {{ $platform }}
                            </span>
                        </i>
                        <br>
                        Details: {{login_activity()->user_agent}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
