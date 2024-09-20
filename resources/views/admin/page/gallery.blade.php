<x-layouts.dashboard>

    <div id="accordion">        
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Content Section
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-white bg-dark">
                        <tr>
                            <td>Item</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($player as $homeItem)
                    <tr>
                        <td>{{$homeItem->type}}</td>
                        <td>
                            <a href="{{ route('admin.deactiveitem', $homeItem->id) }}">
                                @if ($homeItem->status == 1)
                                    <button class="btn btn-success">Active</button>
                                @else
                                    <button class="btn btn-danger">Deactive</button>
                                @endif
                                </a>
                        </td>
                        <td>
                            <a title="Edit Item" class="btn btn-primary text-white">
                                <i class="fa fa-edit" data-toggle="modal"
                                    data-target="#exampleModaledititem{{ $homeItem->id }}"></i>
                            </a>
                            <a title="Banner Detail " class="btn btn-dark text-white" data-toggle="modal" data-target="#exampleModalCenter{{$homeItem->id }}"><i
                                    class="fa fa-eye"></i></a>
                        </td>
                    </tr>


                     {{--Edit Model--}}
                     <div class="modal fade" id="exampleModaledititem{{ $homeItem->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit {{$homeItem->type}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                
                                <form action="{{ route('admin.page.edit', $homeItem->id) }}" method="POST">
                                    <div class="modal-body">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" class="form-control" name="value" value={{ $homeItem->value }}>
                
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    {{-- View Model --}}
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter{{$homeItem->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">{{$homeItem->type }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            {{$homeItem->value }}
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>

        


        <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0 d-flex justify-content-between">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Gallery
                </button>
                

                <button class="btn btn-dark " data-toggle="modal" data-target="#exampleModalCenter5"><i
                    class="fa fa-plus"></i>Add</button>


                <div class="modal fade" id="exampleModalCenter5" tabindex="-1"
                    role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle2">
                                    Gallery</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.page.addgalery') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label for="filter">Sport Category</label>
                                    <select name="filter" class="form-control">
                                        <option value="0" selected class="form-control">Select Sports
                                        </option>
                                        @foreach ($sport as $sprt)
                                            <option value="{{ $sprt->name }}">{{ $sprt->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <br />
                                    <label for="picture">Gallery Picture</label>
                                    <input type="file" style="height: 50px !important;"  name="picture" class="form-control">
                                    {{-- <input type="hidden" name="filter" value="{{$home->value}}"> --}}
                                    <br />
                                    <input type="hidden" name="page" value="">

                                    <button class="btn btn-primary" type="submit"
                                        style="width: 100%;">Saves</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-white bg-dark">
                        <tr>
                            <td>Sports</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gallery as $homeItem)
                            <tr>
                                <td>{{$homeItem->filter }}</td>
                                <td>
                                    <a data-toggle="modal" data-target=".bd-example-modal-lg{{$homeItem->id}}">
                                    <img style="width: 100px" src="{{ asset('assets/gallery//'.$homeItem->picture) }}" alt="{{$homeItem->filter }}"/>
                                    </a>
                                </td>
                                <td>
                                    <a title="Edit Gallery" class="btn btn-primary text-white">
                                        <i class="fa fa-edit" data-toggle="modal"
                                            data-target="#exampleModaledititem{{ $homeItem->id }}"></i>
                                    </a>
                                    <a href="{{route('admin.page.destroygallery',$homeItem->id ) }}" title="Delete Gallery " class="btn btn-danger text-white" ><i
                                            class="fa fa-trash"></i></a> 
                                </td>
                            </tr>

                            {{-- View Image Modal --}}
                            <div class="modal fade bd-example-modal-lg{{$homeItem->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <img src="{{ asset('assets/gallery//'.$homeItem->picture) }}" alt="{{$homeItem->filter }}"/>
                                    
                                  </div>
                                </div>
                              </div>


                              <div class="modal fade" id="exampleModaledititem{{ $homeItem->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                        
                                        <form action="{{ route('admin.page.editgallery', $homeItem->id) }}" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                @csrf
                                                @method('PUT')
                                                <input  type="file" class="form-control"  name="value" value={{ $homeItem->picture }}>
                        
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>



</x-layouts.dashboard>