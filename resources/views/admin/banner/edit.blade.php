<x-layouts.dashboard title="battle List">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h2>Add Front Side</h2>
            </div>
        </div>
        <div class="card-body">
            @foreach ($banners as $banner)
                
            
            <form action="{{ route('admin.banner.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <h3>Banner Upload</h3>
                    <input type="file" name="image" value="{{$banner->image }}" id="image-upload" accept="image/*" onchange="displayImage(event)" />
                    <div id="image-container">
                      <img id="uploaded-image" style="display: none;" />
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">White Heading <sup class="text-danger">*</sup></label>
                    <input type="text" name="whiteheading" id="whiteheading" value="{{ old('whiteheading') }}" class="form-control" placeholder="Enter White Heading">
                    @error('whiteheading')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Yellow Heading <sup class="text-danger">*</sup></label>
                    <input type="text" name="yelloheading" id="yelloheading" value="{{ old('yelloheading') }}" class="form-control" placeholder="Enter name">
                    @error('yelloheading')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="name" class="form-label">White Quote <sup class="text-danger">*</sup></label>
                  <input type="text" name="whitep" id="whitep" value="{{ old('whitep') }}" class="form-control" placeholder="Enter name">
                  @error('whitep')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Yellow Quote <sup class="text-danger">*</sup></label>
                <input type="text" name="yellowp" id="yellowp" value="{{ old('yellowp') }}" class="form-control" placeholder="Enter name">
                @error('yellowp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">White Quote <sup class="text-danger">*</sup></label>
              <input type="text" name="whitep2" id="whitep2" value="{{ old('whitep2') }}" class="form-control" placeholder="Enter name">
              @error('whitep2')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>
                
                <div class="row" id="player-fields-container">
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger text-white mr-3"><i
                            class="fa fa-times"></i> Cancel</a>
                    <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </form>
                @endforeach
                    {{-- <button class="btn btn-secondary" style="margin-left: 20px;" title="See How It Looks !"><i class="fa fa-eye"></i> Show</button> --}}
                </div>


              
  {{-- <div class="content">
    <div class="tgline"><h2 id="tgline">HELLO</h2></div>
    <div class="tgyellow"><h2 id="tgyellow" style="color:#ffc722;">WORLD</h2></div>
  </div> --}}
                
            
        </div>
    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        /* CSS styles for image container */
        #image-container {
          margin-top: 20px;
        }
        #image-container img {
          max-width: 500px;
        }
        .content{
            font-weight: 900px;
            display: flex;
            position: absolute;       
        }

        /* .tgline{
            color: rgb(223, 0, 0);
            z-index: 1;
            top: -220px;
        }
        .tgyellow{
            color: #ffc722;
            z-index: 1;

        } */
      </style>
      <script>
        // JavaScript function to display the uploaded image
        function displayImage(event) {
          var image = document.getElementById('uploaded-image');
          image.src = URL.createObjectURL(event.target.files[0]);
          image.style.display = 'block';
         
        }
      </script>
</x-layouts.dashboard>