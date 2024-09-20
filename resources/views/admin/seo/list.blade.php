<x-layouts.dashboard>
    <div class="card">
        <div class="card-header">
            <h2>SEO </h3>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                </button>
                            </h2>
                        </div>
                        {{-- Home SEO --}}
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <h3>{{ $seohometitle->page }}</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                               <table class="table table-bordered text-center">
                                    <thead class="table-light">
                                        <th>Title</th>
                                        <th>Value</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($seohome as $home)
                                            <td>{{ $home->title }}</td>
                                            <td>{{ $home->value }}</td>
                                            <td>           
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $home->id }}">
                                                <i class="fa fa-plus"></i>
                                            </button>
 
                                            </td>
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                        {{-- About SEO --}}
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <h3>{{ $seoabouttitle->page }}</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                               <table class="table table-bordered text-center">
                                    <thead class="table-light">
                                        <th>Title</th>
                                        <th>Value</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($seoabout as $home)
                                            <td>{{ $home->title }}</td>
                                            <td>{{ $home->value }}</td>
                                            <td>           
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $home->id }}">
                                                <i class="fa fa-plus"></i>
                                            </button>
 
                                            </td>
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                      <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                        {{-- Player SEO --}}
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <h3>{{ $seoplayertitle->page }}</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                               <table class="table table-bordered text-center">
                                    <thead class="table-light">
                                        <th>Title</th>
                                        <th>Value</th>
                                        
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($seoplayer as $home)
                                            <td>{{ $home->title }}</td>
                                            <td>{{ $home->value }}</td>
                                            
                                            <td>           
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $home->id }}">
                                                <i class="fa fa-plus"></i>
                                            </button>
 
                                            </td>
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                      <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                        {{-- Gallery SEO --}}
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <h3>{{ $seogallerytitle->page }}</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                               <table class="table table-bordered text-center">
                                    <thead class="table-light">
                                        <th>Title</th>
                                        <th>Value</th>
                                        
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($seogallery as $home)
                                            <td>{{ $home->title }}</td>
                                            <td>{{ $home->value }}</td>
                                            
                                            <td>           
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $home->id }}">
                                                <i class="fa fa-plus"></i>
                                            </button>
 
                                            </td>
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                      <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                        {{-- League SEO --}}
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        <h3>{{ $seoleaguetitle->page }}</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                               <table class="table table-bordered text-center">
                                    <thead class="table-light">
                                        <th>Title</th>
                                        <th>Value</th>
                                        
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($seoleague as $home)
                                            <td>{{ $home->title }}</td>
                                            <td>{{ $home->value }}</td>
                                            
                                            <td>           
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $home->id }}">
                                                <i class="fa fa-plus"></i>
                                            </button>
 
                                            </td>
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                      <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                        {{-- Match  SEO --}}
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">
                                        <h3>{{ $seomatchtitle->page }}</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionExample">
                               <table class="table table-bordered text-center">
                                    <thead class="table-light">
                                        <th>Title</th>
                                        <th>Value</th>
                                        
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($seomatch as $home)
                                            <td>{{ $home->title }}</td>
                                            <td>{{ $home->value }}</td>
                                            
                                            <td>           
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $home->id }}">
                                                <i class="fa fa-plus"></i>
                                            </button>
 
                                            </td>
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                      <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                        {{-- Contact  SEO --}}
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <h3>{{ $seocontacttitle->page }}</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#accordionExample">
                               <table class="table table-bordered text-center">
                                    <thead class="table-light">
                                        <th>Title</th>
                                        <th>Value</th>
                                        
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($seocontact as $home)
                                            <td>{{ $home->title }}</td>
                                            <td>{{ $home->value }}</td>
                                            
                                            <td>           
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $home->id }}">
                                                <i class="fa fa-plus"></i>
                                            </button>
 
                                            </td>
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                      <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->page }} ({{ $home->title }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.seo.update', $home->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{$home->value}}" name="value" class="form-control">

                                                        <input type="hidden" value="{{$home->title}}" name="title" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </table>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>


        @push('scripts')
            <x-delete-alert />
        @endpush
</x-layouts.dashboard>
