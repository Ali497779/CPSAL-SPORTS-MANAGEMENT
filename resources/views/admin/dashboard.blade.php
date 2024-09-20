<x-layouts.dashboard>


    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <style>
        .dark-mode {
            filter: invert(1) hue-rotate(180deg);
        }
        .inverted {
            filter: invert(1) hue-rotate(180deg);
        }
    </style>
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-body">
                            <div class="hero is-info welcome is-small">
                                <div class="hero-body">
                                    <div class="container">
                                <div class="btn btn-primary"><a href="{{route('admin.mail') }}">Send Mail</a></div>
                                        <h1 class="title">Hello, Admin.</h1>
                                        <h2 class="subtitle">I hope you are having a great day!</h2>
                                        <a class="button is-small is-primary" href="#" onclick="myFunction()">Light | Dark</a>
                                    </div>
                                </div>
                            </div>
                            <section class="info-tiles">
                                <div class="tile is-ancestor has-text-centered">
                                    <div class="tile is-parent">
                                        <a href="{{ route('admin.battles.index') }}">
                                        <article class="tile is-child box" style="background-color: rgb(196, 16, 16)">
                                            <p class="title" style="color: white">{{$battle}}</p>
                                            <p class="subtitle" style="color: white">MATCHES</p></a>
                                        </article>
                                    </div>
                                    <div class="tile is-parent">
                                        <a href="{{ route('admin.sessions.index') }}">
                                        <article class="tile is-child box" style="background-color: rgb(10, 94, 10)">
                                            <p class="title" style="color: white">{{$session}}</p>
                                            <p class="subtitle"style="color: white" >SEASONS</p></a>
                                        </article>
                                    </div>
                                    <div class="tile is-parent">
                                        <a href="{{ route('admin.battles.index') }}">
                                        <article class="tile is-child box" style="background-color: rgb(11, 30, 117)">
                                            <p class="title" style="color: white">{{$user}}</p>
                                            <p class="subtitle" style="color: white">USERS</p></a>
                                        </article>
                                    </div>
                                    <div class="tile is-parent">
                                        <article class="tile is-child box bg-dark" >
                                            <p class="title" style="color: white">{{$team}}</p>
                                            <p class="subtitle" style="color: white">TEAMS</p>
                                        </article>
                                    </div>
                                </div>
                                <div class="tile is-parent">
                                    <article class="tile is-child box bg-primary">
                                        <div class="row align-items-center justify-content-center">
                                            <div class="col-md-4 text-center">
                                                <p class="title text-white">Recent Match</p>
                                            </div>
                                            
                                            @if (count($battles) != 0)
                                            
                                            <div class="col-md-2 text-center">
                                                
                                                    <img  src="{{ asset('assets/team/'.$battles[0]->byTeam->image) }}" alt="" width="150px">
                                                <h1 style="color: white">{{$battles[0]->byTeam->name}}</h1>
                                            </div>
                                            @if ($battles[0]->forTeam != null)
                                              <div class="col-md-2 text-center">
                                                <h1 class="text-white">VS</h1>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <img src="{{ asset('assets/team/'.$battles[0]->forTeam->image) }}" alt="" width="150px">
                                                <h1 style="color: white">{{$battles[0]->forTeam->name}}</h1>
                                            </div>  
                                            <div class="col-md-2 text-center">
                                                <h1 class="text-white">VS</h1>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <img src="{{ asset('assets/team/'.$battles[0]->forTeam->image) }}" alt="" width="150px">
                                                <h1 style="color: white">{{$battles[0]->forTeam->name}}</h1>
                                            </div>
                                            @endif
                                            

                                        </div>
                                        @else
                                                <span></span>
                                        @endif
                                    </article>
                                </div>
                            </section>
                            {{-- <div class="columns">
                                <div class="column is-6">
                                    <div class="card events-card">
                                        <header class="card-header">
                                            <p class="card-header-title">Events</p>
                                            <a href="#" class="card-header-icon" aria-label="more options">
                                                <span class="icon">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </header>
                                        <div class="card-table">
                                            <div class="content">
                                                <table class="table is-fullwidth is-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                                            <td>Lorum ipsum dolem aire</td>
                                                            <td class="level-right">
                                                                <a class="button is-small is-primary" href="#">Action</a>
                                                            </td>
                                                        </tr>
                                                        <!-- Add more rows here with dummy data -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <footer class="card-footer">
                                            <a href="#" class="card-footer-item">View All</a>
                                        </footer>
                                    </div>
                                </div>
                                {{-- <div class="column is-6">
                                    <div class="card">
                                        <header class="card-header">
                                            <p class="card-header-title">Match Search</p>
                                            <a href="#" class="card-header-icon" aria-label="more options">
                                                <span class="icon">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </header>
                                        <div class="card-content">
                                            <div class="content">
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input is-large" type="text" placeholder="">
                                                    <span class="icon is-medium is-left">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                    <span class="icon is-medium is-right">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <header class="card-header">
                                            <p class="card-header-title">User Search</p>
                                            <a href="#" class="card-header-icon" aria-label="more options">
                                                <span class="icon">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </header>
                                        <div class="card-content">
                                            <div class="content">
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input is-large" type="text" placeholder="">
                                                    <span class="icon is-medium is-left">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                    <span class="icon is-medium is-right">
                                                        <i class="fa fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.banner.create') }}">
                <div class="float-right">
                    {{-- <button class="btn-primary">ADD BANNER</button> --}}
                </div>
            </a>
        </div> 
    </section>
    <script>
        function myFunction() {
            let root = document.documentElement;
            let x = document.getElementById("img");
            root.classList.toggle("dark-mode");
            x.classList.toggle("inverted");
        }
    </script>


</x-layouts.dashboard>
