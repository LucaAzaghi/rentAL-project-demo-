<!DOCTYPE html>
<html lang="en" style="background-color:black">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/rental.css')); ?>">
    <title>rentAL - Accedi</title>
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: black;">
    <div class="register">
        <div class="rentalRegister">
            <h1 class="mb-4 text-white">rent</h1>
            <img src="immagini/rental2.png" class="logo" alt="Logo" />
        </div>
        <div class="text-center sezioneMiddlereg">
            <form action="<?php echo e(route('registra.azione')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input placeholder="Nome" type="text" name="name" class="mb-2 form-control" id="name" value="<?php echo e(old('name')); ?>">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Nome' è obbligatorio</div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input placeholder="Cognome" type="text" name="lastname" class="mb-2 form-control" id="lastname" value="<?php echo e(old('lastname')); ?>">
                <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Cognome' è obbligatorio</div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input placeholder="Username" type="text" name="username" class="mb-2 form-control" value="<?php echo e(old('username')); ?>">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Username' è obbligatorio</div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input placeholder="Email" type="email" name="email" class="mb-2 form-control" value="<?php echo e(old('email')); ?>">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger small text-start mb-1 errore">Il campo 'Email' è obbligatorio</div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input placeholder="Password" type="password" name="password" class="form-control">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger small text-start mt-1 errore">Il campo 'Password' è obbligatorio</div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <button class="text-center registratiButton" type="submit">Registrati</button>
            </form>
        </div>
        <div class="d-flex flex-column sezioneFinale">
            <p class="text-white">Hai già un account? <a class="accediUrl" href=<?php echo e(route('login')); ?>>Accedi</a></p>
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\lucaa\Desktop\html\rentAL\resources\views/auth/register.blade.php ENDPATH**/ ?>