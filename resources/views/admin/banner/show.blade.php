<x-layouts.dashboard title="Coach Detail">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h3>Coach Detail</h3>
                <a href="{{ route('admin.banner.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>
                    Back</a>
                    {{-- {{dd($banner) }} --}}
            </div>
        </div>
        <div class="card-body">
            @foreach ($banners as $banner)
                
           
            <img src="{{ Storage::url($banner->image) }}" width="800px" alt="school image">

            <table class="table table-bordered">
                <tbody>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <th><h2>Heading:</h2></th>
                        <td><h2>{{ $banner->whiteheading }} <span class="yellow">{{$banner->yelloheading }}</span></h2></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                        <th><h3>Quote:</h3></th>
                        <td>
                        <h3>
                            {{$banner->whitep}} <span class="yellow"> {{$banner->yellowp }}</span> {{$banner->whitep2 }}
                        </h3>
                        </td>
                    </tr>
                </tbody>
            </table>
            @endforeach
        </div>
    </div>
    <style>
        .yellow{
            color: #ffc722;
        }
    </style>
</x-layouts.dashboard>
