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

        



      </div>



</x-layouts.dashboard>