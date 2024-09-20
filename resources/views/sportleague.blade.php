
{{-- {{dd($sessions) }} --}}

<x-layouts.website  title="Team Points" seoDec="" seoAuth="" seoKey="">
    

    <div class="over-wrap">

        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('{{asset('assets/images/head-bg.jpg')}}');">
                                <img class="uk-invisible" src="{{asset('assets/images/head-bg.jpg')}}" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>Team Points</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li class="uk-active"><span>Team Points</span>
                </li>
            </ul>
        </div>
        

        <div class="uk-container uk-container-center" style="text-align: center">
            <h1>All <span style="color:#ffc722">Teams</span> Points
            </h1>
        </div>

      {{-- @foreach ($sports as $sport)

        <div class="uk-container uk-container-center">
            <h1>{{$sport->name }}
            </h1>
        </div> --}}
       
        
        <div class="uk-container uk-container-center">
            <div id="tm-middle"  data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main ">
                    <main id="tm-content" class="tm-content">
                        <div class="match-list-wrap">
                                    <table class="table table-bordered text-center">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">League</th>
                                                <th scope="col">Logo</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Win</th>
                                                <th scope="col">Loss</th>
                                                <th scope="col">Points</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-white">
                                            @forelse ($sessions as $session)
                                            
                                            
                                                
                                           
                                           
   

                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $session->battle->session->name }}</td>
                                                    <td><img src="{{ asset('assets/team/'.$session->SessionTeam->team->image) }}" width="50px" alt="">
                                                    </td>
                                                    <td>{{ $session->SessionTeam->team->name }}</td>
                                                    <td>{{ $session->total_wins }}</td>
                                                    <td>{{ $session->total_losses }}</td>
                                                    <td>{{ $session->total_points }}</td>
                                                </tr>
                                                
                                                @empty
                                                <tr class="text-center">
                                                    <td colspan="7" class="text-danger">No score added yet!</td>
                                                </tr>
                                                
                                            @endforelse
                                            
                                        </tbody>
                                        
                                    </table>
                          
                        </div>
                    </main>
                </div>

            </div>
        </div>
      

    </div>
    <br><br>
    
    </x-layouts.website>