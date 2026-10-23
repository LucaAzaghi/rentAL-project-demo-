<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/rental.css') }}">
    <title>rentAL - Accedi</title>
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #121212; margin: 0;">
    <div class="login">
        <div class="rentalLogin">
            <h1 class="mb-4 text-white">rent</h1>
            <img src="immagini/rental2.png" class="logo" alt="Logo"/>
        </div>
        <form class="text-center sezioneMiddle" action="{{ route('login.azione') }}" method="post">
                @csrf
                @error('credenziali')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <input placeholder="Email" type="email" name="email" class="mb-2 form-control" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Email' è sbagliato</div>
                @enderror
                <input placeholder="Password" type="password" name="password" class="mb-2 form-control" id="password">
                @error('password')
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Password' è sbagliato</div>
                @enderror
                <button class="text-center accediButton" type="submit">Accedi</button>
        </form>
        <div class="d-flex flex-column sezioneSotto">
            <p class="text-white">Non hai un account? <a class=" qui2" href={{ route('register') }}>Registrati</a></p>
        </div>
    </div>
</body>

</html>