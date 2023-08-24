<link href={{ asset('assets/css/style.css') }} rel="stylesheet">

<div class="container" id="container">
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Log in</h1>
            <span>or use your account</span>
            <input type="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror" />
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <input type="password" name="password" placeholder="Password"
                class="@error('password') is-invalid @enderror" />
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <button>Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>EPIS</h1>
                <a href="/"><img src={{ asset('assets/img/LOGO_POM_TNI_AU.png') }} width="250px"></a>
                <p>Elektronic Personal Information System</p>
                <span>V.2.0.0
            </div>
        </div>
    </div>
</div>
</form>
