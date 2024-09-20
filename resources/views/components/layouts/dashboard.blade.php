<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/app.min.css') }}">
    <title>Dashboard {{ isset($title) ? '| ' . $title : '' }}</title>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user text-dark">
                            <i class="fa fa-bell"></i>
                            @php
                                $notifications = \App\Models\Notification::where('notifiable_id',auth()->id())->where(['read_at'=> 0])->latest()->take(5)->get();
                            @endphp
                            <sup class="{{ $notifications->count() > 0 ? 'badge badge-danger' : '' }}"
                                id="notification-count">
                                {{ $notifications->count() > 0 ? $notifications->count() : '' }}
                            </sup>
                            <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown" id="notification-messages" style="width: 400px;transform: translateX(10%);">
                            @php
                                $notifications = \App\Models\Notification::where('notifiable_id',auth()->id())->latest()->take(5)->get();
                            @endphp

                            @forelse ($notifications as $notification)
                            {{-- {{ dd(json_decode($notification->id)) }} --}}
                                @php
                                    $dataArray = json_decode($notification->data, true);
                                @endphp
                                
                                
                                <a href="{{$dataArray['url'] }}" onclick=" markAsRead({{ $notification->id }})" class="dropdown-item has-icon">
                                    <i class="fa fa-dot-circle"></i>
                                    {{ $dataArray['message'] }}
                                    {{ $notification->id }}
                                </a>
                            @empty
                                <a href="#" class="dropdown-item has-icon">
                                    <span class="text-danger">No notification yet!</span>
                                </a>
                            @endforelse
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ Storage::url(auth()->user()->avatar) }}"
                                class="user-img-radious-style">
                            <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello {{ auth()->user()->username }}</div>
                            <a href="{{ route('auth.profile.show') }}" class="dropdown-item has-icon
                                {{ request()->route()->named('auth.profile.*') ? 'active' : ''   }}"> <i
                                    class="far
                                        fa-user"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('auth.logout') }}" method="post">
                                @csrf
                                <button class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="@can('coach') {{ route('coach.dashboard') }} @endcan @can('admin') {{ route('admin.dashboard') }} @endcan">
                            <img src="{{ asset('dashboard/img/cpsal.png') }}" class="header-logo" alt="logo" />
                            <span class="logo-name">Dashboard</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        @can('coach')
                            <li class="dropdown {{ request()->route()->named('coach.dashboard')? 'active': '' }}">
                                <a href="{{ route('coach.dashboard') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Dashboard</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('coach.school.*')? 'active': '' }}">
                                <a href="{{ route('coach.school.index') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>School</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('coach.teams.*')? 'active': '' }}">
                                <a href="{{ route('coach.teams.index') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Teams</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('coach.battles.*')? 'active': '' }}">
                                <a href="{{ route('coach.battles.index') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Battles</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('coach.sessions.*')? 'active': '' }}">
                                <a href="{{ route('coach.sessions.index') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Sessions</span></a>
                            </li>
                        @endcan
                        @can('admin')
                            <li class="dropdown {{ request()->route()->named('admin.dashboard')? 'active': '' }}">
                                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Dashboard</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.sessions.*')? 'active': '' }}">
                                <a href="{{ route('admin.sessions.index') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Sessions</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.sport-attributes.*')? 'active': '' }}">
                                <a href="{{ route('admin.sport-attributes.index') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Sport Attributes</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.teams.*')? 'active': '' }}">
                                <a href="{{ route('admin.teams.index') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Teams</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.sport.*')? 'active': '' }}">
                                <a href="{{ route('admin.sport.index') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Sports</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.battles.*')? 'active': '' }}">
                                <a href="{{ route('admin.battles.index') }}" class="nav-link"><i
                                        data-feather="monitor"></i><span>Matches</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.coaches.*')? 'active': '' }}">
                                <a href="{{ route('admin.coaches.index') }}"><i
                                        data-feather="monitor"></i><span>Coaches</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.points.*')? 'active': '' }}">
                                <a href="{{ route('admin.points.index') }}"><i
                                        data-feather="monitor"></i><span>Points</span></a>
                            </li>
                            

                            <li class="menu-header">Page</li>
                            <li class="dropdown {{ request()->route()->named('admin.page.home')? 'active': '' }}">
                                <a href="{{ route('admin.page.home') }}"><i
                                    data-feather="settings"></i><span>Home Page</span></a>
                            </li>

                            <li class="dropdown {{ request()->route()->named('admin.page.about')? 'active': '' }}">
                                <a href="{{ route('admin.page.about') }}"><i
                                    data-feather="settings"></i><span>About Page</span></a>
                            </li>

                            <li class="dropdown {{ request()->route()->named('admin.page.player')? 'active': '' }}">
                                <a href="{{ route('admin.page.player') }}"><i
                                    data-feather="settings"></i><span>Player Page</span></a>
                            </li>

                            <li class="dropdown {{ request()->route()->named('admin.page.galllery')? 'active': '' }}">
                                <a href="{{ route('admin.page.galllery') }}"><i
                                    data-feather="settings"></i><span>Gallery Page</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.page.contact')? 'active': '' }}">
                                <a href="{{ route('admin.page.contact') }}"><i
                                    data-feather="settings"></i><span>Contact Page</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.page.footer')? 'active': '' }}">
                                <a href="{{ route('admin.page.footer') }}"><i
                                    data-feather="settings"></i><span>Footer Page</span></a>
                            </li>
                            <li class="dropdown {{ request()->route()->named('admin.seo.index')? 'active': '' }}">
                                <a href="{{ route('admin.seo.index') }}"><i
                                    data-feather="settings"></i><span>SEO Page</span></a>
                            </li>
                        @endcan
                    </ul>
                </aside>
            </div>
            <div class="main-content">
                @if (session('message'))
                    <x-success-alert />
                @endif
                {{ $slot }}
            </div>
        </div>
    </div>
    <script src="{{ asset('dashboard/js/app.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        function markAsRead(nortId)
        {
            console.log(nortId);
            $.ajax({
                type: "Post",
                url: "{{ route('coach.notification.marked', '') }}/"+nortId,
                data: {
                    '_token' : '{{ csrf_token() }}',
                    '_method' : 'put'
                },
                success: function (data) {
                    console.log(data);
                },
            });
        }
    </script>
    <script>
        var notificationCount = parseInt("{{ $notifications->count() }}");
        // Pusher.logToConsole = true;

        var pusher = new Pusher('421a464f5813c88129df', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            if(data.forUserId == "{{ auth()->id() }}")
            {
                $("#notification-count").html(notificationCount + 1);

                if (notificationCount == 0) {
                    $("#notification-messages").empty();
                    $("#notification-count").addClass('badge badge-danger');
                    notificationCount = 1;
                }

                $("#notification-messages").append(
                    `<a href="${data.url}" class="dropdown-item has-icon">
                    <i class="fa fa-dot-circle"></i>
                    ${data.message}
                </a>`);
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
