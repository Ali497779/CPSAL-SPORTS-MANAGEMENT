<x-layouts.dashboard title="Team Create">



    <div id="accordion">
        <div class="card">
            <div class="card-header d-flex justify-content-between" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                        aria-controls="collapseOne">
                        Banners
                    </button>
                </h5>
                <button class="btn btn-dark " data-toggle="modal" data-target="#exampleModal"><i
                        class="fa fa-plus"></i>Add</button>
            </div>


            {{-- BannerModel --}}
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.banner.addbanner') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="file" class="form-control" name="bannerimgvalue"
                                    placeholder="Enter Banner Image">
                                <label for="bannerHeading" class="form-label">Heading</label>
                                <input type="text" class="form-control" name="bannerheadingvalue"
                                    placeholder="Enter Main Heading">
                                <label for="bannerHeading" class="form-label">Quote</label>
                                <input type="text" class="form-control" name="bannerquotevalue"
                                    placeholder="Enter Banner Quote">
                                <input type="hidden" name="type" value="banner">
                                <input type="hidden" name="isupload" value=1>
                                <input type="hidden" name="name" value="Home">
                                <input type="hidden" value="bannerheading" name="bannerheading">
                                <input type="hidden" value="bannerquote" name="bannerquote">




                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>






            <div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Banner</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="bannerForm" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                @method('PUT')
                                <input type="file" class="form-control" name="value">
                                <label for="bannerHeading" class="form-label">Heading</label>
                                <input type="text" class="form-control" name="bannerHeading" id="bannerHeading">
                                <label for="bannerQuote" class="form-label">Quote</label>
                                <input type="text" class="form-control" name="bannerQuote" id="bannerQuote">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>






            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <thead>

                                <td>Item</td>
                                <td>Status</td>
                                <td>Action</td>

                            </thead>

                            @foreach ($home as $homeItem)
                                @if ($homeItem->type == 'banner')
                                    <tr>
                                        <td>{{ $homeItem->type }} {{ $loop->iteration }}</td>
                                        <td><a href="{{ route('admin.deactiveitem', $homeItem->id) }}">
                                                @if ($homeItem->status == 1)
                                                    <button class="btn btn-success">Active</button></td>
                                    @else
                                        <button class="btn btn-danger">Deactive</button></td>
                                @endif


                                </a>
                                <td>

                                    


                                    <a onclick="editModel({{ $homeItem->id }})" title="Banner Edit"
                                        class="btn btn-primary text-white"><i class="fa fa-edit" data-toggle="modal"
                                            data-target="#exampleModaledit"></i></a>
                                    <a title="Banner Detail " class="btn btn-dark text-white" data-toggle="modal"
                                        data-target=".bd-example-modal-lg{{ $homeItem->id }}"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{ route('admin.banner.deletebanner', $homeItem->id) }}"
                                        title="Banner Delete" class="btn btn-danger text-white"><i
                                            class="fa fa-trash"></i></a>

                                </td>
                                </tr>


                                <div class="modal fade bd-example-modal-lg{{ $homeItem->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <img src="{{ asset('assets/banner/' . $homeItem->value) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        {{-- AboutText AboutLeague --}}
        @foreach ($home as $homeItem)
            @if ($homeItem->type == 'Abouttext' || $homeItem->type == 'Aboutleague')
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse{{ $homeItem->id }}" aria-expanded="false"
                                aria-controls="collapse{{ $homeItem->id }}">
                                @switch($homeItem->type)
                                    @case('Abouttext')
                                        About CPSAL
                                    @break

                                    @case('Aboutleague')
                                        About League
                                    @break
                                @endswitch
                            </button>
                        </h5>
                    </div>


                    <div id="collapse{{ $homeItem->id }}" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <thead>

                                        <td>Item</td>
                                        <td>Status</td>
                                        <td>Action</td>

                                    </thead>


                                    <tr>
                                        <td>{{ $homeItem->type }} {{ $loop->iteration }}</td>
                                        <td><a href="{{ route('admin.deactiveitem', $homeItem->id) }}">
                                                @if ($homeItem->status == 1)
                                                    <button class="btn btn-success">Active</button></td>
                                    @else
                                        <button class="btn btn-danger">Deactive</button></td>
            @endif


            </a>
            <td>


                <a title="Edit Item" class="btn btn-primary text-white"><i class="fa fa-edit" data-toggle="modal"
                        data-target="#exampleModaledititem{{ $homeItem->id }}"></i></a>
                <a title="Banner Detail " class="btn btn-dark text-white" data-toggle="modal"
                    data-target="#exampleModalCenter{{ $homeItem->id }}"><i class="fa fa-eye"></i></a>


            </td>
            </tr>





            </tbody>
            </table>
    </div>
    </div>
    </div>






    <!--View Modal -->
    <div class="modal fade" id="exampleModalCenter{{ $homeItem->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        @switch($homeItem->type)
                            @case('Abouttext')
                                About CPSAL
                            @break

                            @case('Aboutleague')
                                About League
                            @break
                        @endswitch
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $homeItem->value }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    {{-- Edit Model --}}
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
    @endif
    @endforeach





    {{-- Our Matches --}}
    @foreach ($home as $homeItem)
        @if ($homeItem->type == 'ourmatchcontent')
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsea"
                            aria-expanded="false" aria-controls="collapsea">
                            Our Matches
                        </button>
                    </h5>
                </div>
        @endif
    @endforeach

    <div id="collapsea" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <td>Item</td>
                    <td>Status</td>
                    <td>Action</td>
                </thead>

                <tbody>
                    @foreach ($home as $homeItem)
                        @if ($homeItem->type == 'ourmatchcontent' || $homeItem->type == 'imgcard1' || $homeItem->type == 'imgcard2')
                            <tr>

                                <td>
                                    @switch($homeItem->type)
                                        @case('ourmatchcontent')
                                            Our Match Paragraph
                                        @break

                                        @case('imgcard1')
                                            Card 1
                                        @break

                                        @case('imgcard2')
                                            Card 2
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
                                <td>
                                    @if ($homeItem->type == 'imgcard1' || $homeItem->type == 'imgcard2')
                                        <a onclick="editModelCard({{ $homeItem->id }})" title="Card Edit"
                                            class="btn btn-primary text-white"><i class="fa fa-edit"
                                                data-toggle="modal"
                                                data-target="#exampleModaledit{{ $homeItem->id }}"></i></a>
                                        <a title="Banner Detail " class="btn btn-dark text-white" data-toggle="modal"
                                            data-target=".bd-example-modal-lg{{ $homeItem->id }}"><i
                                                class="fa fa-eye"></i></a>
                                    @else
                                        <a title="Edit Item" class="btn btn-primary text-white">
                                            <i class="fa fa-edit" data-toggle="modal"
                                                data-target="#exampleModaledititem{{ $homeItem->id }}"></i>
                                        </a>
                                        <a title="Card View " class="btn btn-dark text-white" data-toggle="modal"
                                            data-target="#exampleModalCenter{{ $homeItem->id }}"><i
                                                class="fa fa-eye"></i>
                                        </a>
                                    @endif

                                </td>

                            </tr>
                        @endif
                    @endforeach
                </tbody>

            </table>
        </div>
        </div>
    </div>

    @foreach ($home as $homeItem)
        @if ($homeItem->type == 'imgcard1' || $homeItem->type == 'imgcard2')
            {{-- Edit image card 1 --}}
            <div class="modal fade" id="exampleModaledit{{ $homeItem->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Card</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="cardForm" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                @method('PUT')
                                <input type="file" class="form-control" name="value">
                                <label for="cardHeading" class="form-label">Heading</label>
                                <input type="text" class="form-control cardHeading" name="cardHeading">
                                <label for="cardPara" class="form-label">Paragraph</label>
                                <input type="text" class="form-control cardPara" name="cardPara">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- View Model Image --}}
            <div class="modal fade bd-example-modal-lg{{ $homeItem->id }}" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <img src="{{ asset('assets/card/' . $homeItem->value) }}" alt="">
                    </div>
                </div>
            </div>
        @else
            {{-- Edit Model --}}
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
                        <form action="{{ route('admin.page.edit', $homeItem->id) }}" method="POST">
                            <div class="modal-body">
                                @csrf
                                @method('PUT')
                                <input type="text" class="form-control" name="value"
                                    value={{ $homeItem->value }}>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!--View Modal -->
            <div class="modal fade" id="exampleModalCenter{{ $homeItem->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                                {{ $homeItem->type }}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{ $homeItem->value }}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach




    {{-- Law of Play --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour"
                    aria-controls="collapseFour">
                    Law of Play
                </button>
            </h5>
            <button class="btn btn-dark " data-toggle="modal" data-target="#exampleModallaw"><i
                    class="fa fa-plus"></i>Add</button>
        </div>


        {{-- BannerModel --}}
        <!-- Modal -->
        <div class="modal fade" id="exampleModallaw" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add File</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.addlawofplay') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="file" class="form-control" name="lawofplayfilevalue"
                                placeholder="Enter Law of Play File">
                            <label for="lawofplay" class="form-label">Law Heading</label>
                            <input type="text" class="form-control" name="lawofplayvalue"
                                placeholder="Enter Main Heading">
                            <input type="hidden" name="type" value="lawofplay">
                            <input type="hidden" name="isupload" value=1>
                            <input type="hidden" name="name" value="Home">
                            <input type="hidden" value="lawofplayfile" name="lawofplayfile">




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModaleditlawofplay" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Law </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="lawForm" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            @method('PUT')
                            <input type="file"  class="form-control lawofplayfile" name="value">
                            <label for="lawofplayval" class="form-label">Law Of Play Heading</label>
                            <input type="text" class="form-control lawofplay" name="lawofplayval" id="lawofplayval">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <thead>

                            <td>Item</td>
                            <td>Status</td>
                            <td>Action</td>
                            <td>Download</td>

                        </thead>
                        @foreach ($home as $homeItem)
                        @if ($homeItem->type == 'lawofplay')
                        <tr>
                                    <td>{{ $homeItem->value }}</td>
                                    <td>
                                        <a href="{{ route('admin.deactiveitem', $homeItem->id) }}">
                                            @if ($homeItem->status == 1)
                                                <button class="btn btn-success">Active</button>
                                            @else
                                                <button class="btn btn-danger">Deactive</button>
                                    </td>
                                @endif
                                </a>
                                </td>
                                <td>

                                    <a onclick="editModellawofplay({{ $homeItem->id }})" title="Banner Edit"
                                        class="btn btn-primary text-white"><i class="fa fa-edit" data-toggle="modal"
                                            data-target="#exampleModaleditlawofplay"></i></a>
                                    <a href="{{ route('admin.deletelawofplay', $homeItem->id) }}" title="Delete"
                                        class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>
                        @endif
                        </td>
                        @if ($homeItem->type == 'lawofplayfile')
                            <td>
                                <a href="{{ asset('assets/lawofplay/' . $homeItem->value) }}" download
                                    title="Download File " class="btn btn-dark text-white"><i
                                        class="fa fa-download">Download</i></a>
                            </td>
                            </tr>
                        @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


{{-- Frequent Q/A --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapsefive"
                    aria-controls="collapsefive">
                    Frequent Q/A
                </button>
            </h5>
            <button class="btn btn-dark " data-toggle="modal" data-target="#exampleModalfreq"><i
                    class="fa fa-plus"></i>Add</button>
        </div>


        {{-- BannerModel --}}
        <!-- Modal -->
        <div class="modal fade" id="exampleModalfreq" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Frequent Q/A</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.addfrequent') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="frequentquestion" class="form-label">Freqent Qusetion</label>
                            <input type="text" class="form-control" name="questionvalue"
                                placeholder="Enter Frequent Question">
                                <label for="frequentquestion" class="form-label">Freqent Answer</label>
                            <input type="text" class="form-control" name="answervalue"
                                placeholder="Enter Frequent Answer">
                            <input type="hidden" name="type" value="frequentquestion">
                            <input type="hidden" name="name" value="Home">
                            <input type="hidden" name="frequentanswer" value="frequentanswer">
                            




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

     


        <div id="collapsefive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <thead>

                            <td>Item</td>
                            <td>Status</td>
                            <td>Action</td>

                        </thead>
                        @foreach ($home as $homeItem)
                        @if ($homeItem->type == 'frequentquestion')
                        <tr>
                                    <td>{{ $homeItem->value }}</td>
                                    <td>
                                        <a href="{{ route('admin.deactiveitem', $homeItem->id) }}">
                                            @if ($homeItem->status == 1)
                                                <button class="btn btn-success">Active</button>
                                            @else
                                                <button class="btn btn-danger">Deactive</button>
                                    </td>
                                @endif
                                </a>
                                </td>
                                <td>

                                    <a onclick="editModefrequent({{ $homeItem->id }})" title="Frequent Q/A Edit"
                                        class="btn btn-primary text-white"><i class="fa fa-edit" data-toggle="modal"
                                            data-target="#exampleModalFrequent"></i></a>
                                    
                                        <a href="{{ route('admin.deletefrequent', $homeItem->id) }}" title="Delete"
                                            class="btn btn-danger text-white"><i class="fa fa-trash"></i></a>
                                        </td>
                        </tr>
                        @endif
                        <div class="modal fade" id="exampleModalFrequent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Frequent Q/A</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="frequentForm" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @csrf
                                        @method('PUT')
                                        <label for="frequentquestion" class="form-label">Question</label>
                                        <input type="text" class="form-control frequentquestion" name="value">
                                        <label for="frequentanswer" class="form-label">Answer</label>
                                        <textarea rows="20" class="form-control frequentanswer" name="frequentanswer"
                                            id="frequentanswer"></textarea>
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


</x-layouts.dashboard>

<script>
    // Edit Banner
    function editModel(bannerID) {
        $.ajax({
            type: "GET",
            url: '/admin/page/getbanner/' + bannerID,
            success: function(data) {
                $("#bannerForm").attr('action', '/admin/updatebanner/' + bannerID)
                $.map(data, function(value) {
                    if (value.type == 'bannerheading') {
                        $("#bannerHeading").val(value.value);
                    } else if (value.type == 'bannerquote') {
                        $("#bannerQuote").val(value.value);
                    }
                });
            }
        });
    }

    // Edit Our Match Card
    function editModelCard(bannerID) {

        $.ajax({
            type: "GET",
            url: '/admin/page/getcard/' + bannerID,
            success: function(data) {
                $(".cardForm").attr('action', '/admin/updatecard/' + bannerID)
                $.map(data, function(value) {
                    console.log(value.type);
                    if (value.type == 'headingcard2' || value.type == 'headingcard1') {
                        $(".cardHeading").val(value.value);
                    } else if (value.type == 'cardcontent2' || value.type == 'cardcontent1') {
                        $(".cardPara").val(value.value);
                    }
                });
            }
        });
    }



    // Edit Law of Play
    function editModellawofplay(bannerID) {

        $.ajax({
            type: "GET",
            url: '/admin/page/getlawofplay/' + bannerID,
            success: function(data) {
                $(".lawForm").attr('action', '/admin/updatelawofplay/' + bannerID)
                $.map(data, function(value) {
                    console.log(value);
                    if (value.type == 'lawofplay') {
                        $(".lawofplay").val(value.value);
                    } else if (value.type == 'lawofplayfile') {
                        $(".lawofplayfile").val(value.value);
                    }
                });
            }
        });
    }


    function editModefrequent(bannerID) {

        $.ajax({
            type: "GET",
            url: '/admin/page/getfrequent/' + bannerID,
            success: function(data) {
                $(".frequentForm").attr('action', '/admin/updatefrequent/' + bannerID)
                $.map(data, function(value) {
                    console.log(value);
                    if (value.type == 'frequentquestion') {
                        $(".frequentquestion").val(value.value);
                    } else if (value.type == 'frequentanswer') {
                        $(".frequentanswer").val(value.value);
                    }
                });
            }
        });
     }
</script>




<style>
    .form-control.frequentanswer {
      height: 200px !important; 
      resize: vertical !important; 
      overflow-y: auto !important; 
    }
  </style>
