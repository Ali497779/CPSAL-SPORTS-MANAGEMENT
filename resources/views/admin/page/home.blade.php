<x-layouts.page>


    {{-- {{dd($gallery) }} --}}


    <div class="card">
        <div class="card-header">
            <h2>PAGE DYNAMIC </h3>
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
                        {{-- HOME PAGE --}}
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        <h3>{{ $hometitle->name }}</h3>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <table class="table table-bordered text-center">
                                    <thead class="table-light">
                                        <th>Title</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($homes as $home)
                                            @if ($home->type == 'banner' || $home->type == 'Lawofplay')
                                                <td>{{ $home->type }}</td>
                                                <td>{{ $home->value }}</td>
                                                @if ($home->status == 1)
                                                    <td>
                                                        <div class="btn-success">Active</div>
                                                    </td>
                                                @elseif($home->status == 0)
                                                    <td>
                                                        <div class="btn-danger">Dective</div>
                                                    </td>
                                                @endif
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModalCenter{{ $home->id }}">
                                                        Edit
                                                    </button>
                                                    

                                                    <a href="{{ route('admin.page.destroy', $home->id) }}">
                                                        <button type="button"
                                                            class="btn btn-danger">Delete</button></a>
                                                    @if ($home->type == 'banner')
                                                        <form action="{{ route('admin.banner.addbanner') }}"
                                                            method="post">
                                                            @csrf
                                                            <input type="hidden" name="parent"
                                                                value="{{ $home->id }}">
                                                            <input type="hidden" name="type" value="banner">
                                                            <input type="hidden" name="isupload" value=1>
                                                            <input type="hidden" name="name" value="Home">
                                                            <input type="hidden" value="bannerheading"
                                                                name="bannerheading">
                                                            <input type="hidden" value="bannerquote"
                                                                name="bannerquote">


                                                            <button type="submit" class="btn btn-secondary"
                                                                title="add more banner ">Add More</button>
                                                        </form>
                                                    @elseif($home->type == 'Lawofplay')
                                                        <form action="{{ route('admin.page.addacordian') }}"
                                                            method="post">
                                                            @csrf
                                                            <input type="hidden" name="type" value="Lawofplay">
                                                            <input type="hidden" name="name" value="Home">
                                                            <input type="hidden" name="isupload" value=1>
                                                            <input type="hidden" value="Lawofplayfile"
                                                                name="Lawofplayfile">

                                                            <button type="submit" class="btn btn-secondary"
                                                                title="add more policy ">Add More</button>
                                                        </form>
                                                    @endif


                                                </td>
                                            @else
                                                @switch($home->type)
                                                    @case('bannerheading')
                                                        <td>Banner Heading</td>
                                                    @break

                                                    @case('bannerquote')
                                                        <td>Bannner Tag Line</td>
                                                    @break

                                                    @case('Abouttext')
                                                        <td>About Section Content</td>
                                                    @break

                                                    @case('Aboutleague')
                                                        <td>About League</td>
                                                    @break

                                                    @case('ourmatchcontent')
                                                        <td>Our Match Paragraph</td>
                                                    @break

                                                    @case('imgcard1')
                                                        <td>Our Match Card One Image</td>
                                                    @break

                                                    @case('headingcard1')
                                                        <td>Card One Heading</td>
                                                    @break

                                                    @case('cardcontent1')
                                                        <td>Card One Paragraph</td>
                                                    @break

                                                    @case('imgcard2')
                                                        <td>Our Match Card Two Image</td>
                                                    @break

                                                    @case('headingcard2')
                                                        <td>Card Two Heading</td>
                                                    @break

                                                    @case('cardcontent2')
                                                        <td>Card Two Paragraph</td>
                                                    @break

                                                    @case('Lawofplay')
                                                        <td>Laws OF Play Title</td>
                                                    @break

                                                    @case('Lawofplayfile')
                                                        <td>Law OF Playing File</td>
                                                    @break

                                                    @default
                                                @endswitch
                                                {{-- <td>{{ $home->type }}</td> --}}
                                                <td>{{ $home->value }}</td>
                                                @if ($home->status == 1)
                                                    <td>
                                                        <div class="btn-success">Active</div>
                                                    </td>
                                                @elseif($home->status == 0)
                                                    <td>
                                                        <div class="btn-danger">Dective</div>
                                                    </td>
                                                @endif
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModalCenter{{ $home->id }}">
                                                        Edit
                                                    </button>
                                                    <a href="{{route('admin.page.remove',$home->id) }}"><button class="btn-danger">Delete</button></a>
                                            @endif
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->name }} ({{ $home->type }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.page.update', $home->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        @if ($home->isupload == 1)
                                                            <input type="file" value="{{ $home->value }}"
                                                                name="value" class="form-control">
                                                        @elseif($home->type == 'Abouttext')
                                                            <textarea name="value" id="" cols="60" rows="10"></textarea>
                                                        @elseif($home->isupload == 0)
                                                            <input type="text" value="{{ $home->value }}"
                                                                name="value" class="form-control">
                                                        @else
                                                            <input type="text" value="{{ $home->value }}"
                                                                name="value" class="form-control" rows="4"
                                                                cols="50">
                                                        @endif

                                                        <input type="hidden" value="{{ $home->type }}"
                                                            name="type" class="form-control">
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

                        {{-- ABOUT PAGE --}}
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <h3>{{ $abouttitle->name }}</h3>
                                    </button>

                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <table class="table table-bordered text-center">
                                    <thead class="table-light">

                                        <th>Title</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($about as $home)
                                            @if ($home->type == 'banner' || $home->type == 'Frequentaqques')
                                                <td>{{ $home->type }}</td>
                                                <td>{{ $home->value }}</td>
                                                @if ($home->status == 1)
                                                    <td>
                                                        <div class="btn-success">Active</div>
                                                    </td>
                                                @elseif($home->status == 0)
                                                    <td>
                                                        <div class="btn-danger">Dective</div>
                                                    </td>
                                                @endif
                                                <td>
                                                    <button type="button" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter{{ $home->id }}">
                                                        Edit
                                                    </button>
                                                    @if ($home->type == 'banner')
                                                        <form action="{{ route('admin.banner.addbanner') }}"
                                                            method="post">
                                                            @csrf
                                                            <input type="hidden" name="type" value="banner">
                                                            <input type="hidden" name="isupload" value=1>
                                                            <input type="hidden" name="name" value="Home">
                                                            <input type="hidden" value="banner" name="Parent">
                                                            <input type="hidden" value="bannerheading"
                                                                name="bannerheading">
                                                            <input type="hidden" value="bannerquote"
                                                                name="bannerquote">


                                                            <button type="submit" class="btn btn-secondary"
                                                                title="add more banner ">Add More</button>
                                                        </form>
                                                    @elseif($home->type == 'Frequentaqques')
                                                        <form action="{{ route('admin.page.addacordian') }}"
                                                            method="post">
                                                            @csrf
                                                            <input type="hidden" name="type"
                                                                value="Frequentaqques">
                                                            <input type="hidden" name="name" value="Home">
                                                            <input type="hidden" value="Frequentadpara"
                                                                name="Frequentadpara">

                                                            <button type="submit" class="btn btn-secondary"
                                                                title="add more banner ">Add More</i></button>
                                                        </form>
                                                    @endif


                                                </td>
                                            @else
                                                @switch($home->type)
                                                    @case('headingLeft')
                                                        <td>Left Grid Heading</td>
                                                    @break

                                                    @case('BoldParagraphLeft')
                                                        <td>Left Grid Bold Paragraph</td>
                                                    @break

                                                    @case('ParagraphLeft')
                                                        <td>Left Grid Paragraph</td>
                                                    @break

                                                    @case('imageLeft')
                                                        <td>Left Grid Background Image</td>
                                                    @break

                                                    @case('ImgQuoteLeft')
                                                        <td>Left Grid Image Quote</td>
                                                    @break

                                                    @case('PlayerInformation')
                                                        <td>Player Information</td>
                                                    @break

                                                    @case('HeadinRight')
                                                        <td>Right Grid Heading</td>
                                                    @break

                                                    @case('BoldParagraphRight')
                                                        <td>Right Grid Bold Paragraph</td>
                                                    @break

                                                    @case('ParagraphRight')
                                                        <td>Right Grid Paragraph</td>
                                                    @break

                                                    @case('imageRight')
                                                        <td>Right Grid Background Image</td>
                                                    @break

                                                    @case('ImgQuoteRight')
                                                        <td>Right Grid Image Quote</td>
                                                    @break

                                                    @case('Rightquoteauthor')
                                                        <td>Right Quote Author Name</td>
                                                    @break

                                                    @case('leftquoteauthor')
                                                        <td>Left Quote Author Name</td>
                                                    @break

                                                    @default
                                                @endswitch
                                                <td>{{ $home->value }}</td>
                                                @if ($home->status == 1)
                                                    <td>
                                                        <div class="btn-success">Active</div>
                                                    </td>
                                                @elseif($home->status == 0)
                                                    <td>
                                                        <div class="btn-danger">Dective</div>
                                                    </td>
                                                @endif
                                                <td>
                                                    <button type="button" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter{{ $home->id }}">
                                                        Edit
                                                    </button>
                                                    <a href="{{route('admin.page.remove',$home->id) }}"><button class="btn-danger">Delete</button></a>
                                            @endif
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->name }} ({{ $home->type }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.page.update', $home->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        @if ($home->isupload == 1)
                                                            <input type="file" value="{{ $home->value }}"
                                                                name="value" class="form-control">
                                                        @elseif($home->type == 'Abouttext')
                                                            <textarea name="value" id="" cols="60" rows="10"></textarea>
                                                        @elseif($home->isupload == 0)
                                                            <input type="text" value="{{ $home->value }}"
                                                                name="value" class="form-control">
                                                        @else
                                                            <input type="text" value="{{ $home->value }}"
                                                                name="value" class="form-control" rows="4"
                                                                cols="50">
                                                        @endif

                                                        <input type="hidden" value="{{ $home->type }}"
                                                            name="type" class="form-control">
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

                        {{-- PLAYERS PAGE --}}
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <h3>{{ $playertitle->name }}</h3>
                                    </button>

                                </h2>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <table class="table table-bordered text-center">
                                    <thead class="table-light">

                                        <th>Title</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($player as $home)
                                            @if ($home->type == 'banner' || $home->type == 'Frequentaqques')
                                                <td>{{ $home->type }}</td>
                                                <td>{{ $home->value }}</td>
                                                @if ($home->status == 1)
                                                    <td>
                                                        <div class="btn-success">Active</div>
                                                    </td>
                                                @elseif($home->status == 0)
                                                    <td>
                                                        <div class="btn-danger">Dective</div>
                                                    </td>
                                                @endif
                                                <td>
                                                    <button type="button" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter{{ $home->id }}">
                                                        Edit
                                                    </button>
                                                    @if ($home->type == 'banner')
                                                        <form action="{{ route('admin.banner.addbanner') }}"
                                                            method="post">
                                                            @csrf
                                                            <input type="hidden" name="type" value="banner">
                                                            <input type="hidden" name="isupload" value=1>
                                                            <input type="hidden" name="name" value="Home">
                                                            <input type="hidden" value="banner" name="Parent">
                                                            <input type="hidden" value="bannerheading"
                                                                name="bannerheading">
                                                            <input type="hidden" value="bannerquote"
                                                                name="bannerquote">


                                                            <button type="submit" class="btn btn-secondary"
                                                                title="add more banner ">Add More</button>
                                                        </form>
                                                    @elseif($home->type == 'Frequentaqques')
                                                        <form action="{{ route('admin.page.addacordian') }}"
                                                            method="post">
                                                            @csrf
                                                            <input type="hidden" name="type"
                                                                value="Frequentaqques">
                                                            <input type="hidden" name="name" value="Home">
                                                            <input type="hidden" value="Frequentadpara"
                                                                name="Frequentadpara">

                                                            <button type="submit" class="btn btn-secondary"
                                                                title="add more banner ">Add More</button>
                                                        </form>
                                                    @endif


                                                </td>
                                            @else
                                                <td>{{ $home->type }}</td>
                                                <td>{{ $home->value }}</td>
                                                @if ($home->status == 1)
                                                    <td>
                                                        <div class="btn-success">Active</div>
                                                    </td>
                                                @elseif($home->status == 0)
                                                    <td>
                                                        <div class="btn-danger">Dective</div>
                                                    </td>
                                                @endif
                                                <td>
                                                    <button type="button" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#exampleModalCenter{{ $home->id }}">
                                                        Edit
                                                    </button>
                                                    <a href="{{route('admin.page.remove',$home->id) }}"><button class="btn-danger">Delete</button></a>
                                            @endif
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $home->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $home->name }} ({{ $home->type }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.page.update', $home->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        @if ($home->isupload == 1)
                                                            <input type="file" value="{{ $home->value }}"
                                                                name="value" class="form-control">
                                                        @elseif($home->type == 'Abouttext')
                                                            <textarea name="value" id="" cols="60" rows="10"></textarea>
                                                        @elseif($home->isupload == 0)
                                                            <input type="text" value="{{ $home->value }}"
                                                                name="value" class="form-control">
                                                        @else
                                                            <input type="text" value="{{ $home->value }}"
                                                                name="value" class="form-control" rows="4"
                                                                cols="50">
                                                        @endif

                                                        <input type="hidden" value="{{ $home->type }}"
                                                            name="type" class="form-control">
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



                        {{-- GALLERY CONTENT PAGE --}}
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">
                                        <h3>Gallery Content</h3>
                                    </button>

                                </h2>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <table class="table table-bordered text-center">
                                    <thead class="table-light">

                                        <th>Title</th>
                                        <th>Value</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <td>{{ $galleryheading->type }}</td>
                                        <td>{{ $galleryheading->value }}</td>
                                        
                                        @if ($galleryheading->status == 1)
                                            <td>
                                                
                                                <div class="btn-success">Active</div>
                                            </td>
                                        @elseif($galleryheading->status == 0)

                                            <td>
                                                <div class="btn-danger">Dective</div>
                                            </td>
                                        @endif
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalCenter{{ $galleryheading->id }}">
                                            Edit
                                        </button>
                                            {{-- <a href="{{route('admin.page.remove',$galleryheading->id) }}"><button class="btn-danger">Delete</button></a> --}}
                                        </td>
                                    </tbody>
                                    <tbody>
                                        <td>{{ $galleryparagraph->type }}</td>
                                        <td>{{ $galleryparagraph->value }}</td>
                                        @if ($galleryparagraph->status == 1)
                                            <td>
                                                <div class="btn-success">Active</div>
                                            </td>
                                        @elseif($galleryparagraph->status == 0)
                                            <td>
                                                <div class="btn-danger">Dective</div>
                                            </td>
                                        @endif
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $galleryparagraph->id }}">
                                                Edit
                                            </button>
                                            {{-- <a href="{{route('admin.page.remove',$galleryheading->id) }}"><button class="btn-danger">Delete</button></a> --}}
                                        </td>
                                    </tbody>


                                    <div class="modal fade" id="exampleModalCenter{{ $galleryheading->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $galleryparagraph->name }} ({{ $galleryheading->type }})
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ route('admin.page.update', $galleryheading->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{ $galleryheading->value }}"
                                                            name="value" class="form-control" rows="4"
                                                            cols="50">
                                                        <input type="hidden" value="{{ $galleryheading->type }}"
                                                            name="type" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModalCenter{{ $galleryparagraph->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $galleryparagraph->name }} ({{ $galleryparagraph->type }})
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ route('admin.page.update', $galleryparagraph->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="text" value="{{ $galleryparagraph->value }}"
                                                            name="value" class="form-control" rows="4"
                                                            cols="50">
                                                        <input type="hidden" value="{{ $galleryparagraph->type }}"
                                                            name="type" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </table>

                            </div>
                        </div>


                        {{-- GALLERY PAGE --}}
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0"
                                    style="
                                display: flex;
                                flex-direction: row;
                                align-content: stretch;
                                width: 100%;
                                justify-content: space-between;
                                align-items: center;
                            ">
                                    {{-- {{dd($galery) }} --}}
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <h3>Gallery</h3>
                                        <button type="button" title="Add Images" class="btn btn-dark text-right"
                                            data-toggle="modal" data-target="#exampleModalCenter5{{ $home->id }}"
                                            style="
                                            width: 200px;
                                            text-align: center !important;
                                        ">
                                            <i class="fa fa-plus">Add Gallery</i>
                                        </button>
                                    </button>

                                </h2>
                            </div>
                            <div class="modal fade" id="exampleModalCenter5{{ $home->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle2">
                                                {{ $home->name }} ({{ $home->value }})</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.page.addgalery', $home->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <select name="filter" class="form-control">
                                                    <option value="0" selected class="form-control">Select Sports
                                                    </option>
                                                    @foreach ($sport as $sprt)
                                                        <option value="{{ $sprt->name }}">{{ $sprt->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <br />
                                                <input type="file" name="picture" class="form-control">
                                                {{-- <input type="hidden" name="filter" value="{{$home->value}}"> --}}
                                                <br />
                                                <input type="hidden" name="page" value="{{ $home->name }}">

                                                <button class="btn btn-primary" type="submit"
                                                    style="width: 100%;">Saves</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">

                                <table class="table table-bordered text-center">
                                    <thead class="table-light">

                                        <th>Sports</th>
                                        <th>Value</th>
                                        <th>Action</th>
                                    </thead>


                                    @foreach ($galery as $home)
                                        <tbody>
                                            <td>{{ $home->filter }}</td>
                                            <td>{{ $home->picture }}</td>
                                            <td>

                                                <a href="{{ route('admin.page.destroygallery', $home->id) }}"
                                                    title="Delete Gallery Item"><button class="btn-danger"><i
                                                            class="fa fa-trash"></i></button></a>
                                            </td>
                                        </tbody>
                                    @endforeach


                                </table>
                            </div>

                            <!-- Second Modal -->
                            <div class="modal fade" id="exampleModalCenter2{{ $home->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle2">
                                                {{ $home->name }} ({{ $home->value }})</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Modify the form action, inputs, and other elements as needed -->
                                            <form action="{{ route('admin.page.addgalery', $home->id) }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="picture">
                                                <input type="hidden" name="filter" value="{{ $home->value }}">
                                                <input type="hidden" name="page" value="{{ $home->name }}">
                                                <button class="btn btn-primary" type="submit">Saves</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>







                            </table>

                        </div>
                    </div>


                    {{-- CONTACT PAGE --}}
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    <h3>{{ $contacttitle->name }}</h3>
                                </button>

                            </h2>
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#accordionExample">
                            <table class="table table-bordered text-center">
                                <thead class="table-light">

                                    <th>Title</th>
                                    <th>Value</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($contact as $home)
                                        {{-- {{dd($home->value) }} --}}
                                        @if ($home->type == 'Contact')
                                            <td>{{ $home->type }}</td>
                                            <td>{{ $home->value }}</td>
                                            @if ($home->status == 1)
                                                <td>
                                                    <div class="btn-success">Active</div>
                                                </td>
                                            @elseif($home->status == 0)
                                                <td>
                                                    <div class="btn-danger">Dective</div>
                                                </td>
                                            @endif
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModalCenter4{{ $home->id }}">
                                                    Edit
                                                </button>
                                                <a href="{{route('admin.page.remove',$home->id) }}"><button class="btn-danger">Delete</button></a>
                                                @if ($home->type == 'Contact')
                                                    <form action="{{ route('admin.page.addcontact') }}"
                                                        method="post">
                                                        @csrf
                                                        <input type="hidden" name="type" value="Contact">
                                                        <input type="hidden" name="name" value="Contact">
                                                        <button type="submit" class="btn btn-secondary"
                                                            title="add more contact ">Add More</button>
                                                    </form>
                                                @endif
                                                @if ($home->value != '' && $home->value != null)
                                                    <button type="button" title="Add Cotact Information"
                                                        class="btn btn-dark" data-toggle="modal"
                                                        data-target="#exampleModalCenter3{{ $home->id }}">
                                                        Add More
                                                    </button>
                                                @endif
                                                {{-- 3rd Model --}}
                                                <div class="modal fade" id="exampleModalCenter3{{ $home->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle2">
                                                                    {{ $home->name }} ({{ $home->value }})</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Modify the form action, inputs, and other elements as needed -->
                                                                <form
                                                                    action="{{ route('admin.page.addcontactinfo', $home->id) }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" class="form-control"
                                                                        name="contact_id"
                                                                        value="{{ $home->id }}">
                                                                    <input type="text" class="form-control"
                                                                        name="phone"
                                                                        placeholder="Add Your Phone no.">
                                                                    <input type="text" class="form-control"
                                                                        name="mail"
                                                                        placeholder="Add Your mail address">
                                                                    <input type="text" class="form-control"
                                                                        name="location"
                                                                        placeholder="Add Your mail location">
                                                                    <input type="hidden" name="name"
                                                                        value="{{ $home->name }}">
                                                                    <button class="btn btn-primary"
                                                                        type="submit">Save</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="modal fade" id="exampleModalCenter4{{ $home->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    {{ $home->name }} ({{ $home->type }})</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('admin.page.update2', $home->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <input type="text" value="{{ $home->value }}"
                                                                        name="value" class="form-control"
                                                                        rows="4" cols="50">
                                                                    <input type="hidden" value="{{ $home->id }}"
                                                                        name="contact_id" class="form-control"
                                                                        rows="4" cols="50">
                                                                    <input type="hidden" value="{{ $home->type }}"
                                                                        name="type" class="form-control">
                                                                    <div class="modal-footer">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                            <td>{{ $home->type }}</td>
                                            <td>{{ $home->value }}</td>
                                            @if ($home->status == 1)
                                                <td>
                                                    <div class="btn-success">Active</div>
                                                </td>
                                            @elseif($home->status == 0)
                                                <td>
                                                    <div class="btn-danger">Dective</div>
                                                </td>
                                            @endif
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModalCenter{{ $home->id }}">
                                                    Edit
                                                </button>
                                                <a href="{{route('admin.page.remove',$home->id) }}"><button class="btn-danger">Delete</button></a>
                                        @endif
                                </tbody>


                                <div class="modal fade" id="exampleModalCenter{{ $home->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    {{ $home->name }} ({{ $home->type }})</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.page.update', $home->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    @if ($home->isupload == 1)
                                                        <input type="file" value="{{ $home->value }}"
                                                            name="value" class="form-control">
                                                    @elseif($home->type == 'Abouttext')
                                                        <textarea name="value" id="" cols="60" rows="10"></textarea>
                                                    @elseif($home->isupload == 0)
                                                        <input type="text" value="{{ $home->value }}"
                                                            name="value" class="form-control">
                                                    @else
                                                        <input type="text" value="{{ $home->value }}"
                                                            name="value" class="form-control" rows="4"
                                                            cols="50">
                                                    @endif

                                                    <input type="hidden" value="{{ $home->type }}"
                                                        name="type" class="form-control">
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

                    {{-- FOOTER CONTENT --}}
                    {{-- {{dd($footer) }} --}}
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    <h3>Footer Content</h3>
                                </button>

                            </h2>
                        </div>

                        <div id="collapseSeven" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <table class="table table-bordered text-center">
                                <thead class="table-light">

                                    <th>Title</th>
                                    <th>Value</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>

                                @foreach ($footers as $footer)
                                    <tbody>
                                        @switch($footer->type)
                                        @case($footer->type == 'fb')
                                        <td>FaceBook Link</td>
                                            @break
                                            @case($footer->type == 'twitter')
                                        <td>Twitter Link</td>
                                            @break
                                            @case($footer->type == 'gmail')
                                            <td>Gmail Link</td>
                                                @break
                                                @case($footer->type == 'pintrest')
                                                <td>Pintrest Link</td>
                                                    @break
                                                    @case($footer->type == 'yt')
                                                    <td>Youtube Link</td>
                                                        @break
                                                        @case($footer->type == 'insta')
                                                    <td>Instagram Link</td>
                                                        @break
                                            
                                            
                                    
                                        @default
                                        <td>{{ $footer->type }}</td>
                                    @endswitch
                                        
                                        <td>{{ $footer->value }}</td>
                                        @if ($footer->status == 1)
                                            <td>
                                                <div class="btn-success">Active</div>
                                            </td>
                                        @elseif($footer->status == 0)
                                            <td>
                                                <div class="btn-danger">Dective</div>
                                            </td>
                                        @endif
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModalCenter{{ $footer->id }}">
                                                Edit
                                            </button>
                                            <a href="{{route('admin.page.remove',$footer->id) }}"><button class="btn-danger">Delete</button></a>
                                        </td>
                                    </tbody>
                                    <div class="modal fade" id="exampleModalCenter{{ $footer->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $footer->name }} ({{ $footer->type }})</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.page.update', $footer->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <textarea type="text" value="{{ $footer->value }}" name="value" class="form-control" rows=""
                                                            cols="50"></textarea>
                                                        <input type="hidden" value="{{ $footer->type }}"
                                                            name="type" class="form-control">
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
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








</x-layouts.page>
