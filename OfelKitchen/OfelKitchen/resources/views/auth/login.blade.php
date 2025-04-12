<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{URL:: asset('assets/css/main.css')}}">
</head>
<body>

    @if (session('success'))
        <div class="success message-container">
            {{ session('success') }}
        </div>
    @endif

     @if (session('error'))
        <div class="error message-container">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}">
         <h2>Login</h2>
        @csrf

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
             @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

         <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Ingat Saya</label>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
</body>
</html>
