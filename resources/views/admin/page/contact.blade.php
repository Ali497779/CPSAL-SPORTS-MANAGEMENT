<x-layouts.dashboard>

    <div id="accordion">

        {{------------- Content Card ------------}}
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
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
                            @foreach ($contact as $homeItem)
                                <tr>
                                    <td>{{ $homeItem->type }}</td>
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
                                        <a title="Banner Detail " class="btn btn-dark text-white" data-toggle="modal"
                                            data-target="#exampleModalCenter{{ $homeItem->id }}"><i
                                                class="fa fa-eye"></i></a>
                                    </td>
                                </tr>


                                {{-- Edit Model --}}
                                <div class="modal fade" id="exampleModaledititem{{ $homeItem->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit
                                                    {{ $homeItem->type }}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
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
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                {{-- View Model --}}
                                <div class="modal fade" id="exampleModalCenter{{ $homeItem->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">{{ $homeItem->type }}
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $homeItem->value }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
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



        {{------------- Contact Card -----------}}
        <div class="card">
            <div class="" id="headingTwo">
                <h5 class="mb-0 card-header d-flex justify-content-between">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        Contact Card
                    </button>


                    <button class="btn btn-dark " class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal5"><i class="fa fa-plus"></i>Add</button>
                </h5>
            </div>




            {{-- Add Modal --}}
            <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.addcontactcard') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" name="contactnamevalue"
                                        id="recipient-name">
                                    <input type="hidden" class="form-control" name="contacttype" value="Contact"
                                        id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Phone</label>
                                    <input type="text" class="form-control" name="contactphonevalue"
                                        id="recipient-name">
                                    <input type="hidden" class="form-control" name="contactphonetype"
                                        value="phone" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email</label>
                                    <input type="Email" class="form-control" name="contactemailvalue"
                                        id="recipient-name">
                                    <input type="hidden" class="form-control" name="contactemailtype"
                                        value="mail" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Location</label>
                                    <input type="Address" class="form-control" name="contactlocationvalue"
                                        id="recipient-name">
                                    <input type="hidden" class="form-control" name="contactlocationtype"
                                        value="location" id="recipient-name">
                                </div>
                                <input type="hidden" name="pagevalue" value="Contact">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>




            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">

                    @foreach ($contactcard as $homeItem)
                        <p class="d-flex justify-content-between">
                            <a class="btn btn-warning" data-toggle="collapse" onclick="getdata({{ $homeItem->id }})"
                                href="#multiCollapseExample{{ $homeItem->id }}" role="button" aria-expanded="false"
                                aria-controls="multiCollapseExample1">{{ $homeItem->value }}</a>

                        </p>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample{{ $homeItem->id }}">
                                    <div class="card card-body">

                                        <div class="text-right mb-2">
                                            <a href="{{ route('admin.deletecard', $homeItem->id) }}"
                                                title="Delete Contact " class="btn btn-danger text-white"><i
                                                    class="fa fa-trash">Delete Card</i></a>
                                        </div>

                                        <table class="table table-bordered">
                                            <thead class="text-white bg-dark">
                                                <tr class="text-white">
                                                    <th>Item</th>
                                                    <th>Value</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="card-data{{ $homeItem->id }}">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="modelsData"></div>

                        {{-- Edit Name Model --}}
                        {{-- Edit Model --}}
                        <div class="modal fade" id="exampleModaledititem{{ $homeItem->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit {{ $homeItem->type }}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
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
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        {{-- View Model --}}
                        <div class="modal fade" id="exampleModalCenter{{ $homeItem->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $homeItem->type }}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $homeItem->value }}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>


    </div>


</x-layouts.dashboard>

<script>
    function getdata(bannerID) {
        $.ajax({
            type: "GET",
            url: '/admin/page/getcontact/' + bannerID,
            success: function(data) {
                $("#card-data"+bannerID).empty();
                $.map(data,function(value){
                    
                    $("#card-data"+bannerID).append(`
                        <tr>
                            <td>${value.type}</td>
                            <td>${value.value}</td>
                            <td>
                                <a href="/admin/deactiveitem/${value.id}">
                                ${value.status == 1 ? `<button class="btn btn-success">Active</button>` : `<button class="btn btn-danger">Deactive</button>`}
                                </a>
                            </td>
                            <td>
                                <a title="Edit Item" class="btn btn-primary text-white">
                                    <i class="fa fa-edit" data-toggle="modal"
                                        data-target="#exampleModaledititem${value.id}"></i>
                                </a>
                                <a title="Banner Detail " class="btn btn-dark text-white" data-toggle="modal" data-target="#exampleModalCenter${value.id}"><i
                                    class="fa fa-eye"></i></a>
                            </td>
                        </tr>

                        
                    `);

                    document.getElementById("modelsData").innerHTML += `
                    <div class="modal fade" id="exampleModaledititem${value.id}" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalLabel${value.type}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel${value.type}">Edit ${value.type}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="page/edit/${value.id}" method="POST">
                                        <div class="modal-body">
                                            @csrf
                                            @method("PUT")
                                            <input type="text" class="form-control" name="value"
                                                value=${value.value}>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="exampleModalCenter${value.id}" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalCenterTitle${value.type}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle${value.type}">${value.value}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ${value.value}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>`
                });
            }
        });
    }
</script>
