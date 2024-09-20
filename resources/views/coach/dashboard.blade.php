<x-layouts.dashboard>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Welcome to Coach dashboard</h3>
                    </div>
                </div>
            </div>
            {{-- <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header" style="background-color: #F0F3FF">
                                <h4 style="color:#6777ef;">Representing School</h4>
                            </div>
                            <div class="card-body">
                                @forelse ($schools as $school)
                                <p style="text-align:center;">{{ $school->name }}</p>
                                @empty
                                <div class="text-center text-danger">
                                    No School Found!
                                </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" style="background-color: #F0F3FF">
                                <h4 style="color:#6777ef;">Top Player</h4>
                            </div>
                            <div class="card-body">
                                @forelse ($schools as $school)
                                <p style="text-align:center;">{{ $school->name }}</p>
                                @empty
                                <div class="text-center text-danger">
                                    No School Found!
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header" style="background-color: #F0F3FF">
                                <h4 style="color:#6777ef;">Ongoing League</h4>
                            </div>
                            <div class="card-body">
                                @forelse ($schools as $school)
                                <p style="text-align:center;">{{ $school->name }}</p>
                                @empty
                                <div class="text-center text-danger">
                                    No School Found!
                                </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" style="background-color: #F0F3FF">
                                <h4 style="color:#6777ef;">Representing School</h4>
                            </div>
                            <div class="card-body">
                                @forelse ($schools as $school)
                                <p style="text-align:center;">{{ $school->name }}</p>
                                @empty
                                <div class="text-center text-danger">
                                    No School Found!
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #F0F3FF">
                                <h3 style="color:#6777ef;">Top 5 Players</h3>
                            </div>
                            <div class="card-body">
                                @forelse ($topPlayers as $topPlayer)
                                <h3>{{$topPlayer->team->sport->name }}</h3>
                                @empty
                                <div class="text-center text-danger">
                                    No Top Player Found!
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            
        </div>
    </section>
</x-layouts.dashboard>