<x-layouts.dashboard>

    <div id="accordion">

        @foreach ($gridcontent1 as $homeItem)
       
        @endforeach






        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">
                Grid 1
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              

                    <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Content Section</a>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Picture Section</button>
                  </p>
                  <div class="row">
                    <div class="col">
                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                        {{-------- Grid 1 Content -----------}}
                         <table class="table table-bordered">
                            <thead class="text-white bg-dark">
                                <tr>
                                    <td>Item</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gridcontent1 as $homeItem)
                                <tr>
                                    <td>
                                        
                                        @switch($homeItem->type)
                                            @case('headingLeft')
                                                About Heading
                                                @break
                                            @case('BoldParagraphLeft')
                                                Small Heading
                                            @break
                                            @case('ParagraphLeft')
                                                Paragraph Content
                                            @break
                                            @default
                                                
                                        @endswitch
                                    </td>
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
                    <div class="col">
                      <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                          {{------------ Picture Section -----------}}
                          <table class="table table-bordered">
                            <thead class="text-white bg-dark"> 
                                <tr>
                                    <td>Item</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($image1 as $homeItem)
                                <tr>
                                    <td>
                                        @switch($homeItem->type)
                                            @case('imageLeft')
                                                Background Image
                                                @break
                                            @case('ImgQuoteLeft')
                                            Quote On Image           
                                            @break
                                            @case('Leftquoteauthor')
                                            Quote Author Name
                                            @break         
                                        @endswitch
                                    </td>
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
                            
                                            <form action="{{ route('admin.page.edit', $homeItem->id) }}" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body" >
                                                    @csrf
                                                    @method('PUT')
                                                    @if ($homeItem->type == 'imageLeft')
                                                    <input type="file" class="form-control" name="value" value={{ $homeItem->value }}>
                                                    @else
                                                    <input type="text" class="form-control" name="value" value={{ $homeItem->value }}>
                                                    @endif
                            
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
                                            @if ($homeItem->type == 'imageLeft')
                                            <img src="{{ asset('assets/imageLeft/'.$homeItem->value) }}"
                                            alt="">
                                            @else
                                            {{$homeItem->value }}
                                            @endif
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






            </div>
          </div>
        </div>


        

        {{--------- PlayerInformation ---------}}
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Players Information
              </button>
            </h5>
          </div>

          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
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
                        @foreach ($PlayerInformation as $homeItem)
                        <tr>
                            <td>
                                @switch($homeItem->type)
                                    @case('PlayerInformation')
                                        PlayerInfo Para
                                        @break
                                    @default
                                @endswitch
                            </td>
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
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Grid 2
                </button>
              </h5>
            </div>
  
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                
                  <p>
                      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Picture Section</button>
                      <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Content Section</a>
                    </p>
                    <div class="row">
                      
                      <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                          <div class="card card-body">
                            {{------------ Picture Section -----------}}
                            <table class="table table-bordered">
                              <thead class="text-white bg-dark"> 
                                  <tr>
                                      <td>Item</td>
                                      <td>Status</td>
                                      <td>Action</td>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($image2 as $homeItem)
                                  <tr>
                                      <td>
                                          @switch($homeItem->type)
                                              @case('imageRight')
                                                  Background Image
                                                  @break
                                              @case('ImgQuoteRight')
                                              Quote On Image           
                                              @break
                                              @case('Rightquoteauthor')
                                              Quote Author Name
                                              @break         
                                          @endswitch
                                      </td>
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
                              
                                              <form action="{{ route('admin.page.edit', $homeItem->id) }}" method="POST" enctype="multipart/form-data">
                                                  <div class="modal-body" >
                                                      @csrf
                                                      @method('PUT')
                                                      @if ($homeItem->type == 'imageRight')
                                                      <input type="file" class="form-control" name="value" value={{ $homeItem->value }}>
                                                      @else
                                                      <input type="text" class="form-control" name="value" value={{ $homeItem->value }}>
                                                      @endif
                              
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
                                              @if ($homeItem->type == 'imageRight')
                                              <img src="{{ asset('assets/imageRight/'.$homeItem->value) }}"
                                              alt="">
                                              @else
                                              {{$homeItem->value }}
                                              @endif
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
  
  
  
                      <div class="col">
                          <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                            {{-------- Grid 2 Content -----------}}
                             <table class="table table-bordered">
                                <thead class="text-white bg-dark">
                                    <tr>
                                        <td>Item</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gridcontent2 as $homeItem)
                                    <tr>
                                        <td>
                                            
                                            @switch($homeItem->type)
                                                @case('HeadinRight')
                                                    About Heading
                                                    @break
                                                @case('BoldParagraphRight')
                                                    Small Heading
                                                @break
                                                @case('ParagraphRight')
                                                    Paragraph Content
                                                @break
                                                @default
                                                    
                                            @endswitch
                                        </td>
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
  
  
  
  
  
  
  
              </div>
            </div>
          </div>


      </div>





</x-layouts.dashboard>