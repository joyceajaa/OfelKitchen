<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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

    <form method="POST" action="{{ route('register.post') }}">
        <h2>Register</h2>
        @csrf

        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

         <div>
            <label for="phone">Nomor Telepon (Opsional):</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
            @error('phone')
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
            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>
     <p>Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
</body>
</html>
