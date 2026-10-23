<!DOCTYPE html>
<html lang="en" style="background-color:black">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/rental.css') }}">
    <title>rentAL - Accedi</title>
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: black;">
    <div class="register">
        <div class="rentalRegister">
            <h1 class="mb-4 text-white">rent</h1>
            <img src="immagini/rental2.png" class="logo" alt="Logo" />
        </div>
        <div class="text-center sezioneMiddlereg">
            <form action="{{ route('registra.azione') }}" method="post">
                @csrf
                <input placeholder="Nome" type="text" name="name" class="mb-2 form-control" id="name" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Nome' è obbligatorio</div>
                @enderror
                <input placeholder="Cognome" type="text" name="lastname" class="mb-2 form-control" id="lastname" value="{{ old('lastname') }}">
                @error('lastname')
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Cognome' è obbligatorio</div>
                @enderror
                <input placeholder="Username" type="text" name="username" class="mb-2 form-control" value="{{ old('username') }}">
                @error('username')
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Username' è obbligatorio</div>
                @enderror
                <input placeholder="Email" type="email" name="email" class="mb-2 form-control" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Email' è obbligatorio</div>
                @enderror
                <input placeholder="Password" type="password" name="password" class="form-control">
                @error('password')
                    <div class="text-danger small text-start mt-1 errore">Il campo 'Password' è obbligatorio</div>
                @enderror
                <button class="text-center registratiButton" type="submit">Registrati</button>
            </form>
        </div>
        <div class="d-flex flex-column sezioneFinale">
            <p class="text-white">Hai già un account? <a class="accediUrl" href={{ route('login') }}>Accedi</a></p>
        </div>
    </div>
</body>

</html>