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
                        <li class="menu-header">PAGES</li>
                        {{-- @can('admin') --}}

                        
                        {{-- <li class="dropdown {{ request()->route()->named('admin.sessions.*')? 'active': '' }}">
                            <a href="{{ route('admin.sessions.index') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Home</span></a>
                        </li> --}}
                        <li class="dropdown {{ request()->route()->named('admin.page.create*')? 'active': '' }}">
                            <a href="{{ route('admin.page.create') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>PAGES</span></a>
                        <li class="dropdown {{ request()->route()->named('admin.seo.*')? 'active': '' }}">
                            <a href="{{ route('admin.seo.index') }}"><i
                                data-feather="monitor"></i><span>SEO</span></a>
                        </li>
                        
                    {{-- @endcan --}}
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