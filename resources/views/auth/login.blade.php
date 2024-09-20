<style>
    body {
        background: url('{{ asset('assets/images/main-slider-img1.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .logIN {
        margin-top: 38px !important;
        padding: 0 76px 0 76px !important;
        text-align: center !important;
        font-size: 12px !important;
        font-weight: bold !important;
        font-family: 'Work Sans' !important;
        background: #ffc722 !important;
        line-height: 38px !important;
        border: none !important;
        border-radius: 0 !important;
        display: inline-block !important;
        color: #363533 !important;
        text-transform: uppercase !important;
        position: relative !important;
        transition: background 600ms !important;
        -webkit-transition: background 600ms !important;
    }

    .logIN:before {
        content: '' !important;
        position: absolute !important;
        top: -3px !important;
        right: -3px !important;
        bottom: -3px !important;
        left: -3px !important;
        border: 1px solid #ffc722 !important;
    }

    .logIN:hover {
        text-decoration: none !important;
        background: #363533 !important;
        color: #ffc722 !important;
        cursor: pointer !important;
    }

    .signUP {
        color: #363533;
        font-size: 15px;
        font-weight: 700;
        
        background: #ffc722;
        padding: 5px 10px;
        font-size: 12px; 
        text-decoration: none;
        text-transform: uppercase;
        font-family: 'Work Sans';
    }
    .signUP:hover{
        text-decoration: none !important;
        background: #363533;
        color: #ffc722 !important;
        cursor: pointer !important;
    }
    ::placeholder{
        color: #FFF !important;
    }
</style>
<x-layouts.auth>
    <div class="card mt-5" style="background: #0a0a0a73; border-radius: 0; border:none;">
        <div class="card-body">
            <a href="/" class="signUP">Back To Home</a>
            <div class="d-flex justify-content-center">
                <img src="{{asset('dashboard/img/cpsal.png')}}" alt="">

            </div>
            <h3 class="text-center" style="color: #FFF;">Account Login</h3>
            @if (session('message'))
                <div class="text-danger text-center">{{ session('message') }}</div>
            @endif
            <form action="{{ route('auth.check') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label" style="color:#FFF;">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email"
                    style="background:transparent; border:2px solid #ffc722; color: #FFF;">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="color:#FFF;">Password</label>
                    <input type="password" name="password" id="password" class="form-control"
                        style="background:transparent; border:2px solid #ffc722; color: #FFF;" placeholder="Enter password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" value="1" id="remember">
                    <label class="form-check-label" for="remember" style="color:#FFF;">
                        Remember me
                    </label>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary logIN">Login</button>

                </div>

                <a href="{{ route('auth.register') }}" class="signUP">register</a>

            </form>
        </div>
    </div>
</x-layouts.auth>
