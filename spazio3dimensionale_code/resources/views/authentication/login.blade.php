<main>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <form action="{{route('home')}}" class="annulla_left">
        <button type="submit">Annulla</button>
    </form>
    <div class="login-container">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="login">
                <h2>Login</h2>
                <div>
                    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" style="width: 100%;">

                </div>
                <div>
                    <input type="password" name="password" placeholder="Password" style="width: 100%;">

                </div>
                @error('username')
                <span class="error-message">{{ $message }}</span>
                @enderror
                @error('password')
                <span class="error-message">{{ $message }}</span>
                @enderror
                <button type="submit" style="width: 100%;"> Accedi </button>
            </div>
        </form>
    </div>
</main>